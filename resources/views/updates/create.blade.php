<x-layout>
    <div class="flex">
        <x-sidebar />

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
        <x-dashboard-header />

        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow py-6 px-6 sm:px-10">
                <div class="mb-7"><a href="/updates" class="font-semibold hover:underline focus:ring-4 focus:ring-blue-300"><i class="fas fa-angle-left"></i> Back</a></div>

                <div class="mb-6 flex justify-between flex-wrap">
                    <h1 class="text-3xl text-black font-semibold">Create new Post</h1>
                </div>

                <form action="/updates" method="post" class="sm:w-3/4" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-6 space-y-3">
                        <div class="sm:flex">
                            <div class="sm:w-[20%]">
                                <label for="title">Title</label>
                            </div>
                            <div class="sm:w-[80%]">
                                <input type="text" name="title" id="title" class="w-full p-2 border border-gray-300" value="{{ old('title') }}" placeholder="Enter the title here"/>

                                @error('title')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="sm:flex">
                            <div class="sm:w-[20%]">
                                <label for="title">Tags</label>
                            </div>
                            <div class="sm:w-[80%]">
                                <input type="text" name="tags" id="tags" class="w-full p-2 border border-gray-300" value="{{ old('tags') }}" placeholder="Enter comma-separated tags (e.g. Tag 1, Tag 2, Tag 3)"/>

                                @error('tags')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="sm:flex">
                            <div class="sm:w-[20%]">
                                <label for="title">Body</label>
                            </div>
                            <div class="sm:w-[80%]">
                                <textarea name="body" id="body" class="w-full h-[1000px] max-h-[180px] sm:max-h-[150px] p-2 resize-none border border-gray-300" placeholder="Write something here...">{{ old('body') }}</textarea>

                                @error('body')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="sm:flex">
                            <div class="sm:w-[20%]">
                                <label for="image">Image</label>
                            </div>
                            <div class="sm:w-[80%] sm:max-w-[80%]">
                                <input type="file" name="image" id="image" class="w-full">

                                @error('image')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="flex mb-4">
                        <input type="checkbox" name="setToPublic" id="public" class="mr-1">
                        <label for="public">Set the post to public</label>
                    </div>

                    <div>
                        <button class="w-full sm:w-auto bg-theme-green px-5 py-2.5 focus:ring-4 focus:ring-blue-300 text-white font-semibold shadow-md">Post</button>
                    </div>
                </form>
            </main>

            <x-footer />
        </div>
    </div>
    </div>
</x-layout>
