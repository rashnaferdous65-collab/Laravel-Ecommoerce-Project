```blade
<!DOCTYPE html>
<html>
<head>
    @include('home.css')

    @php
        $product = $data;
        $productName = $product->title;
        $productPrice = $product->price;
        $productImage = $product->image;
        $productCategory = $product->category->cat_title;
        $availableStock = $product->quantity;
        $productDescription = $product->description;
        $cartUrl = url('add_cart', ['id' => $product->id]);
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
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
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

                <div class="col-md-6">
                    <div class="product-img-box">
                        <img
                            src="{{ asset('products/' . $productImage) }}"
                            alt="{{ $productName }}"
                        >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="product-info-box">

                        <h2>{{ $productName }}</h2>

                        <p class="product-price">
                            ${{ number_format($productPrice, 2) }}
                        </p>

                        <div class="product-meta">
                            <p>
                                <span>Category:</span>
                                {{ $productCategory }}
                            </p>

                            <p>
                                <span>Available Quantity:</span>
                                {{ $availableStock }}
                            </p>
                        </div>

                        <div class="product-description">
                            <h5>Description</h5>
                            <hr>
                            <p>{{ $productDescription }}</p>
                        </div>

                        <a href="{{ $cartUrl }}" class="btn btn-add-cart">
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
``````blade
<!DOCTYPE html>
<html>
<head>
    @include('home.css')

    @php
        $product = $data;
        $productName = $product->title;
        $productPrice = $product->price;
        $productImage = $product->image;
        $productCategory = $product->category->cat_title;
        $availableStock = $product->quantity;
        $productDescription = $product->description;
        $cartUrl = url('add_cart', ['id' => $product->id]);
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
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
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

                <div class="col-md-6">
                    <div class="product-img-box">
                        <img
                            src="{{ asset('products/' . $productImage) }}"
                            alt="{{ $productName }}"
                        >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="product-info-box">

                        <h2>{{ $productName }}</h2>

                        <p class="product-price">
                            ${{ number_format($productPrice, 2) }}
                        </p>

                        <div class="product-meta">
                            <p>
                                <span>Category:</span>
                                {{ $productCategory }}
                            </p>

                            <p>
                                <span>Available Quantity:</span>
                                {{ $availableStock }}
                            </p>
                        </div>

                        <div class="product-description">
                            <h5>Description</h5>
                            <hr>
                            <p>{{ $productDescription }}</p>
                        </div>

                        <a href="{{ $cartUrl }}" class="btn btn-add-cart">
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
```