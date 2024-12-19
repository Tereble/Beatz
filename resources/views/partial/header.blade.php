<header class="w-full h-14 bg-transparent flex justify-between items-center mx-3 mb-4 ">
    <div class="w-10 h-10 item-center justify-between flex">
        <img src="https://izzybeatzz.com/wp-content/uploads/2024/10/cropped-izzylogo-1.png" alt="logo" class="w-10 h-10">
    </div>
    <div class="flex gap-3 justify-between items-center mx-3 " id="menu-con">
        <a href="" class="menu">Home</a>
        <a href="" class="menu">About</a>

        <a href="" class="menu">Store</a>
        <a href="" class="menu">Contact</a>



    </div>

    <div class="head-space">
        @auth
         <!-- Authentication -->
         <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </a>
        </form>

        @else
        <a href="{{ route('register')}}">Register</a >
        <a href="{{ route('login')}}">Login</a >
        @endauth
       
    </div>
    <div class="w-10 h-10 item-center justify-between flex mx-2 " id="menuToggle">
        <svg xmlns="http://www.w3.org/2000/svg" height="40px"  viewBox="0 -960 960 960" width="40px" fill="#f8fafc"><path d="M144-264v-72h672v72H144Zm0-180v-72h672v72H144Zm0-180v-72h672v72H144Z"/></svg>
    </div>


</header>