<!DOCTYPE html>
<html>
<head>
    @include('home.css')

    <style>
        .cart-container{
            width: 90%;
            margin: 40px auto;
        }

        .cart-table{
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .cart-table th{
            background: #87CEEB;
            color: #000;
            padding: 14px;
            text-align: center;
            font-size: 16px;
        }

        .cart-table td{
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            font-size: 15px;
        }

        .cart-table tr:hover{
            background: #f5f5f5;
        }

        .cart-title{
            text-align: center;
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .cart-table img {
    width: 80px;         
    height: 80px;         
    object-fit: cover;    
    border-radius: 8px;  
    box-shadow: 0 2px 6px rgba(0,0,0,0.2); 
    transition: transform 0.3s; 
}

.cart-table img:hover {
    transform: scale(1.1); 
}

.delivery-container{
    width: 50%;
    margin: 40px auto;
    background: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.12);
}

.delivery-title{
    text-align: center;
    font-size: 26px;
    font-weight: bold;
    margin-bottom: 25px;
    color: #333;
}

.delivery-group{
    margin-bottom: 18px;
}

.delivery-group label{
    display: block;
    font-size: 15px;
    margin-bottom: 6px;
    font-weight: 600;
    color: #555;
}

.delivery-group input{
    width: 100%;
    padding: 12px 14px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 15px;
    transition: border-color 0.3s, box-shadow 0.3s;
}

.delivery-group input:focus{
    outline: none;
    border-color: #87CEEB;
    box-shadow: 0 0 6px rgba(135,206,235,0.6);
}

.delivery-btn{
    width: 100%;
    padding: 14px;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s, transform 0.2s;
}

/* Cash on Delivery */
.cod-btn{
    background: #87CEEB;
    color: #000;
    margin-bottom: 12px;
}
.cod-btn:hover{
    background: #6bb6d8;
    transform: translateY(-2px);
}

/* Card Payment */
.card-btn{
    background: #4CAF50;
    color: #fff;
}
.card-btn:hover{
    background: #3e9e45;
    transform: translateY(-2px)
}


    </style>
</head>

<body>

@include('home.header')

<div class="cart-container">
    <div class="cart-title">🛒 My Cart</div>

    <table class="cart-table">
        <thead>
            <tr>
              
                <th>Product Title</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>


            <?php 

            $value=0;

            ?>
        </thead>

        <tbody>
            @foreach($cart as $mehrab)
            <tr>
               
               <td>{{ $mehrab->product->title }}</td>
                 <td>${{ $mehrab->product->price }}</td>
                 <td><img src="/products/{{ $mehrab->product->image }}" alt=""></td>
                 <td>
                            <form action="{{ route('delete_cart', $mehrab->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">
                                    Remove
                                </button>
                            </form></td>
            </tr>

            <?php

            $value= $value+ $mehrab->product->price;

            ?>
            @endforeach
        </tbody>
    </table>
</div>
<div>

<h1 style="text-align:center; margin-top:50px; margin-bottom:50px; ">Total Value of Cart is: ${{$value}}</h1>
</div>

<div class="delivery-container">

    <div class="delivery-title">
        🚚 Delivery Information
    </div>

<form action="{{ route('place_order') }}" method="POST">
    @csrf

    <div class="delivery-group">
        <label>Enter Your Name</label>
        <input type="text" name="name" value="{{ Auth::user()->name }}" placeholder="Your full name">
    </div>

    <div class="delivery-group">
        <label>Enter Your Phone</label>
        <input type="tel" name="phone" value="{{ Auth::user()->phone }}" placeholder="01XXXXXXXXX">
    </div>

    <div class="delivery-group">
        <label>Enter Your Address</label>
        <input type="text" name="rec_address" value="{{ Auth::user()->address }}" placeholder="Delivery address">
    </div>

    <!-- Payment Buttons -->
    <div class="payment-btn-group">
        <button type="submit" name="payment_method" value="cod" class="delivery-btn cod-btn">
            💵 Cash on Delivery
        </button>

        <a href="{{ url('stripe', $value) }}" class="delivery-btn card-btn" style="text-align:center; display:block;">
    💳 Pay with Card
</a>

    </div>

</form>

</div>

@include('home.footer')

</body>
</html>
