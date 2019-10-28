@extends('layouts.master')

@section('title',$player->name)

@section('content')

    <div class="blog-post">
           
        <h2 class="blog-post-title">{{ $player->name }}</h2>
        <p class="blog-post-meta">
            First name: {{$player->first_name}} <br>
            Last name: {{$player->last_name}} <br>
            Email adress: {{$player->email}} <br>    
            <a href="{{ route('teams.show',['id' => $player->team_id]) }}">Go back to {{ $player->team->name }}'s page</a>    
        </p>
    </div>
    
@endsection
    
