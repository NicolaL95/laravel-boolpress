    <nav class="navbar navbar-expand-md navbar-light bg_purple shadow-sm">
             <a class="navbar-brand text-white fs_25" href="{{ url('/') }}">
                    Boolpress
                </a>
            <div class="container justify-content-space-between">
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li>
                            <router-link class="nav-link text-white fs_20" to="/">Home</router-link>
                        </li>
                        <li>
                            <router-link class="nav-link text-white fs_20" to="/posts">Posts</router-link>
                        </li>
                         <li><a class="text-white fs_20 px-3 nav-link" href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li><a class="text-white fs_20 px-3 nav-link" href="{{route('preset')}}">Preset</a></li>
                      <li><a class="text-white fs_20 px-3 nav-link" href="{{route('contacts')}}">Contacts</a></li>
                     <li><a class="text-white fs_20 px-3 nav-link" href="{{route('category.index')}}">Category</a></li>
                     <li><a class="text-white fs_20 px-3 nav-link" href="{{route('tag.index')}}">Tag</a></li>
                     <li><a class="text-white fs_20 px-3 nav-link" href="{{route('index.vue')}}">Vue</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-white fs_20" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white fs_20" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white fs_25" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>