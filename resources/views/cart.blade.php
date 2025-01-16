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
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-500 ml-1 md:ml-2">Cart</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <div class="bg-white shadow-2xl rounded-lg overflow-hidden">
                    <div class="p-8">
                        <h2 class="text-3xl font-bold text-gray-800 mb-6">Your Cart</h2>
                        
                        <!-- Cart Items -->
                        @for ($i = 0; $i < 1; $i++)
                            <div class="flex items-center justify-between border-b py-4">
                                <div class="flex items-center">
                                    <img src="/images/products/pic{{ $i + 1 }}.jpg" alt="Product Image" class="w-10 h-10 object-cover rounded-lg mr-4"/>
                                    <div>
                                        <h3 class="text-lg font-medium text-gray-800">Product Name {{ $i + 1 }}</h3>
                                        <p class="text-gray-600">Size: M, Color: Blue</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex items-center border border-gray-300 rounded-lg mr-4">
                                        <button class="px-3 py-1 text-gray-600 hover:text-blue-600 focus:outline-none">-</button>
                                        <input type="number" min="1" value="1" class="w-12 text-center border-0 focus:outline-none text-gray-700">
                                        <button class="px-3 py-1 text-gray-600 hover:text-blue-600 focus:outline-none">+</button>
                                    </div>
                                    <span class="text-lg font-bold text-blue-600 mr-4">$24.99</span>
                                    <button class="text-red-500 hover:text-red-700">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        @endfor

                        <!-- Cart Summary -->
                        <div class="mt-8">
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-gray-600">Subtotal</span>
                                <span class="text-lg font-bold text-gray-800">$74.97</span>
                            </div>
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-gray-600">Shipping</span>
                                <span class="text-lg font-bold text-gray-800">$5.00</span>
                            </div>
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-gray-600">Tax</span>
                                <span class="text-lg font-bold text-gray-800">$6.00</span>
                            </div>
                            <div class="flex justify-between items-center border-t pt-4">
                                <span class="text-xl font-bold text-gray-800">Total</span>
                                <span class="text-2xl font-bold text-blue-600">$85.97</span>
                            </div>
                        </div>

                        <!-- Checkout Button -->
                        <div class="mt-8">
                            <button class="w-full bg-blue-600 text-white text-lg font-medium py-3 px-6 rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                                Proceed to Checkout
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Continue Shopping -->
                <div class="mt-8 text-center">
                    <a href="/" class="text-blue-600 hover:text-blue-800 font-medium">
                        <svg class="w-4 h-4 inline-block mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Continue Shopping
                    </a>
                </div>
            </div>
        </div>

        <!-- Product List Component -->
        {{-- <x-productlist /> --}}
    </main>

    <!-- Footer Component -->
    <x-footer />
@endsection