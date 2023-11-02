<nav class="w-full h-24 flex flex-wrap justify-between">
    <div id="logo" class="w-20 h-20 ml-4 ">
        <a href="">
            <img src="/images/A-logo.png" alt="">
        </a>
    </div>
    if()
    <div id="menu" class="w-96 h-16 flex items-center justify-around rounded-2xl">
            <button id="active" type="submit" class="w-20 h-5/6"><a href=""> Home</a></button>
            <button  type="submit" class=" text-white font-semibold"><a href=""> Blog</a></button>
            <button  type="submit" class=" text-white font-semibold"><a href="{{ route('login') }}"> Login</a></button>
            <button  type="submit" class=" text-white font-semibold"><a href="{{ route('register') }}"> Register</a></button>
    </div>
</nav>