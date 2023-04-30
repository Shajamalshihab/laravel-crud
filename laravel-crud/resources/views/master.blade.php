<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"href="{{asset('/')}}css/bootstrap.css"/>
    <link rel="stylesheet"href="{{asset('/')}}css/all.css"/>
    <link rel="stylesheet"href="{{asset('/')}}css/style.css"/>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light shadow">
        <div class="container">
            <a href=""class="navbar-brand">Laravel Crud Project</a>
            <ul class="navbar-nav">
                <li><a href="{{route('home')}}"class="nav-link">Home</a></li>
                <li><a href="{{route('product.add')}}"class="nav-link">Add Product</a></li>
                <li><a href=""class="nav-link">Manage Product</a></li>
            </ul>
        </div>
    </nav>
    @yield('body')
    <script src="{{asset('/')}}js/bootstrap.bundle.js"></script>
    <script src="{{asset('/')}}js/jquery.js"></script>
</body>
</html>