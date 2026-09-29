```php
<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')

    <style>
        .category-card,
        .table-card {
            background: #2d3035;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
            color: #fff;
        }

        .category-card {
            max-width: 500px;
            padding: 30px;
            margin: 30px auto;
        }

        .category-card h1,
        .table-card h1 {
            text-align: center;
            color: #fff;
            margin-bottom: 25px;
        }

        .category-card label {
            display: block;
            color: #ccc;
            margin-bottom: 8px;
        }

        .category-card input[type="text"] {
            width: 100%;
            background: #1f2327;
            border: 1px solid #444;
            color: #fff;
            padding: 12px;
            border-radius: 6px;
        }

        .category-card input::placeholder {
            color: #888;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            border: 0;
            border-radius: 6px;
            background: #ff4c4c;
            color: #fff;
            font-weight: 600;
            transition: 0.3s;
        }

        .submit-btn:hover {
            background: #e04343;
        }

        .table-card {
            padding: 30px;
            margin: 40px auto;
        }

        .table-card h1 {
            text-align: left;
            margin-bottom: 20px;
        }

        .category-table {
            width: 100%;
            border-collapse: collapse;
        }

        .category-table thead {
            background: #1f2327;
        }

        .category-table th {
            padding: 15px;
            color: #fff;
            text-align: left;
        }

        .category-table td {
            padding: 14px;
            color: #ccc;
            border-bottom: 1px solid #3a3d42;
        }

        .category-table tbody tr:hover {
            background: #34383e;
        }

        .action-btns {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .action-btns form {
            margin: 0;
        }
    </style>
</head>

<body>

    @include('admin.header')

    <div class="d-flex align-items-stretch">

        @include('admin.slidebar')

        <main class="page-content">
            <div class="page-header">
                <div class="container-fluid">

                    {{-- Add Gift Category --}}
                    <section class="category-card">

                        <h1>🎁 Add Gift Category</h1>

                        <form method="POST" action="{{ url('upload_category') }}">

                            @csrf

                            <div class="form-group">
                                <label for="category_name">Category Name</label>

                                <input
                                    type="text"
                                    id="category_name"
                                    name="cat_title"
                                    class="form-control"
                                    placeholder="Enter category name"
                                    required
                                >
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="submit-btn">
                                    Upload Category
                                </button>
                            </div>

                        </form>

                    </section>


                    {{-- Gift Category List --}}
                    <section class="table-card">

                        <h1>📋 View Gift Category</h1>

                        <table class="category-table">

                            <thead>
                                <tr>
                                    <th>Category Name</th>
                                    <th width="180">Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse ($data as $category)

                                    <tr>
                                        <td>
                                            {{ $category->cat_title }}
                                        </td>

                                        <td>
                                            <div class="action-btns">

                                                <a
                                                    href="{{ url('edit_cat', $category->id) }}"
                                                    class="btn btn-success btn-sm"
                                                >
                                                    Edit
                                                </a>

                                                <form
                                                    action="{{ route('delete_cat', $category->id) }}"
                                                    method="POST"
                                                >
                                                    @csrf
                                                    @method('DELETE')

                                                    <button
                                                        type="submit"
                                                        class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure you want to delete this Category?')"
                                                    >
                                                        Delete
                                                    </button>

                                                </form>

                                            </div>
                                        </td>
                                    </tr>

                                @empty

                                    <tr>
                                        <td colspan="2" class="text-center">
                                            No gift categories found.
                                        </td>
                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </section>

                </div>
            </div>
        </main>

    </div>

    @include('admin.footer')

</body>
</html>
```




