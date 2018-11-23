<!DOCTYPE html>
<html>
<head>
    <title>My App - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="nav">
    <div>
        {{--<a href="home.html">Home</a>--}}
        <a href={{route('showHome')}}>Home</a>
    </div>
    <div>
        <a href={{route('showProduct')}}>Product</a>
    </div>
</div>

@yield('container')

<div class="footer">
    <p>Binus &copy; 2018</p>
</div>


</body>
</html>