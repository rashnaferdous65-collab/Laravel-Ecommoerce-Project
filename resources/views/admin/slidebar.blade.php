```php
<!-- Sidebar Navigation -->
<nav id="sidebar">

    <!-- Sidebar Header -->
    <div class="sidebar-header d-flex align-items-center">

        <div class="avatar">
            <img src="img/avatar-6.jpg"
                 alt="Profile"
                 class="img-fluid rounded-circle">
        </div>

        <div class="title">
            <h1 class="h5">Mark Stephen</h1>
            <p>Web Designer</p>
        </div>

    </div>

    <!-- Sidebar Navigation Menu -->
    <span class="heading">Main</span>

    <ul class="list-unstyled">

        <li class="active">
            <a href="{{ url('admin/dashboard') }}">
                <i class="icon-home"></i>
                Home
            </a>
        </li>

        <li>
            <a href="{{ url('gift_category') }}">
                <i class="icon-grid"></i>
                Gift Category
            </a>
        </li>

        <!-- Product Details -->
        <li>
            <a href="#productMenu"
               aria-expanded="false"
               data-toggle="collapse">

                <i class="icon-windows"></i>
                Product Details

            </a>

            <ul id="productMenu" class="collapse list-unstyled">

                <li>
                    <a href="{{ url('add_product') }}">
                        Add Product Details
                    </a>
                </li>

                <li>
                    <a href="{{ url('view_product') }}">
                        View Product Details
                    </a>
                </li>

            </ul>
        </li>

        <li>
            <a href="{{ url('view_order') }}">
                <i class="icon-grid"></i>
                View Order Details
            </a>
        </li>

        <li>
            <a href="{{ url('gallery') }}">
                <i class="icon-user"></i>
                View Gallery
            </a>
        </li>

        <li>
            <a href="{{ url('message') }}">
                <i class="icon-user"></i>
                Customer Message
            </a>
        </li>

    </ul>

</nav>
<!-- Sidebar Navigation End -->
```
