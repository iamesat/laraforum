@extends('layouts.font')

@section('content')


            <h2>Onderwerpen</h2>

            <div class="list-group">

    @forelse($threads as $thread)


            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">{{$thread->subject}}</h4>
                <p class="list-group-item-text">{{str_limit($thread->threadm,100)}}</p>
            </a>

    @empty

    <h5>Geen onderwerpen</h5>

    @endforelse
    </div>


@endsection