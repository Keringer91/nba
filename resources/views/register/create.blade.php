@extends('layouts.master')

@section('content')
    <h2>Register user</h2>

    <form method="POST" action="/register">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control"/>
        </div>

        <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" class="form-control"/>
        </div>

        <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control"/>
        </div>

        <div class="form-group">
                <label for="password_confirmation">Confirm password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"/>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>

    </form>

    @if(count($errors->all()))

        <ul>
            @foreach($errors->all() as $error)

                <div class="form-group"> 
                    <div class="alert  alert-danger">
                    
                            <li>
                                {{ $error }}
                            </li>
                        
                    </div>
                </div>

            @endforeach
        </ul>
    @endif
@endsection