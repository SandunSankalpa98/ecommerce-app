<!-- resources/views/components/product-list.blade.php -->
<section class="container mx-auto mt-6">
    <h2 class="text-3xl sm:text-4xl text-center mt-4 mb-6">Our Products</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        {{-- @php
            $products = [
                // Example Product List
                [
                    'product_id' => 1,
                    'product_name' => 'Men\'s Casual Shirt',
                    'product_code' => 'MCS-101',
                    'product_description' => 'Stylish and comfortable cotton casual shirt for men.',
                    'price' => 29.99,
                    'discount_price' => 24.99,
                    'manufacturer' => 'Levi\'s',
                    'brand' => 'Levi\'s',
                    'isActive' => true,
                    'image' => 'pic8.jpg',
                    'created_at' => '2024-06-01',
                    'last_updated' => '2024-06-10',
                    'category' => 'Men'
                ],
                [
                    'product_id' => 1,
                    'product_name' => 'Men\'s Casual Shirt',
                    'product_code' => 'MCS-101',
                    'product_description' => 'Stylish and comfortable cotton casual shirt for men.',
                    'price' => 29.99,
                    'discount_price' => 24.99,
                    'manufacturer' => 'Levi\'s',
                    'brand' => 'Levi\'s',
                    'isActive' => true,
                    'image' => 'pic4.jpg',
                    'created_at' => '2024-06-01',
                    'last_updated' => '2024-06-10',
                    'category' => 'Men'
                ],
                [
                    'product_id' => 1,
                    'product_name' => 'Men\'s Casual Shirt',
                    'product_code' => 'MCS-101',
                    'product_description' => 'Stylish and comfortable cotton casual shirt for men.',
                    'price' => 29.99,
                    'discount_price' => 24.99,
                    'manufacturer' => 'Levi\'s',
                    'brand' => 'Levi\'s',
                    'isActive' => true,
                    'image' => 'pic1.jpg',
                    'created_at' => '2024-06-01',
                    'last_updated' => '2024-06-10',
                    'category' => 'Men'
                ],
                [
                    'product_id' => 1,
                    'product_name' => 'Men\'s Casual Shirt',
                    'product_code' => 'MCS-101',
                    'product_description' => 'Stylish and comfortable cotton casual shirt for men.',
                    'price' => 29.99,
                    'discount_price' => 24.99,
                    'manufacturer' => 'Levi\'s',
                    'brand' => 'Levi\'s',
                    'isActive' => true,
                    'image' => 'pic5.jpg',
                    'created_at' => '2024-06-01',
                    'last_updated' => '2024-06-10',
                    'category' => 'Men'
                ],
                [
                    'product_id' => 1,
                    'product_name' => 'Men\'s Casual Shirt',
                    'product_code' => 'MCS-101',
                    'product_description' => 'Stylish and comfortable cotton casual shirt for men.',
                    'price' => 29.99,
                    'discount_price' => 24.99,
                    'manufacturer' => 'Levi\'s',
                    'brand' => 'Levi\'s',
                    'isActive' => true,
                    'image' => 'pic6.jpg',
                    'created_at' => '2024-06-01',
                    'last_updated' => '2024-06-10',
                    'category' => 'Men'
                ],
                [
                    'product_id' => 1,
                    'product_name' => 'Men\'s Casual Shirt',
                    'product_code' => 'MCS-101',
                    'product_description' => 'Stylish and comfortable cotton casual shirt for men.',
                    'price' => 29.99,
                    'discount_price' => 24.99,
                    'manufacturer' => 'Levi\'s',
                    'brand' => 'Levi\'s',
                    'isActive' => true,
                    'image' => 'pic7.jpg',
                    'created_at' => '2024-06-01',
                    'last_updated' => '2024-06-10',
                    'category' => 'Men'
                ],
                [
                    'product_id' => 1,
                    'product_name' => 'Men\'s Casual Shirt',
                    'product_code' => 'MCS-101',
                    'product_description' => 'Stylish and comfortable cotton casual shirt for men.',
                    'price' => 29.99,
                    'discount_price' => 24.99,
                    'manufacturer' => 'Levi\'s',
                    'brand' => 'Levi\'s',
                    'isActive' => true,
                    'image' => 'pic9.jpg',
                    'created_at' => '2024-06-01',
                    'last_updated' => '2024-06-10',
                    'category' => 'Men'
                ],
                [
                    'product_id' => 1,
                    'product_name' => 'Men\'s Casual Shirt',
                    'product_code' => 'MCS-101',
                    'product_description' => 'Stylish and comfortable cotton casual shirt for men.',
                    'price' => 29.99,
                    'discount_price' => 24.99,
                    'manufacturer' => 'Levi\'s',
                    'brand' => 'Levi\'s',
                    'isActive' => true,
                    'image' => 'pic1.jpg',
                    'created_at' => '2024-06-01',
                    'last_updated' => '2024-06-10',
                    'category' => 'Men'
                ],
                [
                    'product_id' => 1,
                    'product_name' => 'Men\'s Casual Shirt',
                    'product_code' => 'MCS-101',
                    'product_description' => 'Stylish and comfortable cotton casual shirt for men.',
                    'price' => 29.99,
                    'discount_price' => 24.99,
                    'manufacturer' => 'Levi\'s',
                    'brand' => 'Levi\'s',
                    'isActive' => true,
                    'image' => 'pic13.jpg',
                    'created_at' => '2024-06-01',
                    'last_updated' => '2024-06-10',
                    'category' => 'Men'
                ],
                [
                    'product_id' => 1,
                    'product_name' => 'Men\'s Casual Shirt',
                    'product_code' => 'MCS-101',
                    'product_description' => 'Stylish and comfortable cotton casual shirt for men.',
                    'price' => 29.99,
                    'discount_price' => 24.99,
                    'manufacturer' => 'Levi\'s',
                    'brand' => 'Levi\'s',
                    'isActive' => true,
                    'image' => 'pic12.jpg',
                    'created_at' => '2024-06-01',
                    'last_updated' => '2024-06-10',
                    'category' => 'Men'
                ],
                [
                    'product_id' => 1,
                    'product_name' => 'Men\'s Casual Shirt',
                    'product_code' => 'MCS-101',
                    'product_description' => 'Stylish and comfortable cotton casual shirt for men.',
                    'price' => 29.99,
                    'discount_price' => 24.99,
                    'manufacturer' => 'Levi\'s',
                    'brand' => 'Levi\'s',
                    'isActive' => true,
                    'image' => 'pic10.jpg',
                    'created_at' => '2024-06-01',
                    'last_updated' => '2024-06-10',
                    'category' => 'Men'
                ],
                [
                    'product_id' => 1,
                    'product_name' => 'Men\'s Casual Shirt',
                    'product_code' => 'MCS-101',
                    'product_description' => 'Stylish and comfortable cotton casual shirt for men.',
                    'price' => 29.99,
                    'discount_price' => 24.99,
                    'manufacturer' => 'Levi\'s',
                    'brand' => 'Levi\'s',
                    'isActive' => true,
                    'image' => 'pic11.jpg',
                    'created_at' => '2024-06-01',
                    'last_updated' => '2024-06-10',
                    'category' => 'Men'
                ],
                // Add more products here...
            ];
        @endphp --}}

        @foreach ($products as $product)
        <div class="group bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in-out">
            <!-- Product Image with Zoom Effect -->
            <div class="relative overflow-hidden">
                <a href="/productdDetails"><img src="{{ asset('images/products/'.$product->primaryImage['image_url']) }}" alt="{{ $product['product_name'] }}"
                    class="w-full h-100 object-cover group-hover:scale-110 transition-transform duration-300 ease-in-out"></a>
            </div>
            
            <div class="p-4 text-center">
                <h3 class="text-xl font-semibold text-gray-800">{{ $product['product_name'] }}</h3>
                <p class="text-gray-600 mt-2">${{ number_format($product['discount_price'], 2) }}</p>
                <div class="flex justify-center gap-4 mt-4">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Add to Cart</button>
                    <button class="flex items-center justify-center gap-2 border border-red-400 text-red-400 px-4 py-2 rounded hover:bg-red-50 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 6.42 3.5 5 5.5 5c1.54 0 3.04.99 3.57 2.36h1.87C14.46 5.99 15.96 5 17.5 5 19.5 5 21 6.42 21 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                        </svg>
                        Wishlist
                    </button>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</section>
