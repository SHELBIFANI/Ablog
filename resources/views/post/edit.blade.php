<x-html>
    <div id='container' class="w-screen h-screen overflow-hidden">
        <div>
            @include('layouts.navigation')
        </div>

        <div class="w-screen h-screen flex items-center justify-center">

            <div class="bg-transparent backdrop-blur-md border-2 border-solid border-black w-9/12 h-3/6">
                <form class="mt-7 flex items-center justify-center flex-row flex-wrap" method="post" action="{{ route('post.update',$post) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input name="title" class="w-11/12 h-10 m-5 mt-0 rounded-3xl" placeholder="title" value="{{ $post->title }}">
                    <textarea name="details" class="w-11/12 h-36 m-5 mt-0 rounded-3xl" placeholder="details">{{ $post->details }}</textarea>
                    <input type="file" accept="image/*" name="image" class="border-2 border-solid border-black rounded-lg" value="{{ $post->image }}" id="">
                    <img class="w-24 h-24" src="{{ url('storage/'.$post->image) }}" alt="" srcset="">
                    <button type="submit" id="fontbutton"
                        class="w-11/12 h-10 font-bold text-lg bg-green-700 m-5 rounded-lg">Create post</button>
                </form>
            </div>
    
        </div>

    </div>
</x-html>
