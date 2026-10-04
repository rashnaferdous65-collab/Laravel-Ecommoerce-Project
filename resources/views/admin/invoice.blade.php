```blade
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f5f5;
        }

        .invoice-box {
            width: 80%;
            margin: 30px auto;
            padding: 25px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: green;
            font-size: 40px;
            margin-top: 20px;
        }

        h2 {
            color: #333;
        }

        h3 {
            color: #555;
            margin: 5px 0;
        }

        .divider {
            margin: 20px 0;
            border-top: 1px dashed #ccc;
        }
    </style>
</head>

<body>

<div class="invoice-box">

    <h2>Delivery Invoice</h2>

    <div class="divider"></div>

    @php
        $customer = $data;
        $product = $data->product;
    @endphp

    <h3>Customer Name: {{ $customer->name }}</h3>
    <h3>Customer Address: {{ $customer->rec_address }}</h3>
    <h3>Phone: {{ $customer->phone }}</h3>

    <div class="divider"></div>

    <h2>Product Title: {{ $product->title }}</h2>
    <h2>Product Price: ${{ $product->price }}</h2>

    <h1>Product Delivered!</h1>

</div>

</body>
</html>
```
