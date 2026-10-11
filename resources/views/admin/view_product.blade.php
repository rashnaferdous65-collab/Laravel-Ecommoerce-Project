```blade
<!DOCTYPE html>
<html lang="en">

@include('admin.css')

<style>
    body {
        background-color: #22252a;
        color: #eaeaea;
    }

    .page-content {
        width: 100%;
        padding: 20px;
    }

    .page-title {
        color: #ffffff;
        text-align: center;
        font-weight: 600;
        margin: 50px 0 25px;
    }

    /* Search Form */
    .search-form {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 12px;
        flex-wrap: wrap;
        margin: 25px 0;
    }

    .search-form input[type="search"] {
        width: 50%;
        min-width: 220px;
        padding: 12px 15px;
        border-radius: 8px;
        border: 1px solid #444;
        background-color: #3a3b47;
        color: #ffffff;
        font-size: 1rem;
        transition: 0.3s;
    }

    .search-form input[type="search"]:focus {
        outline: none;
        border-color: #5b67f2;
        box-shadow: 0 0 8px rgba(91, 103, 242, 0.7);
    }

    .search-form input[type="submit"] {
        background-color: #550a28;
        color: #ffffff;
        padding: 12px 25px;
        font-size: 1rem;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: 0.3s;
    }

    .search-form input[type="submit"]:hover {
        background-color: #4953d6;
        transform: translateY(-2px);
    }

    /* Product Table */
    .table-responsive {
        width: 100%;
        overflow-x: auto;
        border-radius: 10px;
    }

    .product-table {
        width: 100%;
        min-width: 900px;
        border-collapse: collapse;
        background: #2d3035;
        color: #eaeaea;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
    }

    .product-table thead {
        background: #1f2226;
    }

    .product-table th,
    .product-table td {
        padding: 15px;
        text-align: center;
        border-bottom: 1px solid #3a3d42;
        vertical-align: middle;
    }

    .product-table th {
        text-transform: uppercase;
        font-size: 13px;
        letter-spacing: 0.5px;
        color: #bdbdbd;
        white-space: nowrap;
    }

    .product-table tbody tr {
        transition: background-color 0.3s;
    }

    .product-table tbody tr:hover {
        background-color: #24262b;
    }

    .product-table td.description {
        text-align: left;
        max-width: 300px;
        line-height: 1.6;
    }

    .product-table img {
        width: 70px;
        height: 70px;
        object-fit: cover;
        border-radius: 8px;
        border: 2px solid #444;
    }

    /* Action Buttons */
    .action-btns {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 8px;
    }

    .action-btns form {
        margin: 0;
    }

    .action-btns .btn {
        min-width: 60px;
        border-radius: 5px;
    }

    /* Empty Table Message */
    .empty-message {
        padding: 25px !important;
        color: #bdbdbd;
        font-size: 16px;
    }

    /* Pagination */
    .pagination {
        justify-content: center;
        flex-wrap: wrap;
    }

    .pagination .page-link {
        background-color: #2d3035;
        border: 1px solid #444;
        color: #ffffff;
    }

    .pagination .page-link:hover {
        background-color: #1f2226;
        color: #ffffff;
    }

    .pagination .page-item.active .page-link {
        background-color: #198754;
        border-color: #198754;
    }

    .pagination .page-item.disabled .page-link {
        background-color: #2d3035;
        color: #777;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .page-content {
            padding: 12px;
        }

        .page-title {
            font-size: 24px;
            margin-top: 30px;
        }

        .search-form {
            flex-direction: column;
        }

        .search-form input[type="search"] {
            width: 100%;
            min-width: 0;
        }

        .search-form input[type="submit"] {
            width: 100%;
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

                    {{-- Product Search Form --}}
                    <form
                        action="{{ url('search_product') }}"
                        method="POST"
                        class="search-form">

                        @csrf

                        <input
                            type="search"
                            name="search"
                            value="{{ old('search') }}"
                            placeholder="Enter product name..."
                            required
                        >

                        <input
                            type="submit"
                            value="Search Product"
                        >

                    </form>

                    <h1 class="page-title">
                        View Product Details
                    </h1>

                    {{-- Product Details Table --}}
                    <div class="table-responsive">

                        <table class="product-table">

                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse($data as $product)

                                    @php
                                        $productTitle = $product->title;
                                        $productDescription = $product->description;
                                        $productQuantity = $product->quantity;
                                        $productPrice = $product->price;
                                        $productCategory = optional($product->category)->cat_title;
                                        $productImage = $product->image;
                                    @endphp

                                    <tr>

                                        {{-- Product Title --}}
                                        <td>
                                            {{ $productTitle }}
                                        </td>

                                        {{-- Product Description --}}
                                        <td class="description">
                                            {{ \Illuminate\Support\Str::limit($productDescription, 120) }}
                                        </td>

                                        {{-- Product Quantity --}}
                                        <td>
                                            {{ $productQuantity }}
                                        </td>

                                        {{-- Product Price --}}
                                        <td>
                                            $ {{ $productPrice }}
                                        </td>

                                        {{-- Product Category --}}
                                        <td>
                                            {{ $productCategory ?? 'No Category' }}
                                        </td>

                                        {{-- Product Image --}}
                                        <td>
                                            <img
                                                src="{{ asset('products/' . $productImage) }}"
                                                alt="{{ $productTitle }}"
                                                loading="lazy"
                                            >
                                        </td>

                                        {{-- Edit and Delete Actions --}}
                                        <td>

                                            <div class="action-btns">

                                                <a
                                                    href="{{ url('edit_pro', $product->id) }}"
                                                    class="btn btn-success btn-sm">
                                                    Edit
                                                </a>

                                                <form
                                                    action="{{ route('delete_pro', $product->id) }}"
                                                    method="POST">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button
                                                        type="submit"
                                                        class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure you want to delete this product?')">

                                                        Delete

                                                    </button>

                                                </form>

                                            </div>

                                        </td>

                                    </tr>

                                @empty

                                    <tr>
                                        <td colspan="7" class="empty-message text-center">
                                            No products found.
                                        </td>
                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                    {{-- Pagination Links --}}
                    @if($data->hasPages())

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
