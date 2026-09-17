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
            margin: 0 0 30px;
            font-size: 2rem;
            color: #f8f9fa;
        }

        form {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            background: #2d2f3a;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
        }

        form div {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #f1f1f1;
            font-weight: 600;
        }

        input[type="text"],
        input[type="file"],
        select {
            width: 100%;
            padding: 12px 15px;
            background: #3a3b47;
            border: 1px solid #444;
            border-radius: 8px;
            color: #ffffff;
            font-size: 1rem;
            transition: 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="file"]:focus,
        select:focus {
            outline: none;
            border-color: #5b67f2;
            box-shadow: 0 0 8px rgba(91, 103, 242, 0.7);
        }

        input[type="submit"] {
            padding: 12px 25px;
            background: #550a28ff;
            color: #ffffff;
            border: 0;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s ease;
        }

        input[type="submit"]:hover {
            background: #4953d6;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            form {
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

                    <h1>Add Product Details</h1>

                    <form
                        action="{{ url('upload_product_details') }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >

                        @csrf

                        <div>
                            <label for="title">Enter Product Name</label>
                            <input type="text" id="title" name="title">
                        </div>

                        <div>
                            <label for="description">Enter Product Description</label>
                            <input type="text" id="description" name="description">
                        </div>

                        <div>
                            <label for="price">Enter Product Price</label>
                            <input type="text" id="price" name="price">
                        </div>

                        <div>
                            <label for="quantity">Enter Product Quantity</label>
                            <input type="text" id="quantity" name="qty">
                        </div>

                        <div>
                            <label for="category">Enter Product Category</label>

                            <select id="category" name="category">
                                <option value="">Select a Category</option>

                                @foreach ($data as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->cat_title }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <div>
                            <label for="image">Enter Product Image</label>
                            <input type="file" id="image" name="image">
                        </div>

                        <div>
                            <input type="submit" value="Add Product Details">
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
