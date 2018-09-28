@extends('layouts.admin')


@section('admin_content')

<div class='login_form'>
    <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="username" class="col-sm-4 col-form-label">Username:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name='email' id="email" placeholder="Username">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-4 col-form-label">Password:</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" id="password" name='password' placeholder="Password">
            </div>
        </div>
        <div class="form-group row ">
            <div class="col-sm-12 text-right">
                <button type="submit" class="btn btn-success" style='width:100px;'>Login</button>
            </div>
        </div>
    </form>
</div>

@stop





















