```blade
<!DOCTYPE html>
<html lang="en">

@include('home.css')

<body>

    @include('home.header')

    @php
        $pageTitle = 'Contact Us';
        $currentYear = date('Y');
        $socialLinks = [
            'facebook' => 'fa-facebook',
            'twitter' => 'fa-twitter',
            'instagram' => 'fa-instagram',
            'youtube' => 'fa-youtube'
        ];

        $contactDetails = [
            ['icon' => 'fa-map-marker', 'text' => 'Gb road 123 london Uk'],
            ['icon' => 'fa-phone', 'text' => '+01 12345678901'],
            ['icon' => 'fa-envelope', 'text' => 'demo@gmail.com']
        ];
    @endphp

    <div class="hero_area"></div>

    <!-- Contact Section -->
    <section class="contact_section layout_padding">

        <div class="container px-0">
            <div class="heading_container">
                <h2>{{ $pageTitle }}</h2>
            </div>
        </div>

        <div class="container container-bg">
            <div class="row">

                <div class="col-lg-7 col-md-6 px-0">
                    <div class="map_container">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                                width="600"
                                height="300"
                                frameborder="0"
                                style="border:0; width:100%; height:100%;"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 px-0">
                    <form action="#" method="POST">

                        <div>
                            <input type="text" name="name" placeholder="Name">
                        </div>

                        <div>
                            <input type="email" name="email" placeholder="Email">
                        </div>

                        <div>
                            <input type="text" name="phone" placeholder="Phone">
                        </div>

                        <div>
                            <input type="text" name="message"
                                class="message-box" placeholder="Message">
                        </div>

                        <div class="d-flex">
                            <button type="submit">SEND</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>

    </section>

    <!-- Information Section -->
    <section class="info_section layout_padding2-top">

        <div class="social_container">
            <div class="social_box">

                @foreach($socialLinks as $platform => $icon)
                    <a href="#" aria-label="{{ $platform }}">
                        <i class="fa {{ $icon }}" aria-hidden="true"></i>
                    </a>
                @endforeach

            </div>
        </div>

        <div class="info_container">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-lg-3">
                        <h6>ABOUT US</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore.
                        </p>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="info_form">
                            <h5>Newsletter</h5>

                            <form action="#" method="POST">
                                <input type="email" placeholder="Enter your email">
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <h6>NEED HELP</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore.
                        </p>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <h6>CONTACT US</h6>

                        <div class="info_link-box">

                            @foreach($contactDetails as $detail)
                                <a href="#">
                                    <i class="fa {{ $detail['icon'] }}"
                                        aria-hidden="true"></i>
                                    <span>{{ $detail['text'] }}</span>
                                </a>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer_section">
            <div class="container">
                <p>
                    &copy; {{ $currentYear }} All Rights Reserved By
                    <a href="https://html.design/">Free Html Templates</a>
                </p>
            </div>
        </footer>

    </section>

    <!-- JavaScript Files -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
```