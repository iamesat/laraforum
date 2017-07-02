@extends('layouts.font')

@section('content')

    <h4>{{$thread->subject}}</h4>
    <hr>


    <div class="thread-details">
        {{$thread->thread}}

    </div>

    <br><br>
    <hr>

    @if(auth()->user()->id == $thread->user_id)
    <div class="actions">
        <a href="{{route('thread.edit',$thread->id)}}" class="btn btn-info btn-xs">Bewerken</a>


    <form action="{{route('thread.destroy', $thread->id)}}}" method="POST" class="inline-it">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <input class="btn btn-xs btn-danger" type="submit" value="Verwijderen">
    </form>

    </div>
    @endif

    <div class="comment">
        @foreach($thread->comments as $comment)

            <h4>{{$comment->body}}</h4>
            <lead>{{$comment->user->name}}</lead>

            @endforeach
    </div>
    <br><br>
    <div class="comment-form">

       <form action="{{route('threadcomment.store',$thread->id)}}" method="post" role="form">
           {{csrf_field()}}
           <legend>Reageer</legend>
           <div class="form-group">
               <input type="text" class="form-controll" name="body" id="" placeholder="Uw reactie">
           </div>

           <button type="submit" class="btn btn-primary">Reageren</button>
       </form>

    </div>

@endsection