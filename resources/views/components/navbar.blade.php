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
                    <a class="nav-link {{ $title === 'Login' ? 'active' : '' }}" href="/auth/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Register' ? 'active' : '' }}" href="/auth/register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Tutor' ? 'active' : '' }}" href="/tutor">Daftar Tutor</a>
                </li>
            </ul>
            
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Type here" aria-label="Search">
                <button class="btn btn-light" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>