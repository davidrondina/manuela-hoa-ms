<x-layout>
    <x-header />

    <main>

        <!--Login-->
        <div class="flex justify-center items-center h-screen">
            <form action="/users/authenticate" method="POST">
                @csrf

                <div class="w-96 p-6 shadow-lg bg-white">
                    <h1 class="text-3xl block text-center font-bold">Login</h1>
                    <p class="text-sm text-center"></p>
                    <hr class="my-3">
                    <!--Email-->
                    <div class="mt-2">
                        <label for="email" class="block text-base mb-2">Email</label>
                        <input type="text" name="email" id="email" value="{{ old('email') }}" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter your email address" />

                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <!--Password-->
                    <div class="mt-2">
                        <label for="password" class="block text-base mb-2">Password</label>
                        <input type="password" name="password" id="password" value="{{ old('password') }}" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter your password"/>

                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <!-- Button-->
                    <div class="mt-5">
                        <button type="submit" class="cta-btn text-white py-1 px-3 focus:ring-4 focus:ring-blue-300">Sign In</button>
                    </div>
                    <!-- Color text-->
                    {{-- <div class="mt-5">
                        <p class="text-sm">Don't have an account?<a class=" text-red-500" href="#"> Register</a></p>
                    </div> --}}
                </div>
            </form>
        </div>




        {{-- <div class="h-screen flex items-center">
            <form action="/users/authenticate" method="POST">
                @csrf

                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="w-64 p-2 border border-gray-300" value="{{ old('email') }}" class="border border-gray-300" />

                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="w-64 p-2 border border-gray-300" value="{{ old('password') }}" class="border border-gray-300" />

                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <button class="bg-theme-green">Login</button>
            </form>
        </div> --}}
    </main>

    <x-footer />
</x-layout>
