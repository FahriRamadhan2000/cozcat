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
					<div class="bg"style="background-color: #EEE;">
						<div class="row p-3">
							<table class="table table-borderless border-bottom border-dark">
							  <thead>
							    <tr>
							      <th colspan="2"><img src="" width="40px">{{ auth()->user()->username }}</th>
							    </tr>
							  </thead>
							</table>
							  
							  <div class="media-body">
								  @foreach ($posts as $post)
								  @if ($post->user->id == Auth::user()->id)
								  <img class="mr-3" src="{{ Storage::url($post->image) }}" alt="Generic placeholder image" width="150">
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        @endsection