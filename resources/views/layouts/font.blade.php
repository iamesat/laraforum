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

        <div class="row content-heading">
            <div class="col-mid-3"><h4>Categorieën</h4>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4"><h4 class="main-content-heading">@yield('heading')</h4></div>
                    <div class="col-md-offset-6 col-md-2">
                        <a class="btn btn-primary" href="{{route('thread.create')}}">Nieuw Topic</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-md-3">
            <ul class="list-group">
                <a href="{{route('thread.index')}}" class="list-group-item">
                    <span class="badge">14</span>
                    Alle Topics
                </a>
                <a href="#" class="list-group-item">
                    <span class="badge">2</span>
                    Programmeren
                </a>
                <a href="#" class="list-group-item">
                    <span class="badge">1</span>
                    Niks
                </a>
            </ul>
        </div>

        <div class="col-md-9">
            <div class="contant-wrap well">
                @yield('content')
            </div>
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