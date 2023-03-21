<x-layout>
    <x-header />

    <main>
        {{-- <h1 class="bg-sidebar text-3xl font-bold underline font-karla uppercase">
            Hello world!
        </h1>
        <div class="bg-sidebar text-sm font-bold">Hello</div> --}}
        <!-- HERO IMAGE -->
    <div class="h-[480px] sm:h-[350px] text-white bg-cover bg-no-repeat sm:bg-right-bottom" style="background-image: url('/images/banner.jpg');">
        <div class="h-full mb-5 py-7 px-5 sm:px-10 flex flex-col justify-end space-y-4 bg-black/60 overflow-hidden">
            <div class="w-3/4 text-5xl font-semibold"
                data-aos="fade-up"
                data-aos-duration="2400">Manuela Homes Subdivision</div>
            <!-- <div class="w-3/4 sm:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, dicta.</div> -->
            <div class="w-3/4 sm:text-lg"
                data-aos="fade-up"
                data-aos-duration="2400">Block 1 Lot 8-B, Diamond St., Manuela Homes, Talon 5, Las Piñas City</div>
        </div>
    </div>

    <!-- NEWS -->
    <div class="py-7 px-5 sm:px-10">
        <div class="text-2xl sm:text-3xl py-3 px-4 mb-5 bg-sidebar text-white font-semibold"> Updates</div>

        <div class="md:grid md:grid-cols-2 flex flex-col gap-5">

            <div class="bg-white h-[1000px] max-h-[215px] sm:max-h-[175px] flex flex-col sm:flex-row">
                <div class="w-full h-2/5 max-h-[40%] sm:h-full sm:max-h-full flex-initial">
                    <img class="w-full h-full" src="{{asset('/images/news.jpg')}}" alt="">
                </div>
                <div class="w-full h-3/5 max-h-[60%] sm:h-full sm:max-h-full sm:px-4 px-2 py-3 overflow-hidden flex-initial text-sm sm:text-base">
                <a href="#" class="flex hover:underline mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore tenetur dolorum dolore magnam hic quia!</a>
                <ul class="flex overflow-x-auto">
                    <li class="bg-sidebar rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Tag 1</a></li>
                    <li class="bg-sidebar rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Tag 2</a></li>
                    <li class="bg-sidebar rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Tag 3</a></li>
                </ul>
                </div>
            </div>

            <div class="bg-white h-[1000px] max-h-[215px] sm:max-h-[175px] flex flex-col sm:flex-row">
                <div class="w-full h-2/5 max-h-[40%] sm:h-full sm:max-h-full flex-initial" style="background: url('/img/news.jpg') no-repeat; background-size: cover;"></div>
                <div class="w-full h-3/5 max-h-[60%] sm:h-full sm:max-h-full sm:px-4 px-2 py-3 overflow-hidden flex-initial text-sm sm:text-base">
                <a href="#" class="flex hover:underline mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore tenetur dolorum dolore magnam hic quia!</a>
                <ul class="flex overflow-x-auto">
                    <li class="bg-sidebar rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Tag 1</a></li>
                    <li class="bg-sidebar rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Tag 2</a></li>
                    <li class="bg-sidebar rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Tag 3</a></li>
                </ul>
                </div>
            </div>

            <div class="bg-white h-[1000px] max-h-[215px] sm:max-h-[175px] flex flex-col sm:flex-row">
                <div class="w-full h-2/5 max-h-[40%] sm:h-full sm:max-h-full flex-initial" style="background: url('/img/news.jpg') no-repeat; background-size: cover;"></div>
                <div class="w-full h-3/5 max-h-[60%] sm:h-full sm:max-h-full sm:px-4 px-2 py-3 overflow-hidden flex-initial text-sm sm:text-base">
                <a href="#" class="flex hover:underline mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore tenetur dolorum dolore magnam hic quia!</a>
                <ul class="flex overflow-x-auto">
                    <li class="bg-sidebar rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Tag 1</a></li>
                    <li class="bg-sidebar rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Tag 2</a></li>
                    <li class="bg-sidebar rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Tag 3</a></li>
                </ul>
                </div>
            </div>

            <div class="bg-white h-[1000px] max-h-[215px] sm:max-h-[175px] flex flex-col sm:flex-row">
                <div class="w-full h-2/5 max-h-[40%] sm:h-full sm:max-h-full flex-initial" style="background: url('/img/news.jpg') no-repeat; background-size: cover;"></div>
                <div class="w-full h-3/5 max-h-[60%] sm:h-full sm:max-h-full sm:px-4 px-2 py-3 overflow-hidden flex-initial text-sm sm:text-base">
                <a href="#" class="flex hover:underline mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore tenetur dolorum dolore magnam hic quia!</a>
                <ul class="flex overflow-x-auto">
                    <li class="bg-sidebar rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Tag 1</a></li>
                    <li class="bg-sidebar rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Tag 2</a></li>
                    <li class="bg-sidebar rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Tag 3</a></li>
                </ul>
                </div>
            </div>

            <div class="bg-white h-[1000px] max-h-[215px] sm:max-h-[175px] flex flex-col sm:flex-row">
                <div class="w-full h-2/5 max-h-[40%] sm:h-full sm:max-h-full flex-initial" style="background: url('/img/news.jpg') no-repeat; background-size: cover;"></div>
                <div class="w-full h-3/5 max-h-[60%] sm:h-full sm:max-h-full sm:px-4 px-2 py-3 overflow-hidden flex-initial text-sm sm:text-base">
                <a href="#" class="flex hover:underline mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore tenetur dolorum dolore magnam hic quia!</a>
                <ul class="flex overflow-x-auto">
                    <li class="bg-sidebar rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Tag 1</a></li>
                    <li class="bg-sidebar rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Tag 2</a></li>
                    <li class="bg-sidebar rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Tag 3</a></li>
                </ul>
                </div>
            </div>

            <div class="bg-white h-[1000px] max-h-[215px] sm:max-h-[175px] flex flex-col sm:flex-row">
                <div class="w-full h-2/5 max-h-[40%] sm:h-full sm:max-h-full flex-initial" style="background: url('/img/news.jpg') no-repeat; background-size: cover;"></div>
                <div class="w-full h-3/5 max-h-[60%] sm:h-full sm:max-h-full sm:px-4 px-2 py-3 overflow-hidden flex-initial text-sm sm:text-base">
                <a href="#" class="flex hover:underline mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore tenetur dolorum dolore magnam hic quia!</a>
                <ul class="flex overflow-x-auto">
                    <li class="bg-sidebar rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Tag 1</a></li>
                    <li class="bg-sidebar rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Tag 2</a></li>
                    <li class="bg-sidebar rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Tag 3</a></li>
                </ul>
                </div>
            </div>
        <!-- <div class="text-md text-center mt-6"><a href="#" class="hover:underline">View more</a></div> -->
        </div>
    </div>

    <!-- Officers -->
    <div class="py-7 px-5 sm:px-10">
        <div class="text-2xl sm:text-3xl py-3 px-4 mb-5 bg-sidebar text-white font-semibold">Officers</div>

        <div class="max-w-auto overflow-auto mb-5 sm:px-10 flex flex-wrap gap-y-9 gap-x-7 sm:gap-x-5 sm:gap-y-7">
        <!-- <div class="max-w-auto overflow-auto mb-5 sm:px-10 grid grid-cols-2 sm:grid-cols-3 gap-7 sm:gap-5"> -->
            <div class="w-[1000px] max-w-[140px] sm:max-w-[200px] mx-auto">
                <div class="w-[100px] sm:w-[150px] sm:h-[150px] h-[100px] m-auto border-2 border-black">
                    <img src="" alt="">
                </div>
                <div>
                    <div class="text-center font-semibold">Person Name</div>
                    <div class="text-center text-sm opacity-70">President</div>
                </div>
            </div>

            <div class="w-[1000px] max-w-[140px] sm:max-w-[200px] mx-auto">
                <div class="w-[100px] sm:w-[150px] sm:h-[150px] h-[100px] m-auto border-2 border-black">
                    <img src="" alt="">
                </div>
                <div>
                    <div class="text-center font-semibold">Person Name</div>
                    <div class="text-center text-sm opacity-70">Vice President</div>
                </div>
            </div>

            <div class="w-[1000px] max-w-[140px] sm:max-w-[200px] mx-auto">
                <div class="w-[100px] sm:w-[150px] sm:h-[150px] h-[100px] m-auto border-2 border-black">
                    <img src="" alt="">
                </div>
                <div>
                    <div class="text-center font-semibold">Person Name</div>
                    <div class="text-center text-sm opacity-70">Secretary</div>
                </div>
            </div>

            <div class="w-[1000px] max-w-[140px] sm:max-w-[200px] mx-auto">
                <div class="w-[100px] sm:w-[150px] sm:h-[150px] h-[100px] m-auto border-2 border-black">
                    <img src="" alt="">
                </div>
                <div>
                    <div class="text-center font-semibold">Person Name</div>
                    <div class="text-center text-sm opacity-70">Treasurer</div>
                </div>
            </div>
        </div>

        <!-- Board Members -->
        <div class="text-lg sm:text-2xl py-3 px-4 mb-5 bg-sidebar text-white font-semibold">Board Members</div>

        <div class="max-w-auto overflow-auto mb-5 sm:px-10 flex flex-wrap sm:grid sm:grid-cols-3 gap-y-9 gap-x-7 sm:gap-x-5 sm:gap-y-7">
        <!-- <div class="max-w-auto overflow-auto mb-5 sm:px-10 grid grid-cols-2 sm:grid-cols-3 gap-7 sm:gap-5"> -->
            <div class="w-[1000px] max-w-[140px] sm:max-w-[200px] mx-auto">
                <div class="w-[100px] sm:w-[150px] sm:h-[150px] h-[100px] m-auto border-2 border-black">
                    <img src="" alt="">
                </div>
                <div>
                    <div class="text-center font-semibold">Person Name</div>
                </div>
            </div>

            <div class="w-[1000px] max-w-[140px] sm:max-w-[200px] mx-auto">
                <div class="w-[100px] sm:w-[150px] sm:h-[150px] h-[100px] m-auto border-2 border-black">
                    <img src="" alt="">
                </div>
                <div>
                    <div class="text-center font-semibold">Person Name</div>
                </div>
            </div>

            <div class="w-[1000px] max-w-[140px] sm:max-w-[200px] mx-auto">
                <div class="w-[100px] sm:w-[150px] sm:h-[150px] h-[100px] m-auto border-2 border-black">
                    <img src="" alt="">
                </div>
                <div>
                    <div class="text-center font-semibold">Person Name</div>
                </div>
            </div>

            <div class="w-[1000px] max-w-[140px] sm:max-w-[200px] mx-auto">
                <div class="w-[100px] sm:w-[150px] sm:h-[150px] h-[100px] m-auto border-2 border-black">
                    <img src="" alt="">
                </div>
                <div>
                    <div class="text-center font-semibold">Person Name</div>
                </div>
            </div>

            <div class="w-[1000px] max-w-[140px] sm:max-w-[200px] mx-auto">
                <div class="w-[100px] sm:w-[150px] sm:h-[150px] h-[100px] m-auto border-2 border-black">
                    <img src="" alt="">
                </div>
                <div>
                    <div class="text-center font-semibold">Person Name</div>
                </div>
            </div>

            <div class="w-[1000px] max-w-[140px] sm:max-w-[200px] mx-auto">
                <div class="w-[100px] sm:w-[150px] sm:h-[150px] h-[100px] m-auto border-2 border-black">
                    <img src="" alt="">
                </div>
                <div>
                    <div class="text-center font-semibold">Person Name</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->
    <div class="py-7 px-5 sm:px-10 mb-10">
        <div class="text-2xl sm:text-3xl py-3 px-4 mb-5 bg-sidebar text-white font-semibold">Contact Us</div>

        <div class="w-full sm:flex sm:justify-between sm:gap-x-2">
            <div class="max-w-auto sm:w-1/2 sm:max-w-1/2 mb-5 overflow-auto sm:overflow-hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247385.65029262088!2d120.7428860488076!3d14.34620233402327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d1ec5a1ee9ad%3A0x94660635847472b8!2sManuela%20Homes%20Subd.!5e0!3m2!1sen!2sph!4v1678357190861!5m2!1sen!2sph" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-[300px] mb-5 sm:mr-5"></iframe>

                <div>
                    <span class="mb-5 block">For inquires, you may contact or visit us:</span>
                    <ul>
                        <li>Block 1 Lot 8-B, Diamond St., Manuela Homes, Talon 5</li>
                        <li>Las Piñas City</li>
                        <li>(012) 345 6789</li>
                    </ul>
                </div>
            </div>

            <div class="md:w-2/5 sm:w-1/2">
                <!-- <span class="block before:content-['*'] after:mr-1 before:text-red-500 mb-3 italic">Indicates required field</span> -->
                <form action="">
                    <div class="flex space-x-2">
                        <div class="w-1/2">
                            <label class="mb-3 block">
                                <span class="after:content-['(Required)'] after:text-base after:ml-1 block">First Name</span>
                                <input type="text" name="first-name" id="" class="w-full p-2 rounded-lg"  required>
                            </label>
                        </div>

                        <div class="w-1/2">
                            <label class="mb-3 block">
                                <span class="after:content-['(Required)'] after:text-base after:ml-1 block">Last Name</span>
                                <input type="text" name="last-name" id="" class="w-full p-2 rounded-lg"  required>
                            </label>
                        </div>
                    </div>
                    <!-- <label class="mb-3 block">
                        <span class="after:content-['(Required)'] after:text-base after:ml-1 block">Name</span>
                        <input type="text" name="" id="" class="w-full p-2 rounded-lg" placeholder="E.g. Juan Dela Cruz" required>
                    </label> -->

                    <label class="mb-3 block">
                        <span class="after:content-['(Required)'] after:text-base after:ml-1 block">Email</span>
                        <input type="email" name="email" id="" class="w-full p-2 rounded-lg" placeholder="name@email.com" required>
                    </label>

                    <label class="mb-3 block">
                        <span class="after:content-['(Required)'] after:text-base after:ml-1 block">Message</span>
                        <textarea name="message" id="" class="w-full h-[150px] max-h-[150px] p-2 mb-5 rounded-lg resize-none" placeholder="Write your message here" required></textarea>
                    </label>

                    <button type="submit" class="btn btn:hover focus:ring-4 focus:ring-blue-300 rounded-lg bg-sidebar text-white p-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </main>

    <x-footer />
</x-layout>
