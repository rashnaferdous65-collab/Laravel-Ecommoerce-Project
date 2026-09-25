```php
<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #1f1f2e;
            color: #ffffff;
        }

        .page-header h1 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 30px;
            color: #f8f9fa;
        }

        .product-form {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            background: #2d2f3a;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .5);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #f1f1f1;
        }

        .form-control,
        .product-form select {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #444;
            border-radius: 8px;
            background: #3a3b47;
            color: #fff;
            font-size: 1rem;
            box-sizing: border-box;
        }

        .form-control:focus,
        .product-form select:focus {
            outline: none;
            border-color: #5b67f2;
            box-shadow: 0 0 8px rgba(91, 103, 242, .7);
        }

        .current-image {
            display: block;
            margin-top: 10px;
            border-radius: 8px;
        }

        .submit-btn {
            background: #550a28;
            color: #fff;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            transition: .3s;
        }

        .submit-btn:hover {
            background: #4953d6;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .product-form {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    @include('admin.header')

    <div class="d-flex align-items-stretch">

        @include('admin.slidebar')

        <div class="page-content">
            <div class="page-header">

                <div class="container-fluid">

                    <h1>Edit Product Details</h1>

                    <form
                        class="product-form"
                        action="{{ url('update_product_details', $data->id) }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >

                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title">Enter Product Name</label>
                            <input
                                class="form-control"
                                type="text"
                                id="title"
                                name="title"
                                value="{{ $data->title }}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="description">Enter Product Description</label>
                            <input
                                class="form-control"
                                type="text"
                                id="description"
                                name="description"
                                value="{{ $data->description }}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="price">Enter Product Price</label>
                            <input
                                class="form-control"
                                type="text"
                                id="price"
                                name="price"
                                value="{{ $data->price }}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="quantity">Enter Product Quantity</label>
                            <input
                                class="form-control"
                                type="text"
                                id="quantity"
                                name="qty"
                                value="{{ $data->quantity }}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="category">Category</label>

                            <select name="category" id="category">
                                <option value="">Select Category</option>

                                @foreach ($category as $item)
                                    <option
                                        value="{{ $item->id }}"
                                        @if ($data->category_id == $item->id)
                                            selected
                                        @endif
                                    >
                                        {{ $item->cat_title }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label>Current Product Image</label>

                            <img
                                class="current-image"
                                src="{{ asset('products/' . $data->image) }}"
                                alt="Product Image"
                                width="120"
                            >
                        </div>

                        <div class="form-group">
                            <label for="image">Enter Product Image</label>

                            <input
                                class="form-control"
                                type="file"
                                name="image"
                                id="image"
                            >
                        </div>

                        <div class="form-group">
                            <input
                                class="submit-btn"
                                type="submit"
                                value="Update Product Details"
                            >
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    @include('admin.footer')

</body>
</html>
```
