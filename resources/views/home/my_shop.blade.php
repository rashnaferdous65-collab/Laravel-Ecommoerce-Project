<!DOCTYPE html>
<html lang="en">

@php
    echo view('home.css')->render();
@endphp

<body>

    @php
        echo view('home.header')->render();
    @endphp

    <main>
        @php
            echo view('home.shop')->render();
        @endphp
    </main>

    @php
        echo view('home.footer')->render();
    @endphp

</body>

</html>