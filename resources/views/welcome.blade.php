<x-html>
    <div id="container" class="w-full h-full">
        <div>
            <x-navigation>
                {{-- navigition --}}
            </x-navigation>
        </div>
        <div class="w-screen h-5/6 flex items-center">
            <div class="w-1/2 h-1/2">
                <div class="w-full h-56 flex items-center justify-center flex-row flex-wrap "> 
                    <div id="gradient-border" class="w-60 h-16 bg-transparent rounded-3xl border-solid border-2 text-xl text-white flex items-center justify-center backdrop-blur m-10 font-semibold hover:bg-sky-700" ><a href="{{ route('view.post') }}">Weblog</a></div>
                    <div id="gradient-border" class="w-60 h-16 bg-transparent rounded-3xl border-solid border-2 text-xl text-white flex items-center justify-center backdrop-blur m-10 font-semibold hover:bg-sky-700"><a href="">Admin Login</a></div> 
                    <p class="text-4xl capitalize ml-10 mt-10 text-yellow-100 font-black">
                        <span class="text-6xl"> ABlog.com </span> <br>
                        I am here to share my experiences <br>
                        and i need to share your experiences
                    </p>
                    <div id="icon_social" class="w-80 h-10 mt-5 flex justify-center" >
                        <div class="w-9 h-9 rounded-full ml-4 mr-4 "><a href=""><img src="/images/instagram.png" alt=""></a></div>
                        <div class="w-9 h-9 rounded-full ml-4 mr-4 "><a href=""><img src="/images/Facebook.png" alt=""></a></div>
                        <div class="w-9 h-9 rounded-full ml-4 mr-4 "><a href=""><img src="/images/telegram.png" alt=""></a></div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 h-full flex items-center justify-center">
                <div class="w-3/4 h-3/4 bg-cyan-950"></div>
            </div>
        </div>
    </div>
</x-html>
