<header class="main-header clearfix">
    <nav class="main-menu clearfix">
        <div class="main-menu__wrapper clearfix">
            <div class="container">
                <div class="main-menu__wrapper-inner clearfix" style="padding: 0;">
                    <div class="main-menu__left"
                        style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                        <div class="main-menu__logo" style="padding: 1rem 0;">
                            <a href="{{ route('index') }}"><img
                                    src="{{ asset('assets/images/icon/insider2_logo.png') }}" alt=""
                                    style="width: 7rem"></a>
                        </div>
                        <div class="main-menu__main-menu-box" style="padding: .5rem 1rem">
                            <div class="main-menu__main-menu-box-inner">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list one-page-scroll-menu">
                                    <li class="dropdown current">
                                        <a href="{{ route('index') }}#home">Home </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('index') }}#about">About</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('index') }}#why">Choose Us</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('index') }}#team">Team</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('specialist') }}">Specialist</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('orders') }}">Orders</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('index') }}#news">News</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('index') }}#videos">Videos</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>