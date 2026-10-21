```php
<!DOCTYPE html>
<html lang="en">

@include('home.css')

<body>

    @include('home.header')

    @php
        $testimonials = [
            [
                'name' => 'Morijorch',
                'role' => 'Default model text',
                'message' => "Editors now use Lorem Ipsum as their default model text, and a search for Lorem Ipsum will uncover many websites still in their infancy. Various editors continue to use it as placeholder content."
            ],
            [
                'name' => 'Rochak',
                'role' => 'Default model text',
                'message' => "Various editors now use Lorem Ipsum as their default model text. A search for Lorem Ipsum will uncover many websites still in their infancy. It remains a popular choice for sample content."
            ],
            [
                'name' => 'Brad Johns',
                'role' => 'Default model text',
                'message' => "Lorem Ipsum is commonly used as placeholder text in website design. Many editors use it to demonstrate the appearance of a webpage before the final content is available."
            ]
        ];
    @endphp

    <div class="hero_area">
    </div>

    <!-- Testimonial Section -->
    <section class="client_section layout_padding">

        <div class="container">
            <div class="heading_container heading_center">
                <h2>Testimonial</h2>
            </div>
        </div>

        <div class="container px-0">

            <div id="customCarousel2"
                 class="carousel carousel-fade"
                 data-ride="carousel">

                <div class="carousel-inner">

                    @foreach ($testimonials as $index => $testimonial)

                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">

                            <div class="box">

                                <div class="client_info">

                                    <div class="client_name">
                                        <h5>{{ $testimonial['name'] }}</h5>
                                        <h6>{{ $testimonial['role'] }}</h6>
                                    </div>

                                    <i class="fa fa-quote-left"
                                       aria-hidden="true"></i>

                                </div>

                                <p>{{ $testimonial['message'] }}</p>

                            </div>

                        </div>

                    @endforeach

                </div>

                <div class="carousel_btn-box">

                    <a class="carousel-control-prev"
                       href="#customCarousel2"
                       role="button"
                       data-slide="prev">

                        <i class="fa fa-angle-left"
                           aria-hidden="true"></i>

                        <span class="sr-only">Previous</span>

                    </a>

                    <a class="carousel-control-next"
                       href="#customCarousel2"
                       role="button"
                       data-slide="next">

                        <i class="fa fa-angle-right"
                           aria-hidden="true"></i>

                        <span class="sr-only">Next</span>

                    </a>

                </div>

            </div>

        </div>

    </section>
    <!-- End Testimonial Section -->


    <!-- Information Section -->
    <section class="info_section layout_padding2-top">

        <div class="social_container">
            <div class="social_box">

                <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>

                <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>

                <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>

                <a href="">
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>

            </div>
        </div>

        <div class="info_container">
            <div class="container">

                <div class="row">

                    <div class="col-md-6 col-lg-3">
                        <h6>ABOUT US</h6>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Discover gifts for every special occasion with Giftos.
                        </p>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="info_form">

                            <h5>Newsletter</h5>

                            <form action="#">
                                <input type="email"
                                       placeholder="Enter your email">

                                <button type="submit">Subscribe</button>
                            </form>

                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <h6>NEED HELP</h6>

                        <p>
                            Need assistance choosing a gift?
                            Explore our collection and find something special
                            for your loved ones.
                        </p>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <h6>CONTACT US</h6>

                        <div class="info_link-box">

                            <a href="">
                                <i class="fa fa-map-marker"
                                   aria-hidden="true"></i>
                                <span>Gb road 123 London UK</span>
                            </a>

                            <a href="">
                                <i class="fa fa-phone"
                                   aria-hidden="true"></i>
                                <span>+01 12345678901</span>
                            </a>

                            <a href="">
                                <i class="fa fa-envelope"
                                   aria-hidden="true"></i>
                                <span>demo@gmail.com</span>
                            </a>

                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- Footer Section -->
        <footer class="footer_section">

            <div class="container">
                <p>
                    &copy; {{ date('Y') }} All Rights Reserved By
                    <a href="https://html.design/">Free Html Templates</a>
                </p>
            </div>

        </footer>
        <!-- End Footer Section -->

    </section>
    <!-- End Information Section -->


    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="js/custom.js"></script>

</body>
</html>
```