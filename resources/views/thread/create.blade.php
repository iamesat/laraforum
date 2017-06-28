@extends('layouts.font')

@section('heading', "Nieuwe Thread")

@section('content')

    @if (session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
        @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
            </ul>
        </div>
    @endif

<div class="row">
        <form class="form-vertical" action="{{route('thread.store')}}" method="post" role="form" id="create-thread-form">
            {{csrf_field()}}
            <div class="form-group">
                <label for="subject">Onderwerp</label>
                <input type="text" class="form-control" name="subject" id="" placeholder="Uw text" value="{{old('subject')}}">
            </div>

            <div class="form-group">
                <label for="subject">Type</label>
                <input type="text" class="form-control" name="type" id="" placeholder="Uw text" value="{{old('type')}}">
            </div>

            <div class="form-group">
                <label for="subject">Thread</label>
                <textarea class="form-control" name="thread" id="" placeholder="Uw text">{{old('thread')}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Aanmaken</button>

        </form>
</div>

@endsection