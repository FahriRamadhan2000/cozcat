@extends('layouts.main')

@section('login')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="pesanan-page" >
            @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
            <div class="form" style="background: #E5E5E5; width: 600px;" >
              <div class="container"><br><br>
                <h2>Profil Saya</h2>

                <table>
                  <tr>
                    <td></td>
                  </tr>
                @foreach ($pesanans as $pesanan)
                @if ($pesanan->user->id == Auth::user()->id)

                <tr>
                  <td>Nama Owner</td>
                  <td>{{ $pesanan->nama_owner }}</td>
                </tr>
                <tr>
                  <td>Nama Kucing</td>
                  <td>{{ $pesanan->nama_kucing }}</td>
                </tr>
                <tr>
                  <td>Alamat Lengkap</td>
                  <td>{{ $pesanan->alamat }}</td>
                </tr>
                <tr>
                  <td>Check In</td>
                  <td>{{ $pesanan->menginap }}</td>
                </tr>
                <tr>
                  <td></td>
                  <td>{{ $pesanan->harga }}</td>
                </tr>
				
                @endif
                @endforeach
              </table>
            </div>
			<br><b><br><br>
          </div>
        </div>
      </main>
	  @endsection