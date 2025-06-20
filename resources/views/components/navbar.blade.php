<div class=" relative">
    <nav class="bg-white border-gray-200 fixed top-0 right-0 left-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ url('img/logo.svg') }}" class="h-9" alt="Carrent Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap">Car Rent</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-default" aria-expanded=" true">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">
                    <li>
                        <a href="/"
                            class="block py-2 px-3 {{ request()->is('/') ? 'text-black bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0' : 'text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0' }}"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#mostRent"
                            class="block py-2 px-3 {{ request()->is('cars') ? 'text-black bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0' : 'text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0' }}">Cars</a>
                    </li>
                    <li>
                        <a href="#location"
                            class="block py-2 px-3 {{ request()->is('location') ? 'text-black bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0' : 'text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0' }}">Location</a>
                    </li>
                    <li>
                        <a href="#ourService"
                            class="block py-2 px-3 {{ request()->is('service') ? 'text-black bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0' : 'text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0' }}">Service</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
