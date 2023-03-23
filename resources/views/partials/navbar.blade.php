<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-1 mb-lg-1">
                <li class="nav-item">
                    <a class="nav-link text-light {{ ($title === "Home" ) ? 'active' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light {{ ($title === "About" ) ? 'active' : '' }}" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light {{ ($title === "Login" ) ? 'active' : '' }}" href="/login">Login</a>
                </li>
            </ul>
            
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Type here" aria-label="Search">
                <button class="btn btn-light" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>