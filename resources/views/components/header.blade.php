<header class="flex justify-between bg-slate-800 shadow-md text-white">
    <div>
      <a href="/src" class="block py-navbar-item pl-5">Logo</a>
    </div>
    <div
      id="mobile-menu"
      class="block fixed z-10 top-0 left-0 bottom-0 height h-full w-[220px] transition-all bg-slate-900 md:hidden hidden"
    >
      <ul>
        <li>
          <a
            href="/"
            class="block py-2 px-3 transition-colors hover:bg-slate-800"
          >Home</a>
        </li>
        <li>
          <a
            href="/mens"
            class="block py-2 px-3 transition-colors hover:bg-slate-800"
          >Mens</a>
        </li>
        <li>
          <a
            href="/womens"
            class="block py-2 px-3 transition-colors hover:bg-slate-800"
          >Womens</a>
        </li>
      </ul>
    </div>
    <nav class="hidden md:block">
      <ul class="grid grid-flow-col">
        <li>
          <a
            href="/"
            class="block py-navbar-item px-navbar-item hover:bg-slate-900"
          >Home</a>
        </li>
        <li>
          <a
            href="#"
            class="block py-navbar-item px-navbar-item hover:bg-slate-900"
          >Mens</a>
        </li>
        <li>
          <a
            href="#"
            class="block py-navbar-item px-navbar-item hover:bg-slate-900"
          >Womens</a>
        </li>
      </ul>
    </nav>
    <nav class="hidden md:block">
      <ul class="grid grid-flow-col items-center">
        <li>
          <a
            href="/cart"
            class="inline-flex items-center py-navbar-item px-navbar-item hover:bg-slate-900"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 mr-2"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
              />
            </svg>
            Cart
          </a>
        </li>
        <li class="relative">
          <button
            id="account-button"
            class="flex items-center py-navbar-item px-navbar-item pr-5 hover:bg-slate-900 focus:outline-none"
          >
            <span class="flex items-center">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                />
              </svg>
              My Account
            </span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 ml-2"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"
              />
            </svg>
          </button>
          <ul
            id="account-dropdown"
            class="absolute z-10 right-0 bg-slate-800 py-2 w-48 hidden"
          >
            <li>
              <a href="/src/profile.html" class="block px-3 py-2 hover:bg-slate-900">My Profile</a>
            </li>
            <li>
              <a href="/src/watchlist.html" class="block px-3 py-2 hover:bg-slate-900">Watchlist</a>
            </li>
            <li>
              <a href="/src/orders.html" class="block px-3 py-2 hover:bg-slate-900">My Orders</a>
            </li>
            <li>
              <a href="/src/logout.html" class="block px-3 py-2 hover:bg-slate-900">Logout</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <button
      id="mobile-menu-button"
      class="p-4 block md:hidden"
    >
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-6 w-6"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        stroke-width="2"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M4 6h16M4 12h16M4 18h16"
        />
      </svg>
    </button>
  </header>
  <script>
    // Toggle dropdown
    document.getElementById("account-button").addEventListener("click", () => {
      const dropdown = document.getElementById("account-dropdown");
      dropdown.classList.toggle("hidden");
    });
  
    // Toggle mobile menu
    document.getElementById("mobile-menu-button").addEventListener("click", () => {
      const mobileMenu = document.getElementById("mobile-menu");
      mobileMenu.classList.toggle("hidden");
    });
  </script>
  