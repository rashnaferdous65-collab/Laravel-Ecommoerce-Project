
@php
    $heading = 'Welcome To Our';
    $shopName = 'Gift Shop';

    $description = 'Sequi perspiciatis nulla reiciendis, rem, tenetur impedit, eveniet non necessitatibus error distinctio mollitia suscipit. Nostrum fugit doloribus consequatur distinctio esse, possimus maiores aliquid repellat beatae cum, perspiciatis enim, accusantium perferendis.';

    $buttonText = 'Contact Us';
    $imagePath = asset('images/image3.jpeg');
@endphp

<!-- Slider Section -->
<section class="slider_section">
    <div class="slider_container">
        <div id="carouselExampleIndicators"
             class="carousel slide"
             data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-md-7">
                                <div class="detail-box">
                                    <h1>
                                        {{ $heading }} <br>
                                        {{ $shopName }}
                                    </h1>

                                    <p>{{ $description }}</p>

                                    <a href="{{ url('/contact') }}">
                                        {{ $buttonText }}
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="img-box">
                                    <img
                                        src="{{ $imagePath }}"
                                        alt="Gift Shop"
                                        style="width: 600px;"
                                    >
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Slider Section -->
