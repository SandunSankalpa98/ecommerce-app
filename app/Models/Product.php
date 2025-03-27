<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
     /** @use HasFactory<\Database\Factories\UserFactory> */
     use HasFactory, Notifiable;

     protected $table = 'product';
     protected $primaryKey = 'product_id';

     /**
      * The attributes that are mass assignable.
      *
      * @var array<int, string>
      */
      protected $fillable = [
        'product_name',
        'product_code',
        'product_description',
        'Product_Entity',
        'discount_price',
        'manufacturer',
        'brand',
        'isActive'
    ];

    /**
     * Get all images for the product
     */
    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'product_id');
    }

    /**
     * Get primary image for the product
     */
    public function primaryImage()
    {
        return $this->hasOne(ProductImage::class, 'product_id', 'product_id')
                    ->where('is_primary', true);
    }

}
