<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemesanan</title>

    <style>
        .form {
    position: relative;
    z-index: 1;
    margin: 0 auto;
    width: 200px;
    top: 100px;
}

.form h1 {
    font-family: NanumMyeongjo;
    font-style: normal;
    font-weight: normal;
    font-size: 40px;
    line-height: 50px;
    text-align: center;
    color: #000000;
    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}

.form input,
textarea,
#submit {
    width: 225px;
    margin-bottom: 10px;
    border: none;
    outline: none;
    padding: 10px;
    font-size: 13px;
    border: 1px solid;
    border-radius: 4px;
}

.form label,
.options {
    width: 225px;
    font-family: NanumMyeongjo;
    font-style: normal;
    font-weight: normal;
    font-size: 15px;
    line-height: 25px;
}

.form input[type="radio"] {
    width: 13px;
}
    </style>
</head>
<body>
    @extends('layouts.main')

@section('login')
    <div class="form">
            <form class="login-form" action="/pesanan" method="post">
                @csrf
                <h1>Pemesanan</h1>
                <br>
                <input type="text" class="form-control" name="user_id" placeholder="Nama" value="{{ auth()->user()->id }}" hidden >
                {{-- @foreach ($posts as $post)
                   @if ($post->user->id == Auth::user()->id) --}}
                <input type="text" class="form-control" name="post_id" placeholder="Nama" value="{{ $post->id }}" hidden>
                {{-- @endif
                    @endforeach --}}
                <label>Nama Owner</label>
                <input type="text" name="nama_owner" required />
                <label>Nama Kucing</label>
                <input type="text" name="nama_kucing" required />
                <label>Alamat</label>
                <textarea name="alamat" ></textarea>
                <label>Menginap</label>
                <input type="date" name="menginap" required />
                <br>
                <h5>Total Harga : {{ $post->harga }}</h5>
                <br>
                <button id="submit" type="submit" value="submit" class="btn btn-primary btn-block btn-large">Pesan</button>
                <br><br><br>
            </form>
                
        </div> 
</body>
</html>
    
        

        @endsection