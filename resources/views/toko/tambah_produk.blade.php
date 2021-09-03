@extends('layouts.main')

@section('login')
  <div class="container mt-5">
    <div class="mx-auto" style="width: 900px;">
      <div class="col-6">
        <table class="table" style="text-align: center;">
          <thead class="thead-light" >
              <tr>
                <th scope="col"><a href="/toko">Produk</a></th>
                <th scope="col"><a href="/toko/pesanan">Pesanan</a></th>
              </tr>
            </thead>
          </table>

          <form action="/toko_tambah_produk" method="post" enctype="multipart/form-data">
            @csrf
            <table class="border border-dark">
              <tbody>
                <tr>
                  <br>
                  <td>Pilih Gambar</td>
                    <td><input class="btn btn-default form-control @error('image') is-invalid @enderror" type="file" required="required" name="image" id="image">
                    <!-- error message untuk title -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    </td>
                    <tr>
                   <td><input type="text" class="form-control" name="user_id" placeholder="Nama" value="{{ auth()->user()->id }}" hidden>
                   </td>
                    </tr>
                </tr>
                <tr>
                   <td><label>Nama</label></td>
                   <td><input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Nama">
                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </td>
                </tr>
                <tr>
                   <td><label>Harga</label></td>
                   <td><input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" placeholder="Harga">
                <!-- error message untuk harga -->
                                @error('harga')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div></td>
                </tr>
                <tr>
                   <td><label>Deskripsi</label></td>
                   <td><textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi"></textarea>
                <!-- error message untuk deskripsi -->
                                @error('deskripsi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </td>
                </tr>
                <tr>
                  <td></td>
                  <td><button type="submit" class="btn btn-warning">Simpan</button> <br><br></td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </div>
@endsection