<!DOCTYPE html>
<html>
@include('admin.css')

<style>
    .product-table {
        width: 100%;
        border-collapse: collapse;
        background: #2d3035;
        color: #eaeaea;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0,0,0,0.4);
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
    }

    .product-table tbody tr:hover {
        background: #24262b;
        transition: 0.3s;
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

    .action-btns {
        display: flex;
        gap: 8px;
        justify-content: center;
    }

    .page-title {
        color: #fff;
        margin-bottom: 20px;
        font-weight: 600;
        text-align: center;
        margin-top:50px;
    }

    .table-responsive {
        overflow-x: auto;
    }

    .pagination .page-link {
    background-color: #2d3035;
    border: 1px solid #444;
    color: #fff;
}

.pagination .page-link:hover {
    background-color: #1f2226;
    color: #fff;
}

.pagination .page-item.active .page-link {
    background-color: #198754;
    border-color: #198754;
}

.pagination .page-item.disabled .page-link {
    background-color: #2d3035;
    color: #777;
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
          form input[type="text"],
        form input[type="search"],
        form select {
            width:50%;
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
    form input[type="search"]:focus    {
            outline: none;
            border-color: #5b67f2;
            box-shadow: 0 0 8px rgba(91, 103, 242, 0.7);
        }
</style>

<body>
@include('admin.header')

<div class="d-flex align-items-stretch">
@include('admin.slidebar')

<div class="page-content">
<div class="page-header">
<div class="container-fluid">

<form action="{{url('search_product')}}" method="POST">
    @csrf
    <input type="search" name="search">
    <input type="submit" value="Search Product">
</form>
    <h1 class="page-title">View Product Details</h1>

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
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->title }}</td>

                    <td class="description">
                        {{ Str::limit($item->description, 120) }}
                    </td>

                    <td>{{ $item->quantity }}</td>
                    <td>$ {{ $item->price }}</td>
                   <td>{{ $item->category->cat_title ?? 'No Category' }}</td>


                    <td>
                        <img src="products/{{ $item->image }}" alt="Product Image">
                    </td>

                    <td>
                        <div class="action-btns">
                            <a href="{{ url('edit_pro', $item->id) }}" class="btn btn-success btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('delete_pro', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!--Pagination links-->
          <div class="d-flex justify-content-center mt-4">
    {{ $data->links('pagination::bootstrap-5') }}
     <!--Pagination links-->
</div>

</div>
</div>
</div>
</div>

@include('admin.footer')
</body>
</html>
