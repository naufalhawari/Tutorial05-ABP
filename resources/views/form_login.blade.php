@extends('templates')

@section('title', 'Login')

@section('content')
    <form action="/auth" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="col-3 text-center">
                <h1>Login</h1>
                <label for="usr">Username</label>
                <input id="usr" type="text" name="usr"></input>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-3 text-center">
                <label for="pwd">Password</label>
                <input id="pwd" type="password" name="pwd"></input>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-3 text-center">
                <button class="btn btn-primary">Login</button>
                <br>
                {{ session('message') }}

                <!-- {{ bcrypt('admin123') }} -->
            </div>

            
        </div>

    
    </form>
@endsection