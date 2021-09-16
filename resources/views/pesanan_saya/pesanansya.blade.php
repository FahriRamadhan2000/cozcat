@extends('layouts.main')

@section('login')
	<div class="container mt-5">
		<div class="mx-auto" style="width: 900px;">
			<div class="col-6">
				<table class="table" style="text-align: center;">
					<thead class="thead-light" >
						  <tr>
						    <th scope="col"><a href="/pesanan_saya">Pesanan</a></th>
						  </tr>
						</thead>
					</table>
						<div class="row">
							
							<div class="col-sm-12 col-md-6 col-lg-4 mt-4">
								<div class="card" style="width: 18rem; background-color: #EEE;">
									{{-- <img class="card-img-top" src="{{ url('/produk/image'.rand(1,7).'.jpeg') }}" alt="Card image cap"> --}}
									<div class="card-body">

										@foreach ($pesanans as $pesanan)
										@if ($pesanan->user->id == Auth::user()->id)
										<p class="card-text">{{ $pesanan->nama_owner }}</p>
										<p class="card-text">{{ $pesanan->nama_kucing }}</p>
										<p class="card-text">{{ $pesanan->alamat }}</p>
										<p class="card-text">{{ $pesanan->menginap }}</p>
										@endif
										@endforeach
									</div>
								</div>
							</div>
						</div>
						{{-- <div class="row p-3">							  
							  <div class="media-body">
								  @foreach ($posts as $post)
								  @if ($post->user->id == Auth::user()->id)
								  <img class="mr-3" src="{{ url('/produk/image'.rand(1,7).'.jpeg') }}" alt="Generic placeholder image" width="150">
							    <h5 class="mt-0">{{ $post->title }}</h5>
								@endif
								@endforeach
								 @foreach ($pesanans as $pesanan)
								 @if ($pesanan->user->id == Auth::user()->id)
							    <p>{{ $pesanan->nama_owner }} <br>{{ $pesanan->nama_kucing }} <br>{{ $pesanan->alamat }} <br>{{ $pesanan->menginap }}</p>
							    <h5>{{ $pesanan->harga }}</h5>
								@endif
								@endforeach
							  </div>
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
        @endsection