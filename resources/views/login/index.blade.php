@extends('layouts.main')

@section('login')
    
 @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      
    <div class="form">
      <form class="login-form" action="/login" method="post">
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
        <small class="options d-block text-center">Belum Memiliki Akun? <a href="/register"> Buat Akun</a></small>
      </form>
    </div>
 @endsection
