<!-- Mobile Header -->
<header x-data="{ isOpen: false }" class="z-10 w-full py-5 px-6  bg-theme-green text-white md:hidden shadow-lg sticky top-0">
    <div class="flex items-center justify-between">
        <a href="/" class="block font-semibold uppercase hover:text-gray-300">Manuela Homes Subdivision</a>
        <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
            <i x-show="!isOpen" class="fas fa-bars"></i>
            <i x-show="isOpen" class="fas fa-times"></i>
        </button>
    </div>

    <!-- Dropdown Nav (For Mobile)-->
    <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
            Login
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
            First Link
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
            Second Link
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
            Third Link
        </a>
    </nav>
</header>

<!-- Desktop Header -->
<header class="z-10 w-full py-2 px-6 sm:px-10 bg-theme-green text-white hidden md:flex md:justify-between shadow-lg sticky top-0">
    <div class="w-auto flex items-center justify-between">
        <a href="/" class="block font-semibold uppercase hover:text-gray-300">Manuela Homes Subdivision</a>
    </div>
    <nav class="h-full">
        <ul class="h-full flex gap-8">
            @auth
                <li>Logged In!</li>
            @endauth

            <li class="group w-[140px] p-3 rounded-lg text-center font-semibold nav-item"><a href="#" class="w-full opacity-75 group-hover:opacity-100">First Link</a></li>
            <li class="group w-[140px] p-3 rounded-lg text-center font-semibold nav-item"><a href="#" class="w-full opacity-75 group-hover:opacity-100">Second Link</a></li>
            <li class="group w-[140px] p-3 rounded-lg text-center font-semibold nav-item"><a href="#" class="w-full opacity-75 group-hover:opacity-100">Third Link</a></li>
            <li class="group w-[140px] p-3 rounded-lg text-center font-semibold nav-item"><a href="/login" class="w-full opacity-75 group-hover:opacity-100">Login</a></li>
        </ul>
    </nav>
</header>
