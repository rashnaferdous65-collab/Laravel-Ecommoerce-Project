@php
    $contactTitle = 'Contact Us';

    $mapUrl = 'https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France';

    $contactFields = [
        [
            'type' => 'text',
            'placeholder' => 'Name',
            'class' => ''
        ],
        [
            'type' => 'email',
            'placeholder' => 'Email',
            'class' => ''
        ],
        [
            'type' => 'text',
            'placeholder' => 'Phone',
            'class' => ''
        ],
        [
            'type' => 'text',
            'placeholder' => 'Message',
            'class' => 'message-box'
        ]
    ];
@endphp

<!-- contact section -->

<section class="contact_section">
    <div class="container px-0">
        <div class="heading_container">
            <h2>{{ $contactTitle }}</h2>
        </div>
    </div>

    <div class="container container-bg">
        <div class="row">

            <div class="col-lg-7 col-md-6 px-0">
                <div class="map_container">
                    <div class="map-responsive">

                        <iframe
                            src="{{ $mapUrl }}"
                            width="600"
                            height="300"
                            frameborder="0"
                            style="border:0; width:100%; height:100%"
                            allowfullscreen>
                        </iframe>

                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 px-0">

                <form action="#">

                    @foreach($contactFields as $field)
                        <div>
                            <input
                                type="{{ $field['type'] }}"
                                class="{{ $field['class'] }}"
                                placeholder="{{ $field['placeholder'] }}"
                            />
                        </div>
                    @endforeach

                    <div class="d-flex">
                        <button type="submit">
                            SEND
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</section>

<br><br><br>

<!-- end contact section -->