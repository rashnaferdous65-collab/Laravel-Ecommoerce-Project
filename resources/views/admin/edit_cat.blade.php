```html
<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')

    <style>
        .category-card {
            max-width: 500px;
            margin: 30px auto;
            padding: 30px;
            background: #2d3035;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
        }

        .category-card h1 {
            margin-bottom: 25px;
            color: #fff;
            font-size: 26px;
            text-align: center;
        }

        .category-card label {
            margin-bottom: 8px;
            color: #ccc;
        }

        .category-card input[type="text"] {
            padding: 12px;
            color: #fff;
            background: #1f2327;
            border: 1px solid #444;
            border-radius: 6px;
        }

        .category-card input::placeholder {
            color: #888;
        }

        .category-card input[type="submit"] {
            width: 100%;
            padding: 12px;
            color: #fff;
            font-weight: 600;
            background: #ff4c4c;
            border: 0;
            border-radius: 6px;
            transition: 0.3s;
        }

        .category-card input[type="submit"]:hover {
            background: #e04343;
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

                    <div class="category-card">

                        <h1>🎁 Update Gift Category</h1>

                        <form method="POST" action="{{ url('update_cat', $data->id) }}">

                            @csrf
                            @method('PUT')

                            <div class="form-group">

                                <label for="category_name">
                                    Category Name
                                </label>

                                <input
                                    type="text"
                                    id="category_name"
                                    name="cat_title"
                                    class="form-control"
                                    value="{{ old('cat_title', $data->cat_title) }}"
                                    required
                                >

                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn w-100"
                                    style="background:#ff4c4c; color:#fff;">
                                    Upload Category
                                </button>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>

    </div>

    @include('admin.footer')

</body>

</html>
```
