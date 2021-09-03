@extends('layouts.main')

@section('login')
	
	<div class="container p-5">
		<div class="bg"style="background-color: #EEE;">
			<table class="table table-borderless border-bottom border-dark">
				<thead>
					<tr>
						<th><img src="" width="100px"></th>
					</tr>
				</thead>
			</table>
		
			<div class="row p-5">
				<div class="media">
					<img class="mr-3" src="{{ Storage::url($post->image) }}" alt="Generic placeholder image" style="width: 250px">
					<div class="media-body">
						<h5 class="mt-0">{{ $post->title }}</h5>
						<p>{{ $post->harga }}</p>
						<div class="row">
							<div class="col">
								<a href="/pesanan/{{ $post->id }}"><button type="button" class="btn btn-warning">Pesan</button></a>
							</div>
						</div>
						<br>
						<h6>Deskripsi</h6>
                        {{ $post->deskripsi }}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection