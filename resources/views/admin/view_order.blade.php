```php
<!DOCTYPE html>
<html lang="en">

@include('admin.css')

<style>
    .product-table {
        width: 100%;
        border-collapse: collapse;
        background-color: #2d3035;
        color: #eaeaea;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
    }

    .product-table thead {
        background-color: #1f2226;
    }

    .product-table th,
    .product-table td {
        padding: 15px;
        text-align: center;
        border-bottom: 1px solid #3a3d42;
        vertical-align: middle;
    }

    .product-table th {
        color: #bdbdbd;
        font-size: 13px;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    .product-table tbody tr:hover {
        background-color: #24262b;
        transition: background-color 0.3s ease;
    }

    .product-table td.description {
        max-width: 300px;
        line-height: 1.6;
        text-align: left;
    }

    .product-table img {
        width: 70px;
        height: 70px;
        object-fit: cover;
        border: 2px solid #444;
        border-radius: 8px;
    }

    .page-title {
        margin: 50px 0 20px;
        color: #fff;
        font-weight: 600;
        text-align: center;
    }

    .table-responsive {
        overflow-x: auto;
    }

    /* Search form */

    .search-form {
        display: flex;
        align-items: center;
        gap: 12px;
        flex-wrap: wrap;
        margin-bottom: 20px;
    }

    .search-form input[type="search"] {
        width: 50%;
        min-width: 200px;
        padding: 12px 15px;
        color: #fff;
        background-color: #3a3b47;
        border: 1px solid #444;
        border-radius: 8px;
        font-size: 1rem;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .search-form input[type="search"]:focus {
        outline: none;
        border-color: #5b67f2;
        box-shadow: 0 0 8px rgba(91, 103, 242, 0.7);
    }

    .search-form button {
        padding: 12px 25px;
        color: #fff;
        background-color: #550a28;
        border: none;
        border-radius: 8px;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.2s;
    }

    .search-form button:hover {
        background-color: #4953d6;
        transform: translateY(-2px);
    }

    /* Action buttons */

    .action-buttons {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 10px;
    }

    .btn-action {
        display: inline-block;
        padding: 8px 16px;
        border: none;
        border-radius: 4px;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        text-align: center;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out;
    }

    .btn-way {
        color: #212529;
        background-color: #ffc107;
    }

    .btn-way:hover {
        color: #212529;
        background-color: #e0a800;
    }

    .btn-delivered {
        color: #fff;
        background-color: #5a0e6f;
    }

    .btn-delivered:hover {
        color: #fff;
        background-color: #218838;
    }

    .btn-cancel {
        color: #fff;
        background-color: #6f0611;
    }

    .btn-cancel:hover {
        color: #fff;
        background-color: #c82333;
    }

    .btn-print {
        color: #eff3f7;
        background-color: #c62011;
    }

    .btn-print:hover {
        color: #fff;
        background-color: #e70505;
    }

    /* Pagination */

    .pagination .page-link {
        color: #fff;
        background-color: #2d3035;
        border: 1px solid #444;
    }

    .pagination .page-link:hover {
        color: #fff;
        background-color: #1f2226;
    }

    .pagination .page-item.active .page-link {
        background-color: #198754;
        border-color: #198754;
    }

    .pagination .page-item.disabled .page-link {
        color: #777;
        background-color: #2d3035;
    }

    .empty-message {
        padding: 25px;
        color: #ccc;
        text-align: center;
    }

    @media (max-width: 768px) {
        .search-form input[type="search"] {
            width: 100%;
        }

        .search-form button {
            width: 100%;
        }

        .product-table th,
        .product-table td {
            padding: 10px;
        }

        .page-title {
            margin-top: 30px;
        }
    }
</style>

<body>

    @include('admin.header')

    <div class="d-flex align-items-stretch">

        @include('admin.slidebar')

        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">

                    {{-- Product search form --}}

                    <form
                        action="{{ url('search_product') }}"
                        method="POST"
                        class="search-form"
                    >
                        @csrf

                        <input
                            type="search"
                            name="search"
                            placeholder="Search product..."
                            value="{{ request('search') }}"
                        >

                        <button type="submit">
                            Search Product
                        </button>
                    </form>

                    <h1 class="page-title">
                        View Product Details
                    </h1>

                    {{-- Order details table --}}

                    <div class="table-responsive">

                        <table class="product-table">

                            <thead>
                                <tr>
                                    <th>Customer Name</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Product Title</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Delivery Status</th>
                                    <th>Change Status</th>
                                    <th>Print PDF</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse ($data as $order)

                                    @php
                                        $productInfo = $order->product;
                                        $orderId = $order->id;
                                        $deliveryStatus = ucfirst(
                                            $order->status ?? 'Pending'
                                        );
                                    @endphp

                                    <tr>

                                        <td>
                                            {{ $order->name }}
                                        </td>

                                        <td>
                                            {{ $order->rec_address }}
                                        </td>

                                        <td>
                                            {{ $order->phone }}
                                        </td>

                                        <td>
                                            {{ $productInfo->title ?? 'N/A' }}
                                        </td>

                                        <td>
                                            {{ $productInfo->price ?? 'N/A' }}
                                        </td>

                                        <td>
                                            @if ($productInfo && $productInfo->image)
                                                <img
                                                    src="{{ asset('products/' . $productInfo->image) }}"
                                                    alt="{{ $productInfo->title ?? 'Product Image' }}"
                                                >
                                            @else
                                                <span>No image</span>
                                            @endif
                                        </td>

                                        <td>
                                            <span class="badge bg-warning text-dark">
                                                {{ $deliveryStatus }}
                                            </span>
                                        </td>

                                        <td>
                                            <div class="action-buttons">

                                                <a
                                                    href="{{ url('on_the_way/' . $orderId) }}"
                                                    class="btn-action btn-way"
                                                >
                                                    On the way
                                                </a>

                                                <a
                                                    href="{{ url('delivered/' . $orderId) }}"
                                                    class="btn-action btn-delivered"
                                                >
                                                    Delivered
                                                </a>

                                                <a
                                                    href="{{ url('cancel/' . $orderId) }}"
                                                    class="btn-action btn-cancel"
                                                >
                                                    Cancel
                                                </a>

                                            </div>
                                        </td>

                                        <td>
                                            <a
                                                href="{{ url('print/' . $orderId) }}"
                                                class="btn-action btn-print"
                                            >
                                                Download
                                            </a>
                                        </td>

                                    </tr>

                                @empty

                                    <tr>
                                        <td colspan="9" class="empty-message">
                                            No order records found.
                                        </td>
                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                    {{-- Pagination links --}}

                    @if ($data->hasPages())
                        <div class="d-flex justify-content-center mt-4">
                            {{ $data->links('pagination::bootstrap-5') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>

    </div>

    @include('admin.footer')

</body>
</html>
```
