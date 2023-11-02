<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
            {{ __("You're logged in!") }}
        </h2>
        <div class="w-32 h-10 mt-3 flex items-center justify-center rounded-xl bg-green-600">
            <a href="{{ route('post.create') }}">
                Creat New Post
            </a>
        </div>
    </x-slot>

    {{-- {{ dd($posts) }} --}}
    <div id="posts" class=" flex items-center justify-around m-auto mt-10 w-2/3 h-4/5 ">
       
        @forelse ($posts as $post)
        <div  class="flex flex-col items-center justify-center w-2/5 h-5/6 bg-rose-200 rounded-lg border-2 border-black">
            <div class="w-11/12 h-1/6   text-center mt-4 font-serif capitalize font-extrabold ">
                {{ $post->title }}
            </div>
            <div class="w-5/6 f-40 mt-0 ">
                <img class="rounded-xl" src="{{ url('storage/'.$post->image) }}" alt="">
            </div>
            <div id="bgcolordetails" class="w-11/12 h-1/3 m-auto mt-4 mb-4 capitalize gap-4 p-2 shadow-2xl" >
                {{ $post->details }}

            </div>
           <div class="w-full h-9 flex justify-around mb-5">
                <div class="w-2/5 h-full flex justify-center items-center rounded-xl bg-green-600 ">
                    <a href="{{ route('post.edit', $post)}}">Edit</a>
                </div>
                <div class="w-2/5 h-full flex justify-center items-center rounded-xl bg-rose-600">
                    <form method="post" action="{{ route('post.destroy',$post) }}">
                        @csrf
                        @method('delete')
                    <button type="submit" >Delete</button>
                    </form>
                </div>
           </div>
        </div>
        @empty
            you don't have any post
        @endforelse
    </div>
 
    {{ $posts->links() }}

    
</x-app-layout>
