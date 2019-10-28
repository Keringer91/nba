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
    </div>
    
@endsection
    
