    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="mb-0 text-primary text-uppercase"><i class="fa fa-cut me-3"></i>The shortcut</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ url('/login') }}" class="nav-item nav-link">Book</a>
                <a href="#services" class="nav-item nav-link">Service</a>
                <a href="#barberman" class="nav-item nav-link">Barber Man</a>
                <a href="#aboutus" class="nav-item nav-link">About Us</a>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{ url('/register') }}" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block"><i
                    class="fa fa-arrow-left me-3"></i> Sign Up</a>
            <a href="{{ url('/login') }}" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block ms-3">Sign In<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->