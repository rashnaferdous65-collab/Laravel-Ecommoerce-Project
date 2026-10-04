```blade
<!DOCTYPE html>
<html lang="en">

    @include('admin.css')

    <body>

        @include('admin.header')

        <div class="d-flex align-items-stretch">

            @include('admin.slidebar')

            <main class="flex-grow-1">
                @include('admin.body')
            </main>

        </div>

        @include('admin.footer')

    </body>
</html>
```
