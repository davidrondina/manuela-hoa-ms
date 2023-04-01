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
                <i class="fas fa-comments mr-3"></i>
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
            <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6">
                <i class="fas fa-envelope mr-3"></i>
                Feedback
            </a>
        </x-sidebar>

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
        <x-dashboard-header />

        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow py-6 px-6 sm:px-10">
                <div class="flex justify-between items-center flex-wrap">
                    <h1 class="text-3xl text-black font-semibold">Updates</h1>

                    @auth
                        @if (auth()->user()->user_type == 'admin')
                            <div>
                                <a href="/updates/create" class="text-white bg-theme-green focus:ring-4 focus:ring-blue-300 font-semibold px-5 py-2.5 shadow-md"><i class="fas fa-plus"></i> Create</a>
                            </div>
                        @endif
                    @endauth
                </div>

                <!-- ANNOUNCEMENT POSTS -->
                <div class="w-full mt-6 flex flex-col gap-5">

                    @unless (count($updates) == 0)
                        @foreach ($updates as $update)
                        <div class="h-[1000px] max-h-[140px] border border-gray-300 sm:max-h-[130px] bg-white flex shadow-lg">
                            <div class="w-2/5 sm:w-[30%] h-full sm:h-full sm:max-h-full flex-initial">
                                <a href="/updates/{{$update->id}}"><img class="w-full h-full object-cover" src="{{$update->image ? asset('storage/' . $update->image) : asset('/images/news.jpg')}}" alt=""></a>
                            </div>
                            <div class="w-3/5 sm:w-[70%] h-full sm:px-4 px-2 py-3 overflow-hidden flex-initial text-lg sm:text-xl">
                                <a href="/updates/{{$update->id}}" class="h-2/4 flex hover:underline font-semibold">{{$update->title}}</a>

                                <ul class="flex mt-2">
                                    <li class="bg-theme-green rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Tag 1</a></li>
                                    <li class="bg-theme-green rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Tag 2</a></li>
                                    <li class="bg-theme-green rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Tag 3</a></li>

                                    @if ($update->is_private)
                                        <li class="bg-theme-green rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Private</a></li>

                                    @else
                                        <li class="bg-theme-green rounded-xl px-3 py-1 mr-2 text-xs flex text-white"><a href="#">Public</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    @endunless

                </div>

                <div class="mt-6">
                    {{$updates->links()}}
                </div>
            </main>

            <x-footer />
        </div>
    </div>
    </div>
</x-layout>
