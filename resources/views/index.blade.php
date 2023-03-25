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
            <h1 class="w-auto text-5xl font-semibold overflow-hidden"
                data-aos="fade-up"
                data-aos-duration="2400">Manuela Homes Subdivision</h1>
            <!-- <div class="w-3/4 sm:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, dicta.</div> -->
            <div class="w-auto sm:text-lg overflow-hidden"
                data-aos="fade-up"
                data-aos-duration="2400">Block 1 Lot 8-B, Diamond St., Manuela Homes, Talon 5, Las Piñas City</div>
        </div>
    </div>

    <!-- NEWS -->
    <div class="py-7 px-5 sm:px-10">
        <div class="text-2xl sm:text-3xl py-3 px-4 mb-5 bg-theme-green text-white font-semibold">Recent Updates</div>

        @unless (count($updates) == 0)
        <div class="md:grid md:grid-cols-2 flex flex-col gap-5">
            @foreach ($updates as $update)
                <div class="bg-white h-[1000px] max-h-[175px] flex border border-gray-300 shadow-lg">
                    <div class="w-1/2 h-full flex-initial overflow-hidden">
                        <img class="w-full h-full object-cover overflow-hidden" src="{{$update->image ? asset('storage/' . $update->image) : asset('/images/news.jpg')}}" alt="">
                    </div>
                    <div class="w-1/2 h-full sm:px-4 px-2 py-3 overflow-hidden flex-initial md:text-lg">
                        <a href="#" class="h-3/4 flex hover:underline font-semibold mb-3">{{$update->title}}</a>
                        <ul class="h-auto flex flex-wrap gap-2 overflow-x-auto">
                            <li class="bg-theme-green h-auto rounded-xl px-3 py-1 text-xs flex text-white"><a href="#">Tag 1</a></li>
                            <li class="bg-theme-green h-auto rounded-xl px-3 py-1 text-xs flex text-white"><a href="#">Tag 2</a></li>
                            <li class="bg-theme-green h-auto rounded-xl px-3 py-1 text-xs flex text-white"><a href="#">Tag 3</a></li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>

        @else

        <div class="w-full h-[1000px] max-h-[300px] flex justify-center items-center">
            <span class="text-4xl text-gray-500 font-semibold">There are no posts yet.</span>
        </div>

        @endunless
                {{-- <div class="bg-white h-[1000px] max-h-[215px] sm:max-h-[175px] flex border-2">
                    <div class="w-full h-2/5 max-h-[40%] sm:h-full sm:max-h-full flex-initial">
                        <img class="w-full h-auto" src="{{asset('/images/news.jpg')}}" alt="">
                    </div>
                    <div class="w-full h-3/5 max-h-[60%] sm:h-full sm:max-h-full sm:px-4 px-2 py-3 overflow-hidden flex-initial text-sm sm:text-base md:text-lg">
                    <a href="#" class="flex hover:underline font-semibold mb-3">{{$update->title}}</a>
                    <ul class="flex overflow-x-auto">
                        <li class="bg-sidebar rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Tag 1</a></li>
                        <li class="bg-sidebar rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Tag 2</a></li>
                        <li class="bg-sidebar rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Tag 3</a></li>
                    </ul>
                    </div>
                </div> --}}


            {{-- <div class="bg-white h-[1000px] max-h-[215px] sm:max-h-[175px] flex flex-col sm:flex-row">
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
            </div> --}}

        <!-- <div class="text-md text-center mt-6"><a href="#" class="hover:underline">View more</a></div> -->
        </div>
    </div>

    <!-- Contact -->
    <div class="py-7 px-5 sm:px-10 mb-10">
        <div class="text-2xl sm:text-3xl py-3 px-4 mb-5 bg-theme-green text-white font-semibold">Contact Us</div>

        <div class="w-full sm:flex sm:justify-between sm:gap-x-2">
            <div class="max-w-auto sm:w-1/2 sm:max-w-1/2 mb-10 sm:mb-0 overflow-auto sm:overflow-hidden">
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
                <x-contact-form />
            </div>
        </div>
    </div>
    </main>

    <x-footer />
</x-layout>
