<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #1f1f2e;
            color: #fff;
        }

        .page-header h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2rem;
            color: #f8f9fa;
        }

        form {
            max-width: 600px;
            margin: auto;
            background-color: #2d2f3a;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
        }

        form div {
            margin-bottom: 20px;
        }

        form label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #f1f1f1;
        }

        form input[type="text"],
        form input[type="file"],
        form select {
            width: 100%;
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #444;
            background-color: #3a3b47;
            color: #fff;
            font-size: 1rem;
            transition: border 0.3s, box-shadow 0.3s;
        }

        form input[type="text"]:focus,
        form select:focus,
        form input[type="file"]:focus {
            outline: none;
            border-color: #5b67f2;
            box-shadow: 0 0 8px rgba(91, 103, 242, 0.7);
        }

        form input[type="submit"] {
            background-color: #550a28ff;
            color: #fff;
            padding: 12px 25px;
            font-size: 1rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }

        form input[type="submit"]:hover {
            background-color: #4953d6;
            transform: translateY(-2px);
        }

        /* Responsive */
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

                    <form action="{{url('upload_product_details')}}" method="POST" enctype="multipart/form-data">

                    @csrf
                        <div>
                            <label for="title">Enter Product Name</label>
                            <input type="text" name="title" id="title">
                        </div>

                        <div>
                            <label for="description">Enter Product Description</label>
                            <input type="text" name="description" id="description">
                        </div>

                        <div>
                            <label for="price">Enter Product Price</label>
                            <input type="text" name="price" id="price">
                        </div>

                        <div>
                            <label for="quantity">Enter Product Quantity</label>
                            <input type="text" name="qty" id="quantity">
                        </div>

                        <div>
                            <label for="category">Enter Product Category</label>
                            <select name="category" id="category">
                                <option value="">Select a Category</option>
                                @foreach($data as $item)
                                <option value="{{$item->id}}">{{$item->cat_title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="image">Enter Product Image</label>
                            <input type="file" name="image" id="image">
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
