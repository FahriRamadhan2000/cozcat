@extends('layouts.main')

@section('login')
  <div class="container mt-4">
    {{-- <form>
      <div class="form-row align-items-center">
        <div class="col-auto my-1">Filter : </div>
        <div class="col-auto my-1">
          <div class="dropdown">
  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Harga
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
        </div>
      </div>
    </form> --}}
  </div>

    <div class="container">
       <div class="d-flex">
        <input class="form-control me-2" id="search" type="search" placeholder="Search" aria-label="Search">
       </div>
    <div class="row" id="dash">
      @foreach ($posts as $post)
      <div class="col-sm-12 col-md-6 col-lg-4 mt-4">
        <a href="/detail_produk/{{ $post["id"] }}">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" type="file" src="{{ url('/produk/image'.rand(1,7).'jpeg') }}" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-subtitle mb-2 text-muted">{{ $post->title }}</h6>
              <p class="card-text">{{ $post->harga }}</p>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
    </div>

  <script>
    document.getElementById('search').addEventListener('keyup', async()=>{
      try {
        let title = document.getElementById('search').value;
        const res = await fetch('{{ route("scr") }}'+'?search='+title);
        const {data} = await res.json();
        let html = "";

    data.forEach(value => {
      html+= `
        <a href="/detail_produk/${value.id}">
      <div class="col-sm-12 col-md-6 col-lg-4 mt-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" type="file" src="${value.imageUrl}" alt="Card image cap">
            <div class="card-body">
              <h6 class="card-subtitle mb-2 text-muted">${value.title}</h6>
              <p class="card-text">${value.harga}</p>
            </div>
          </div>
      </div>
    </a>`
    });
        document.getElementById('dash').innerHTML = html;
        console.log(data);
      } catch (error) {
        console.error(error);
      }
    });
  </script>
@endsection