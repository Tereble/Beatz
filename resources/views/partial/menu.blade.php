<nav id="nav"> 
    <div class="close">
        <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="#fff"><path d="m291-240-51-51 189-189-189-189 51-51 189 189 189-189 51 51-189 189 189 189-51 51-189-189-189 189Z"/></svg>
    </div>


    <div id="mob-menu">
        <ul>
          <li><a href="#" class="menu">Home</a></li>
          <li><a href="#" class="menu">About</a></li>
          <li><a href="#" class="menu">Store</a></li>
          <li><a href="#" class="menu">Contact</a></li>
        </ul>

        <div class="m-head-space">
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
      
    </div>
 
  </nav>