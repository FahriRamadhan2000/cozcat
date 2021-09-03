@extends('layouts.main')

@section('login')
      
    <div class="form">
      <form class="login-form" action="/admin" method="post">
        @csrf
        <h1>LOGIN</h1>
        <br>
        <label>Email</label>
        <input type="text" name="email" class="@error('email') is_invalid @enderror" required="required" />
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>    
        @enderror

        <label>Password</label>
        <input type="password" name="password" class="@error('password') is_invalid @enderror" required="required" />
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>    
        @enderror

        <button id="submit" type="submit" value="submit" class="btn btn-primary btn-block btn-large">Masuk</button>
      </form>
    </div>
 @endsection
