<x-layout>
    <x-header />

    <main>
        <div class="py-7 px-5 sm:px-10">
            <div class="text-2xl sm:text-3xl py-3 px-4 mb-5 bg-theme-green text-white font-semibold">Recent Updates</div>

            <div class="mb-7"><a href="/" class="font-semibold hover:underline focus:ring-4 focus:ring-blue-300"><i class="fas fa-angle-left"></i> Back</a></div>

            @unless (count($updates) == 0)
                <div class="min-h-[500px] md:grid md:grid-cols-2 flex flex-col gap-5">
                @foreach ($updates as $update)

                    <div class="bg-white h-[1000px] max-h-[175px] flex border border-gray-300 shadow-lg">
                        <div class="w-1/2 h-full flex-initial overflow-hidden">
                            <img class="w-full h-full object-cover overflow-hidden" src="{{$update->image ? asset('storage/' . $update->image) : asset('/images/news.jpg')}}" alt="">
                        </div>
                        <div class="w-1/2 h-full sm:px-4 px-2 py-3 overflow-hidden flex-initial md:text-lg">
                            <a href="/guest/updates/{{$update->id}}" class="h-3/4 flex hover:underline font-semibold mb-3">{{$update->title}}</a>
                            <ul class="h-auto flex flex-wrap gap-2 overflow-x-auto">
                                <li class="bg-theme-green h-auto rounded-xl px-3 py-1 text-xs flex text-white"><a href="#">Tag 1</a></li>
                                <li class="bg-theme-green h-auto rounded-xl px-3 py-1 text-xs flex text-white"><a href="#">Tag 2</a></li>
                                <li class="bg-theme-green h-auto rounded-xl px-3 py-1 text-xs flex text-white"><a href="#">Tag 3</a></li>
                            </ul>
                        </div>
                    </div>

                @endforeach

                </div>

                <div class="mt-6 flex justify-end gap-x-10">{{$updates->links()}}</div>

            @else

                <div class="w-full h-[1000px] max-h-[500px] flex justify-center items-center">
                    <span class="text-4xl text-gray-500 font-semibold">There are no posts yet.</span>
                </div>

            @endunless

        </div>
    </main>

    <x-footer />
</x-layout>
