@extends('layouts.master')

@section('title',$team->name)

@section('content')

    <div class="blog-post">
           
        <h2 class="blog-post-title">{{ $team->name }}</h2>
        <p class="blog-post-meta">
            {{$team->email}} <br>
            {{$team->adress}} <br>
            {{$team->city}} <br>        
        </p>
        <h2>Players in this team:</h2><br>
        @foreach($team->players as $player)
            <a href="{{ route('players.show',['id' => $player->id]) }}">{{ $player->first_name }} {{ $player->last_name }}</a><br>
        @endforeach

        @if(count($team->comments))
            <h3>Comments: </h3>

            <ul class="list-unstyled">
                @foreach($team->comments as $comment)
                    <li>
                        <p>Author: {{ $comment->user->name }} </p>
                        <p>Text: {{ $comment->content }} </p>
                    </li>
                @endforeach
            </ul>
        @endif

        <h3> Leave a comment </h3>
       
        <form method="POST" action="/teams/{{ $team->id}}/comments">
            @csrf

            <div class="form-group">
                <label for="content">Comment goes here:</label><br>
                <input type="text" name="content" id="content" class="form-control"/>
                
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>   

    </div>
    
@endsection
    
