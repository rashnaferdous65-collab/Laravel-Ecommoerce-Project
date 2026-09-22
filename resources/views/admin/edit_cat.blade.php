<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')

    <style>
        /* Card */
        .category-card{
            background:#2d3035;
            padding:30px;
            border-radius:12px;
            max-width:500px;
            margin:30px auto;
            box-shadow:0 10px 30px rgba(0,0,0,0.4);
        }
        .category-card h1{
            color:#fff;
            font-size:26px;
            margin-bottom:25px;
            text-align:center;
        }
        .category-card label{
            color:#ccc;
            margin-bottom:8px;
        }
        .category-card input[type="text"]{
            background:#1f2327;
            border:1px solid #444;
            color:#fff;
            padding:12px;
            border-radius:6px;
        }
        .category-card input::placeholder{
            color:#888;
        }
        .category-card input[type="submit"]{
            background:#ff4c4c;
            border:none;
            padding:12px;
            width:100%;
            color:#fff;
            font-weight:600;
            border-radius:6px;
            transition:0.3s;
        }
        .category-card input[type="submit"]:hover{
            background:#e04343;
        }

        /* Table Section */
        .table-card{
            background:#2d3035;
            padding:30px;
            border-radius:12px;
            margin:40px auto;
            box-shadow:0 10px 30px rgba(0,0,0,0.4);
        }
        .table-card h1{
            color:#fff;
            margin-bottom:20px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }
        table thead{
            background:#1f2327;
        }
        table th{
            color:#fff;
            padding:15px;
            text-align:left;
            font-weight:600;
        }
        table td{
            color:#ccc;
            padding:14px;
            border-bottom:1px solid #3a3d42;
        }
        table tr:hover{
            background:#34383e;
        }

        .action-btns{
            display:flex;
            gap:10px;
        }
        .action-btns a,
        .action-btns button{
            padding:6px 14px;
            border-radius:5px;
            font-size:14px;
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

                <!-- Add Category -->
                <div class="category-card">
                    <h1>🎁 Update Gift Category</h1>

                    <form action="{{url('update_cat', $data->id)}}" method="POST">
                        @csrf  @method('PUT')
                       
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" 
                                   name="cat_title" 
                                   class="form-control"
                                   value="{{$data->cat_title}}"
                                   required>
                        </div>

                        <div class="mt-4">
                            <input type="submit" value="Upload Category">
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