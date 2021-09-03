@extends('layouts.main')

@section('login')
    <div class="form">
      <form class="login-form" action="/register" method="post">
        @csrf
        <h1>DAFTAR</h1>
        <br>
        <label>Nama</label>
        <input type="text" name="name" class="@error('name') is_invalid @enderror" required="required" />
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>    
        @enderror
        
        <label>Username</label>
        <input type="text" name="username" class="@error('username') is_invalid @enderror" required="required" />
        @error('username')
        <div class="invalid-feedback">
            {{ $message }}
        </div>    
        @enderror

        <label>Email</label>
        <input type="email" name="email" class="@error('email') is_invalid @enderror" required="required" />
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

        <button id="submit" type="submit" value="submit" class="btn btn-primary btn-block btn-large">Buat Akun</button>
        <small class="options d-block text-center" align="center">Sudah Memiliki Akun? <a href="/login">Login</a></small>
        <br><br>
      </form>  
    </div>  
  @endsection