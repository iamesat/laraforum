@extends('layouts.font')

@section('banner')

    <div class="jumbotron">
        <div class="container">
            <h1>Meld je aan op LaraForum</h1>
            <p>Help anderen of wordt geholpen!</p>
            <p>
                <a class="btn btn-primary btn-lg">Meld aan!</a>
            </p>
        </div>
    </div>


@endsection
@section('heading',"Threads")

@section('content')

    @include('thread.partials.thread-list')

@endsection