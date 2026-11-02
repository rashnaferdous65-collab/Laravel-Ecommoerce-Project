
<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')

    @php
        $item = $data;

        $itemId = $item->id;
        $itemTitle = $item->title;
        $itemPrice = number_format($item->price, 2);
        $itemImage = asset('products/' . $item->image);

        $itemCategory = optional($item->category)->cat_title ?? 'Uncategorized';
        $itemQuantity = $item->quantity;
        $itemDetails = $item->description;

        $addToCart = url('add_cart/' . $itemId);
    @endphp

    <style>
        .product-details-container {
            padding: 80px 0;
            background-color: #f9f9f9;
        }

        .product-img-box img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-info-box {
            padding: 20px;
        }

        .product-info-box h2 {
            font-size: 32px;
            font-weight: bold;
            color: #2b2b2b;
            margin-bottom: 15px;
        }

        .product-price {
            font-size: 24px;
            color: #db4566;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .product-meta {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .product-meta span {
            font-weight: bold;
        }

        .product-description {
            margin-top: 25px;
            line-height: 1.8;
            color: #555;
        }

        .btn-add-cart {
            margin-top: 30px;
            padding: 12px 35px;
            background-color: #db4566;
            color: white;
            border-radius: 5px;
            border: none;
            transition: 0.3s;
        }

        .btn-add-cart:hover {
            background-color: #252525;
            color: white;
        }
    </style>
</head>

<body>

    <div class="hero_area">
        @include('home.header')
    </div>

    <section class="product-details-container">
        <div class="container">
            <div class="row">

                <!-- Product Image -->
                <div class="col-md-6">
                    <div class="product-img-box">

                        <img
                            src="{{ $itemImage }}"
                            alt="{{ $itemTitle }}"
                        >

                    </div>
                </div>

                <!-- Product Information -->
                <div class="col-md-6">
                    <div class="product-info-box">

                        <h2>{{ $itemTitle }}</h2>

                        <p class="product-price">
                            ${{ $itemPrice }}
                        </p>

                        <div class="product-meta">

                            <p>
                                <span>Category:</span>
                                {{ $itemCategory }}
                            </p>

                            <p>
                                <span>Available Quantity:</span>
                                {{ $itemQuantity }}
                            </p>

                        </div>

                        <!-- Product Description -->
                        <div class="product-description">

                            <h5>Description</h5>
                            <hr>

                            <p>{{ $itemDetails }}</p>

                        </div>

                        <!-- Add to Cart Button -->
                        <a href="{{ $addToCart }}" class="btn btn-add-cart">
                            Add to Cart
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('home.footer')

</body>
</html>
