
<!DOCTYPE html>
<html lang="en">

@include('home.css')

<body>

<style>
    body {
        background: #f5f7fb;
    }

    .order-wrapper {
        display: flex;
        justify-content: center;
        margin: 80px 0;
    }

    .order-card {
        width: 90%;
        max-width: 1000px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, .1);
        overflow: hidden;
    }

    .order-card h2 {
        padding: 20px;
        text-align: center;
        background: #87CEEB;
        color: #fff;
        font-weight: bold;
        letter-spacing: 1px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th {
        background: #f1f5f9;
        padding: 15px;
        text-transform: uppercase;
        font-size: 14px;
        color: #555;
    }

    td {
        padding: 15px;
        text-align: center;
        border-bottom: 1px solid #eee;
        font-size: 15px;
    }

    tr:hover {
        background: #f9fafb;
    }

    .status {
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 13px;
        font-weight: bold;
        display: inline-block;
    }

    .delivered {
        background: #dcfce7;
        color: #166534;
    }

    .pending {
        background: #fee2e2;
        color: #991b1b;
    }

    .order-img {
        width: 70px;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, .15);
    }

    @media (max-width: 768px) {
        table, thead, tbody, th, td, tr {
            display: block;
        }

        th {
            display: none;
        }

        td {
            text-align: right;
            position: relative;
            padding-left: 50%;
        }

        td::before {
            content: attr(data-label);
            position: absolute;
            left: 15px;
            font-weight: bold;
            text-transform: uppercase;
        }
    }
</style>

<div class="hero_area">
    @include('home.header')
</div>

<div class="order-wrapper">
    <div class="order-card">

        <h2>My Orders</h2>

        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Image</th>
                </tr>
            </thead>

            <tbody>
                @forelse($order as $item)

                    @php
                        $product = $item->product;
                        $orderStatus = $item->status ?? 'Pending';

                        $isDelivered = strtolower($orderStatus) === 'delivered'
                            || strtolower($orderStatus) === 'deliverd';
                    @endphp

                    <tr>
                        <td data-label="Product">
                            {{ $product->title ?? 'Product unavailable' }}
                        </td>

                        <td data-label="Price">
                            ${{ $product->price ?? '0.00' }}
                        </td>

                        <td data-label="Status">
                            <span class="status {{ $isDelivered ? 'delivered' : 'pending' }}">
                                {{ $isDelivered ? 'Delivered' : $orderStatus }}
                            </span>
                        </td>

                        <td data-label="Image">
                            @if($product && $product->image)
                                <img
                                    class="order-img"
                                    src="{{ asset('products/' . $product->image) }}"
                                    alt="{{ $product->title ?? 'Product image' }}"
                                >
                            @else
                                <span>No image</span>
                            @endif
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="4">You have no orders yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>

@include('home.footer')

</body>
</html>
