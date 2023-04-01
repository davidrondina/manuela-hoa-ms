<x-layout>
    <div class="flex">
        <x-sidebar>
            <a href="/updates" class="flex items-center text-white active-nav-link py-4 pl-6">
                <i class="fas fa-bullhorn mr-3"></i>
                Updates
            </a>
            <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6">
                <i class="fas fa-user mr-3"></i>
                Members
            </a>
            <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6">
                <i class="fas fa-table mr-3"></i>
                Transactions
            </a>
            <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6">
                <i class="fas fa-comment-dots mr-3"></i>
                Forum
            </a>
            <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6">
                <i class="fas fa-vote-yea mr-3"></i>
                Voting
            </a>
            {{-- <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6">
                <i class="fas fa-calendar mr-3"></i>
                Calendar
            </a> --}}
            <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6">
                <i class="fas fa-balance-scale mr-3"></i>
                Rules
            </a>
        </x-sidebar>

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
        <x-dashboard-header />

        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow py-6 px-6 sm:px-10">
                <div class="mb-7"><a href="/updates" class="font-semibold hover:underline focus:ring-4 focus:ring-blue-300"><i class="fas fa-angle-left"></i> Back</a></div>

                <div class="mb-6 flex justify-between flex-wrap">
                    <h1 class="text-3xl text-black font-semibold">Create new Post</h1>
                </div>

                <form action="/updates" method="post" class="sm:w-3/4" id="create-form" enctype="multipart/form-data">
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
                                <label for="image">Thumbnail</label>
                            </div>
                            <div class="sm:w-[80%] sm:max-w-[80%]">
                                <input type="file" name="image" id="image" class="w-full">

                                @error('image')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="sm:flex">
                            <div class="sm:w-[20%]">
                                <label for="title">Body</label>
                            </div>
                            <div class="sm:w-[80%]">
                                <textarea name="body" id="body" class="w-full h-[1000px] max-h-[180px] sm:max-h-[150px] p-2 resize-none border border-gray-300" placeholder="Write something here...">{{ old('body') }}</textarea>

                                @error('body')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>

                                <input type="hidden" name="body" />
                                <div class="sm:w-[80%] h-[180px]" id="editor">

                                </div>
                        </div> --}}
                    </div>

                    {{-- RICH TEXT --}}
                    <div class="mb-4">
                        <label class="block mb-3">Body</label>
                        <textarea name="body" class="hidden"></textarea>
                        <div id="editor" class="w-full h-[300px]"></div>

                        @error('body')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
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

    @push('quill-script')
        <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>

        <script>
            var quill = new Quill('#editor', {
                modules: {
                    toolbar: [
                        ['bold', 'italic', 'underline'],
                        ['indent', { list: 'ordered' }, { list: 'bullet' }],
                        ['image', 'video']
                    ]
                },
                theme: 'snow',
                placeholder: 'Write something here...'
            });

            var form = document.querySelector('#create-form');

            form.onsubmit = function() {
                var body = document.querySelector('textarea[name=body]');
                body.value = quill.root.innerHTML;
                return true;
            }
        </script>
    @endpush
</x-layout>
