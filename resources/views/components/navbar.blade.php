<nav class="navbar sticky-top navbar-expand-lg text-light" style="background-color:#212c5f" data-bs-theme="dark">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-1 mb-lg-1">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'About Us' ? 'active' : '' }}" href="/about">About Us</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Tutor' ? 'active' : '' }}" href="/tutor">Daftar Tutor</a>
                </li>

            </ul>

            {{-- Registration --}}
            
            <ul class="navbar-nav mb-1 mb-lg-1">
            <li class="nav-item">
                <a class="nav-link {{ $title === 'Register' ? 'active' : '' }}" href="/auth/register">Register</a>
            </li>

            @auth

                <ul class="navbar-nav">
                    <li class="nav-item me-auto">
                        <a class="nav-link">Halo, {{ auth()->user()->name }} </a>
                    </li>
                </ul>

                
                    {{-- Logout --}}
                    <li class="nav-item">
                        <form action="/auth/logout" method="POST">
                            @csrf
                            <x-button type="submit" color="outline-warning" text="Log Out" />
                        </form>
                    </li>
                @else
                    {{-- Login --}}
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Login' ? 'active' : '' }}" href="/auth/login">Login</a>
                    </li>
                @endauth
            </ul>

            {{-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Type here" aria-label="Search">
                <button class="btn btn-light" type="submit">Search</button>
            </form> --}}
        </div>
    </div>
</nav>
