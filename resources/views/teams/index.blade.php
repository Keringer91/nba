
    @extends('layouts.master')
    
    @section('title','All Teams')

    @section('content')

    <ul>
        @foreach($teams as $team)
        <li>

            <a href="{{ route('teams.show',['id' => $team->id]) }}">{{ $team->name }}</a>

        </li>        
        @endforeach
    </ul>
    
    @endsection

    