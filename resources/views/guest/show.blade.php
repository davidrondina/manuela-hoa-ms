<x-layout>
    <x-header />

    <main>
        <div class="py-7 px-5 sm:px-10">
            <div class="mb-7"><a href="/" class="font-semibold hover:underline focus:ring-4 focus:ring-blue-300"><i class="fas fa-angle-left"></i> Back</a></div>

            <div class="bg-white min-h-[500px] w-full sm:w-3/5 px-6 py-8 shadow-lg">
                <article class="mb-12">
                    <div class="mb-4 space-y-3">
                        <div class="flex justify-between">
                            <h1 class="text-3xl text-black font-semibold">{{$update->title}}</h1>
                        </div>

                        <span class="block text-sm text-gray-500">Published at {{$update->created_at}}</span>
                    </div>

                    <div class="w-full h-[300px] mb-6">
                        <img class="w-full h-full object-cover border border-gray-300" src="{{$update->image ? asset('storage/' . $update->image) : asset('/images/news.jpg')}}" alt="">
                    </div>

                    <div class="whitespace-pre-wrap">{!! $update->body !!}</div>
                </article>
            </div>
        </div>
    </main>

    <x-footer />
</x-layout>
