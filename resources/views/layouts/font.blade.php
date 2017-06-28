<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>LaraForum - Ahmet Yavas</title>
    <link rel="stylesheet" href="https://bootswatch.com/united/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>

@include('layouts.partials.navbar')

@yield('banner')

<div class="container">


    <div class="row">
        @section('category')
        @include('layouts.partials.categories')
        @show

        <div class="col-md-9">
            <div class="row content-heading">@yield('heading')</div>
            <div class="contant-wrap well">
                @yield('content')
            </div>
        </div>
    </div>



<script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>