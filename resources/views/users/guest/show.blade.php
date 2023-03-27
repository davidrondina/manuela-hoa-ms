<x-layout>
    <x-header />

    <main>
        <div class="py-7 px-5 sm:px-10">
            <div class="mb-7"><a href="/" class="font-semibold hover:underline focus:ring-4 focus:ring-blue-300"><i class="fas fa-angle-left"></i> Back</a></div>

            <article class="min-h-[500px]">
                <article class="w-full sm:w-3/4 mb-12">
                    <div class="mb-4 space-y-3">
                        <div class="flex justify-between">
                            <h1 class="text-3xl text-black font-semibold">{{$update->title}}</h1>

                            {{-- @auth
                                @if (auth()->user()->user_type == 'admin')
                                <div x-data="{ isOpen: false }" class="relative">
                                    <button @click="isOpen = !isOpen" class="w-10 h-10 rounded-full hover:bg-gray-300 focus:bg-gray-300">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
                                    <div x-show="isOpen" class="absolute top-10 right-3 w-32 bg-white shadow-lg py-2">
                                        <a href="/updates/{{ $update->id }}/edit" class="block px-4 py-2 hover:bg-theme-light-green hover:text-white"><i class="fas fa-edit"></i> Edit</a>

                                        <form action="/updates/{{ $update->id }}" method="POST" class="">
                                            @csrf

                                            @method('DELETE')

                                            <button class="w-full px-4 py-2 text-red-500 hover:bg-theme-light-green hover:text-white text-left"><i class="fas fa-trash"></i> Delete</button>
                                        </form>
                                    </div>
                                </div>
                                @endif
                            @endauth --}}

                        </div>

                        <span class="block text-sm text-gray-500">Published at {{$update->created_at}}</span>
                    </div>

                    <div class="w-full h-[300px] mb-6">
                        <img class="w-full h-full object-cover border border-gray-300" src="{{$update->image ? asset('storage/' . $update->image) : asset('/images/news.jpg')}}" alt="">
                    </div>

                    <div class="whitespace-pre-wrap">{{$update->body}}</div>
                </article>
            </article>
        </div>
    </main>

    <x-footer />
</x-layout>