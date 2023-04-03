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
                {{-- <li class="nav-item">
                    <a class="nav-link {{ $title === 'Tutor' ? 'active' : '' }}" href="/ttr/tutor">Tutor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Mahasiswa' ? 'active' : '' }}" href="/mhs/mahasiswa">Mahasiswa</a>
                </li> --}}
            @auth
                @canany(['isTutor', 'isAdmin'])
                {{-- <li class="nav-item">
                    <a class="nav-link {{ Request::is('tutor*') ? 'active' : '' }}" href="/ttr/tutor">Tutor</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('tutor*')) ? 'active' : '' }}" href="/ttr/tutor">Tutor</a>
                </li>
                @endcanany
            
                @canany(['isMahasiswa', 'isAdmin'])
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Mahasiswa' ? 'active' : '' }}" href="/mhs/mahasiswa">Mahasiswa</a>
                </li>
                @endcanany
            
            {{-- <a class="nav-link {{ Request::is('mahasiswa*') ? 'active' : '' }}" href="/mhs/mahasiswa">Mahasiswa</a> --}}
            
            @endauth
            </ul>


            @auth
                <ul class="navbar-nav">
                    <li class="nav-item me-auto">
                        <a class="nav-link">Halo, {{ auth()->user()->name }} </a>
                    </li>
                </ul>


                {{-- Logout --}}
                <ul class="navbar-nav mb-1 mb-lg-1">
                    <li class="nav-item">
                        <form action="/auth/logout" method="POST">
                            @csrf
                            <x-button type="submit" color="outline-warning" text="Log Out" />
                        </form>
                    </li>
                </ul>
            @else
                {{-- Login --}}
                <ul class="navbar-nav mb-1 mb-lg-1">
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Login' ? 'active' : '' }}" href="/auth/login">Login</a>
                    </li>
                </ul>

                {{-- Registration --}}

                <ul class="navbar-nav mb-1 mb-lg-1">
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Register' ? 'active' : '' }}" href="/auth/register">Register</a>
                    </li>
                </ul>
            @endauth
            </ul>

            {{-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Type here" aria-label="Search">
                <button class="btn btn-light" type="submit">Search</button>
            </form> --}}
        </div>
    </div>
</nav>
