@extends('layouts.font')

@section('heading')

    <a class="btn btn-primary" href="{{route('thread.create')}}">Nieuw Topic</a><br>

    @endsection

@section('content')




@include('thread.partials.thread-list')

@endsection