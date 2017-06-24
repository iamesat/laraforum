<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>LaraForum - Ahmet Yavas</title>
    <link rel="stylesheet" href="https://bootswatch.com/united/bootstrap.min.css">
</head>
<body>

<div class="navbar navbar-default">
    <a class="navbar-brand" href="#">LaraForum</a>
    <ul class="nav navbar-nav">
        <li class="active">
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Link</a>
        </li>
    </ul>
</div>

<div class="container">
    @yield('content')
</div>

<script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>