<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f5f5;
        }

        .content-box {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        footer {
            background: #222;
            color: white;
            padding: 10px;
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>

<body>

    <!-- Header -->
    @include('layouts.header')

    <!-- Content -->
    <div class="container mt-4">
        <div class="content-box">
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    @include('layouts.footer')

</body>
</html>