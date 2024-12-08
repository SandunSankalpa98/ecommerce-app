<nav class="bg-gray-800 text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo Section -->
        <div class="text-lg font-bold">
            <a href="/">
                <!-- Logo Image -->
                <img src="{{ asset('../../../public/assets/Colorful-circle-logo-design-illustration-on-transparent-background-PNG.png') }}" alt="Logo" class="h-8 w-auto">
            </a>
        </div>

        <!-- Desktop Nav Links (Visible on medium screens and up) -->
        <div class="hidden md:flex space-x-4">
            <a href="/" class="text-white hover:text-gray-400">Home</a>
            <a href="/products" class="text-white hover:text-gray-400">Products</a>
            <a href="/cart" class="text-white hover:text-gray-400">Cart</a>
            <a href="/login" class="text-white hover:text-gray-400">Login</a>
        </div>

        <!-- Hamburger Menu (Visible on small screens) -->
        <div class="md:hidden">
            <button id="hamburger" class="text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Nav Links (Initially hidden, toggled on click) -->
    <div id="mobile-menu" class="md:hidden hidden bg-gray-800 text-white py-4 space-y-4">
        <a href="/" class="block text-center">Home</a>
        <a href="/products" class="block text-center">Products</a>
        <a href="/cart" class="block text-center">Cart</a>
        <a href="/login" class="block text-center">Login</a>
    </div>
</nav>
