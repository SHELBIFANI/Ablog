<x-html>
    <div id="container" class="w-full h-full ">
        
        <div class="backdrop-blur-3xl w-full h-20">
            <x-navigation>
                {{-- navigition --}}
            </x-navigation>
        </div>
        
        <div class="w-full h-[88%] bg-white flex items-center ">
            <div class="w-3/4 h-full flex-1 flex items-center justify-center flex-row flex-wrap">
                @forelse ($posts as $post )
                    <div class="w-11/12 h-40 flex border-2 border-solid border-gray-700">
                        <div class="w-1/4 h-full bg-cyan-700 object-cover ">
                            <img class="object-cover w-full h-full" src="{{ url('storage/'.$post->image) }}" alt="">
                        </div>
                        {{-- @if($post->user_id == $user->id) --}}
                        <div class="w-3/4 h-full">
                            <div>
                                <p class="text-2xl p-2 w-full h-1/6">
                                    {{ $post->title }}
                                </p>
                            </div>
                            <div class="w-full h-3/6 p-1">
                                <p>
                                    {{ $post->details }}
                                </p>
                            </div>
                            <div class="float-right ">
                                {{'@'. $post->user->name }}
                            </div>
                        </div>
                    </div>
                @empty
                    
                @endforelse
                {{ $posts->links() }}

            </div>
            <div class="w-1/4 h-full bg-orange-500"></div>
        </div>
    </div>
</x-html>