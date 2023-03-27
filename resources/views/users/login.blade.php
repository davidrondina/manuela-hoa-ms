<x-layout>
    <x-header />

    <main>

        <!--Login-->
        <div class=" font-extrabold flex justify-center items-center h-screen">
            <div class="w-96 p-6 shadow-lg bg-white rounded-md">
                <h1 class=" text-xl block text-center font-bold">LOGIN</h1>
                <p class=" text-sm text-center">Log into your account to post gigs</p>
                <hr class="mt-2">
                <!--Email-->
                <div class="mt-2">
                    <label for="email" class="block text-base mb-2">Email</label>
                    <input type="text" id="Email" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600"/>
                </div>
                <!--Password-->
                <div class="mt-2">
                    <label for="password" class="block text-base mb-2">Password</label>
                    <input type="password" id="password" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600"/>
                </div>
                <!-- Button-->
                <div class="mt-5">
                    <button type="submit" class="border-2 rounded-lg border-red-600 bg-red-600 text-white py-1 px-3">Sign In</button>
                </div>
                <div>
                <!-- Color text-->
                <div class="mt-5">
                    <p class="text-sm">Don't have an account?<a class=" text-red-500" href="#"> Register</a></p>

                </div>
            </div>

        </div>
    </main>

    <x-footer />
</x-layout>
