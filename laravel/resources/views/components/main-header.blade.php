<header>

    <div id="main-header">
        <div class="container hor-flex">
            <div class="logo">
                    @yield('page-logo')
            </div>
            
            <div class="home-link">
                <a href="{{ route('home') }}">
                    @yield('return-home')
                </a>
            </div>
        </div>
    </div>
</header>