<header class="main-header" id="header">
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
        <!-- Sidebar toggle button -->
        {{-- <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
        </button> --}}
        <div class="navbar-right ">
            <ul class="nav navbar-nav">
                <!-- User Account -->
                <li class="dropdown user-menu d-flex justify-content-end">
                    <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                        {{-- <img src="{{ asset('template') }}/images/user/user-xs-01.jpg" class="user-image rounded-circle"
                            alt="User Image" /> --}}
                        <span class="d-none d-lg-inline-block">{{ session('auth')->nama }}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right pb-2">
                        <li>
                            <a class="dropdown-link-item" href="{{ route('logout') }}">
                                <i class="mdi mdi-logout"></i>
                                <span class="nav-text">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
