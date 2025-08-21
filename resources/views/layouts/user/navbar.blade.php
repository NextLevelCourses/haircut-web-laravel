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
                @if (!Auth::guard('user')->check())
                    @if (Request::is('contact'))
                        <a href="{{ url('/') }}"
                            class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                    @else
                        <a href="{{ url('/') }}"
                            class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                        <a href="#services" class="nav-item nav-link">Service</a>
                        <a href="#barberman" class="nav-item nav-link">Barber Man</a>
                        <a href="#aboutus" class="nav-item nav-link">About Us</a>
                    @endif
                @endif
                <a href="{{ route('Appoiment.view_book') }}"
                    class="nav-item nav-link {{ Request::is('book') ? 'active' : '' }}">Book</a>
                <a href="{{ route('Landing.contact') }}"
                    class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
            </div>
            @if (!Auth::guard('user')->check())
                <a href="{{ url('/register') }}" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block"><i
                        class="fa fa-registered me-3"></i> Register</a>
                <a href="{{ url('/login') }}" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block ms-3">Log
                    In<i class="fas fa-sign-in-alt ms-3"></i></i></a>
            @else
                <form action="{{ route('user.do_logout') }}" method="post" id="user.do_logout">
                    @csrf
                    <a href="{{ route('user.do_logout') }}"
                        class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block ms-3"
                        onclick="event.preventDefault(); document.getElementById('user.do_logout').submit();"
                        role="button">Log
                        Out | {{ Auth::guard('user')->user()->email }}<i class="fas fa-sign-out-alt ms-3"></i></a>
                </form>
            @endif
        </div>
    </nav>
    <!-- Navbar End -->
