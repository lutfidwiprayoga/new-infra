<section class="section-navbar">
    <div class="card">
        <div class="card-body-nav">
            <ul class="navbar-admin">
                <li class="nav-item">
                    <div class="btn-group me-1 mb-1">
                        <div class="dropdown">
                            @guest
                                <a type="button" class="nav-link" aria-current="page" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <div class="avatar avatar-md me-3">
                                        <img src="{{ asset('admin') }}/assets/images/faces/2.jpg">
                                    </div>
                                    Login/Register
                                </a>
                            @else
                                <a type="button" class="nav-link" aria-current="page" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <div class="avatar avatar-md me-3">
                                        <img src="{{ asset('admin') }}/assets/images/faces/2.jpg">
                                    </div>
                                    {{ auth()->user()->username }}
                                </a>
                            @endguest
                            <div class="dropdown-menu dropdown-menu-end" style="margin: 0px;">
                                @if (Route::has('login'))
                                    @auth
                                        <a href="#" class="dropdown-item">
                                            <i class="ni ni-single-02"></i>
                                            <span>My profile</span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ni ni-settings-gear-65"></i>
                                            <span>Settings</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <form id="logout" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button class="dropdown-item" type="submit">
                                                <i class="ni ni-user-run"></i>
                                                <span>Logout</span>
                                            </button>
                                        </form>
                                    @else
                                        <a class="dropdown-item" href="{{ route('login') }}">
                                            <i class="ni ni-key-25"></i>
                                            <span>Login</span></a>
                                        @if (Route::has('register'))
                                            <a class="dropdown-item" href="{{ route('register') }}">
                                                <i class="ni ni-single-02"></i>
                                                <span>Register</span></a>
                                        @endif
                                    @endauth
                                @endif
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
