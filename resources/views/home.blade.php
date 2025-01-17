@extends('layouts.app')

@section('content')
  
    <x-carousel />

    <main class="container mx-auto mt-6 py-5">
        <h2 class="text-3xl sm:text-4xl text-center mt-4 mb-6">
            Shop By Categories
        </h2>
        
        <br>
        <x-category-list />

        <br>
        <br>

        <!-- Banner Section -->
        <div class="mt-10">
            <img src="{{ asset('images/pic3.jpg') }}" alt="Shop Banner" class="w-full rounded-lg shadow-lg">
        </div>
        <br>
        <br>

        <x-productlist />
    </main>

    <x-footer />
@endsection
