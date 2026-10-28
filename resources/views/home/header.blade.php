
<header class="header_section">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <nav class="navbar navbar-expand-lg custom_nav-container">

        <a class="navbar-brand" href="{{ url('/') }}">
            <span style="font-size:40px; font-weight:bold;">
                GiftShop
            </span>
        </a>

        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav">

                @php
                    $menus = [
                        'Home' => url('/'),
                        'Shop' => url('my_shop'),
                        'Why Us' => url('why_us'),
                        'Testimonial' => url('our_testimonial'),
                        'Contact Us' => url('contact_us')
                    ];
                @endphp

                @foreach($menus as $title => $link)
                    <li class="nav-item {{ request()->url() == $link ? 'active' : '' }}">
                        <a class="nav-link" href="{{ $link }}">
                            {{ $title }}
                        </a>
                    </li>
                @endforeach

            </ul>

            <div class="user_option">

                @auth

                    <a href="{{ route('dashboard') }}">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span>Profile</span>
                    </a>

                    <a href="{{ url('cart') }}">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>({{ $count ?? 0 }})</span>
                    </a>

                    <a href="{{ url('my_order') }}">
                        <i class="fa-solid fa-box"></i>
                        <span>My Order</span>
                    </a>

                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">

                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        <span>Logout</span>
                    </a>

                    <form id="logout-form"
                          action="{{ route('logout') }}"
                          method="POST"
                          class="d-none">

                        @csrf

                    </form>

                @else

                    <a href="{{ route('login') }}">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span>Login</span>
                    </a>

                    <a href="{{ route('register') }}">
                        <i class="fa fa-vcard" aria-hidden="true"></i>
                        <span>Register</span>
                    </a>

                @endauth

            </div>

        </div>

    </nav>

</header>
