


@extends('layouts.app')

@section('content')
<x-header />
    <main class="container mx-auto mt-6 py-5">
        <div class="min-h-screen bg-gray-100 py-8 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <!-- Breadcrumb -->
                <nav class="flex mb-8" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="/" class="text-gray-700 hover:text-blue-600">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <a href="/category" class="text-gray-700 hover:text-blue-600 ml-1 md:ml-2">Men's Clothing</a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-500 ml-1 md:ml-2">Men's Casual Shirt</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <div class="bg-white shadow-2xl rounded-lg overflow-hidden">
                    <!-- Product Content -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 p-8">
                        <!-- Product Images -->
                        <div class="space-y-4">
                            <div class="aspect-w-1 aspect-h-1 w-full">
                                <img id="mainImage" src="/images/products/pic1.jpg" alt="Product Image" class="w-full h-full object-cover rounded-lg shadow-md">
                            </div>
                            <!-- Thumbnails -->
                            <div class="grid grid-cols-4 gap-4">
                                <button class="aspect-w-1 aspect-h-1 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-lg overflow-hidden">
                                    <img src="/images/products/pic1.jpg" alt="Thumbnail 1" class="w-full h-full object-cover hover:opacity-75 transition">
                                </button>
                                <button class="aspect-w-1 aspect-h-1 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-lg overflow-hidden">
                                    <img src="/images/products/pic1.jpg" alt="Thumbnail 2" class="w-full h-full object-cover hover:opacity-75 transition">
                                </button>
                                <button class="aspect-w-1 aspect-h-1 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-lg overflow-hidden">
                                    <img src="/images/products/pic1.jpg" alt="Thumbnail 3" class="w-full h-full object-cover hover:opacity-75 transition">
                                </button>
                                <button class="aspect-w-1 aspect-h-1 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-lg overflow-hidden">
                                    <img src="/images/products/pic1.jpg" alt="Thumbnail 4" class="w-full h-full object-cover hover:opacity-75 transition">
                                </button>
                            </div>
                        </div>

                        <!-- Product Details -->
                        <div class="flex flex-col">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h2 class="text-4xl font-bold text-gray-800">Men's Casual Shirt</h2>
                                    <div class="flex items-center mt-4">
                                        <div class="flex items-center">
                                            @for ($i = 0; $i < 5; $i++)
                                                <svg class="w-5 h-5 {{ $i < 4 ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                </svg>
                                            @endfor
                                        </div>
                                        <span class="ml-2 text-gray-600">(128 reviews)</span>
                                    </div>
                                </div>
                                <button class="text-gray-400 hover:text-red-500 transition">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>

                            <div class="mt-6">
                                <p class="text-gray-600 text-lg leading-relaxed">
                                    This stylish casual shirt is perfect for every occasion, offering a comfortable fit with a sleek design. Made from premium cotton blend fabric that ensures breathability and durability.
                                </p>
                                <div class="mt-6 space-y-4">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span class="text-gray-600">Premium cotton blend fabric</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span class="text-gray-600">Comfortable regular fit</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span class="text-gray-600">Easy to maintain</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8">
                                <div class="flex items-center justify-between">
                                    <span class="text-2xl font-bold text-blue-600">$24.99</span>
                                    <span class="text-green-500 bg-green-50 px-3 py-1 rounded-full text-sm font-medium">In Stock</span>
                                </div>
                            </div>

                            <!-- Size Selection -->
                            <div class="mt-8">
                                <label class="block text-sm font-medium text-gray-700 mb-3">Select Size</label>
                                <div class="grid grid-cols-4 gap-4">
                                    @foreach(['S', 'M', 'L', 'XL'] as $size)
                                        <button class="border-2 border-gray-300 rounded-md py-2 px-4 text-sm font-medium hover:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                            {{ $size }}
                                        </button>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Color Selection -->
                            <div class="mt-6">
                                <label class="block text-sm font-medium text-gray-700 mb-3">Select Color</label>
                                <div class="flex items-center space-x-4">
                                    @foreach(['red', 'blue', 'green', 'yellow'] as $color)
                                        <button class="w-10 h-10 rounded-full border-2 border-gray-300 focus:outline-none focus:ring-offset-2 focus:ring-2 transition-transform hover:scale-110"
                                                style="background-color: {{ $color }}">
                                        </button>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Quantity -->
                            <div class="mt-6">
                                <label class="block text-sm font-medium text-gray-700 mb-3">Quantity</label>
                                <div class="flex items-center border border-gray-300 rounded-lg w-32">
                                    <button class="px-3 py-2 text-gray-600 hover:text-blue-600 focus:outline-none">-</button>
                                    <input type="number" min="1" value="1" class="w-full text-center border-0 focus:outline-none text-gray-700">
                                    <button class="px-3 py-2 text-gray-600 hover:text-blue-600 focus:outline-none">+</button>
                                </div>
                            </div>

                            <!-- Buttons -->
                            <div class="mt-8 grid grid-cols-2 gap-4">
                                <button class="w-full bg-blue-600 text-white text-lg font-medium py-3 px-6 rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                                    Buy Now
                                </button>
                                <button class="w-full bg-gray-100 text-gray-800 text-lg font-medium py-3 px-6 rounded-lg shadow hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-colors flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Details Tabs -->
                    <div class="border-t mt-10">
                        <div class="px-8 py-6">
                            <div class="border-b border-gray-200">
                                <nav class="-mb-px flex space-x-8">
                                    <button class="border-blue-500 text-blue-600 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                        Description
                                    </button>
                                    <button class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                        Specifications
                                    </button>
                                    <button class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                        Reviews
                                    </button>
                                </nav>
                            </div>
                            <div class="mt-6 prose prose-sm max-w-none">
                                <h3 class="text-lg font-medium text-gray-900">Product Description</h3>
                                <p class="mt-4 text-gray-500">
                                    Our Men's Casual Shirt combines style with comfort, making it perfect for both casual outings and semi-formal occasions. The premium cotton blend fabric ensures breathability while maintaining a crisp, professional look throughout the day.
                                </p>
                                <p class="mt-4 text-gray-500">
                                    The regular fit design provides comfort without compromising on style, and the carefully selected fabric blend ensures minimal wrinkles and easy maintenance. Available in multiple colors and sizes, this shirt is a versatile addition to any wardrobe.
                                </p>
                                <h4 class="text-lg font-medium text-gray-900 mt-6">Care Instructions</h4>
                                <ul class="mt-4 list-disc list-inside text-gray-500">
                                    <li>Machine wash cold</li>
                                    <li>Do not bleach</li>
                                    <li>Tumble dry low</li>
                                    <li>Iron on medium heat if needed</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Related Products -->
                <div class="mt-16">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">You May Also Like</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                                <img src="/path/to/related-product{{ $i + 1 }}.jpg" alt="Related Product" class="w-full h-64 object-cover">
                                <div class="p-4">
                                    <h3 class="text-lg font-medium text-gray-900">Similar Casual Shirt</h3>
                                    <p class="text-gray-500 mt-1">Premium Quality</p>
                                    <div class="mt-4 flex items-center justify-between">
                                        <span class="text-blue-600 font-bold">$22.99</span>
                                        <button class="text-sm text-blue-600 hover:text-blue-500">View Details</button>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer Component -->
    <x-footer />
@endsection