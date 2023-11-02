<x-html>
    <div id='container' class="w-screen h-screen ">
        <div>
            @include('layouts.navigation')
        </div>

        <div id="container" class="w-screen h-screen flex items-center justify-center">

            <div class="bg-transparent backdrop-blur-md border-2 border-solid border-black w-9/12 h-3/6">
                <form enctype="multipart/form-data" class="mt-7 flex items-center justify-center flex-row flex-wrap" method="post" action="{{ route('post.store') }}">
                    @csrf
                    <input name="title" class="w-11/12 h-10 m-5 mt-0 rounded-3xl" placeholder="title">
                    @error('title')
                        <p class="text-white">{{ $message }}</p>
                    @enderror
                    <textarea name="details" class="w-11/12 h-36 m-5 mt-0 rounded-3xl" placeholder="details"></textarea>
                    @error('details')
                        <p class="text-white">{{ $message }}</p>
                    @enderror
                    <input class="border-2 border-solid border-black rounded-lg" type="file" accept="image/*" name="image">
                    @error('image')
                        <p class="text-white">{{ $message }}</p>
                    @enderror
                    <button type="submit" id="fontbutton"
                        class="w-11/12 h-10 font-bold text-lg bg-green-700 m-5 rounded-lg">Create post</button>
                </form>
            </div>
    
        </div>

    </div>
</x-html>
