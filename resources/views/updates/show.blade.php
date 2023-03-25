<x-layout>
    <div class="flex">
        <x-sidebar />

        <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
            <x-dashboard-header />

            <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
                <main class="w-full flex-grow py-6 px-6 sm:px-10">
                    <div class="mb-7"><a href="/updates" class="font-semibold hover:underline focus:ring-4 focus:ring-blue-300"><i class="fas fa-angle-left"></i> Back</a></div>

                    <article class="w-full sm:w-3/4 mb-12">
                        <div class="mb-4 space-y-3">
                            <div class="flex justify-between">
                                <h1 class="text-3xl text-black font-semibold">{{$update->title}}</h1>
                                <div x-data="{ isOpen: false }" class="relative">
                                    <button @click="isOpen = !isOpen" class="w-10 h-10 rounded-full hover:bg-gray-300 focus:bg-gray-300">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
                                    <div x-show="isOpen" class="absolute top-10 w-32 bg-white rounded-lg shadow-lg py-2">
                                        <a href="/updates/{{ $update->id }}/edit" class="block px-4 py-2 hover:bg-theme-light-green hover:text-white">Edit</a>
                                        <a href="#" class="block px-4 py-2 hover:bg-theme-light-green hover:text-white">Delete</a>
                                    </div>
                                </div>
                            </div>

                            <span class="block text-sm text-gray-500">Published at {{$update->created_at}}</span>
                        </div>

                        <div class="w-full h-[300px] mb-6">
                            <img class="w-full h-full object-cover border border-gray-300" src="{{$update->image ? asset('storage/' . $update->image) : asset('/images/news.jpg')}}" alt="">
                        </div>

                        <div class="whitespace-pre-wrap">{{$update->body}}</div>
                    </article>
                </main>

                <x-footer />

            </div>

        </div>
    </div>
</x-layout>
