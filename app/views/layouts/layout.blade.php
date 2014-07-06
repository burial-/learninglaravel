<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- include libries(jQuery, bootstrap, fontawesome) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    @yield('header')
</head>
<body>
<div class="container col-md-8 col-md-offset-2">
    @yield('content')
    <div class="clearfix"></div>
    <footer>
        <hr/>
        <p class="text-right"><span class="glyphicon glyphicon-envelope"></span> Email me. - adrhumphreys@gmail.com</p>
        <p class="text-right"><span class="glyphicon glyphicon-user"></span> Twitter me. - @burial_</p>
    </footer>
</div>
</body>
    @yield('scripts')
</html>