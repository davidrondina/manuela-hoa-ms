<!-- Desktop Header -->
<header class="w-full justify-end items-center bg-white py-2 px-6 hidden shadow-lg sm:flex">
    <div x-data="{ isOpen: false }" class="relative flex justify-end items-center">
        <div class="flex items-center">
            {{-- @auth
                <span>Logged In</span>
            @endauth --}}
            <button @click="isOpen = !isOpen" class="relative z-10 h-12 mr-3 px-3 rounded-lg overflow-hidden hover:bg-gray-300 focus:bg-gray-300 focus:outline-none">
                <i class="fas fa-angle-down mr-3"></i>
                Admin
            </button>
            <div class="z-10 w-12 h-12 rounded-full overflow-hidden"><img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400"></div>
        </div>

        <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
        <div x-show="isOpen" class="absolute top-0 right-7 w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
            <a href="#" class="block px-4 py-2 hover:bg-theme-light-green hover:text-white"><i class="fas fa-user-circle"></i> Account</a>

            <form action="/logout" method="POST">
                @csrf

                <button class="w-full px-4 py-2 text-left hover:bg-theme-light-green hover:text-white">
                    <i class="fas fa-door-closed"></i> Logout
                </button>
            </form>
        </div>
    </div>
</header>

<!-- Mobile Header & Nav -->
<header x-data="{ isOpen: false }" class="w-full bg-theme-green py-5 px-6 sm:hidden">
    <div class="flex items-center justify-between">
        <a href="index.html" class="text-white sm\:text-3xl font-semibold uppercase hover:text-gray-300">Manuela Homes Subdivision</a>
        <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
            <i x-show="!isOpen" class="fas fa-bars"></i>
            <i x-show="isOpen" class="fas fa-times"></i>
        </button>
    </div>

    <!-- Dropdown Nav -->
    <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
        <a href="#" class="flex items-center active-nav-link text-white py-2 pl-4 nav-item">
            <i class="fas fa-bullhorn mr-3"></i>
            Announcements
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
            <i class="fas fa-user mr-3"></i>
            Members
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
            <i class="fas fa-table mr-3"></i>
            Transactions
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
            <i class="fas fa-comment-dots mr-3"></i>
            Communication
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
            <i class="fas fa-vote-yea mr-3"></i>
            Voting
        </a>
        {{-- <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
            <i class="fas fa-calendar mr-3"></i>
            Calendar
        </a> --}}
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
            <i class="fas fa-balance-scale mr-3"></i>
            Rules
        </a>
        {{-- <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
            <i class="fas fa-cogs mr-3"></i>
            Support
        </a> --}}
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
            <i class="fas fa-user-circle mr-3"></i>
            Account
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
            <i class="fas fa-sign-out-alt mr-3"></i>
            Sign Out
        </a>
    </nav>
</header>
