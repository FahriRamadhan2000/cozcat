@extends('layouts.main')

@section('login')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Dashboard Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      body {
  font-size: .875rem;
}

.feather {
  width: 16px;
  height: 16px;
  vertical-align: text-bottom;
}

/*
 * Sidebar
 */

.sidebar {
  position: fixed;
  top: 0;
  /* rtl:raw:
  right: 0;
  */
  bottom: 0;
  /* rtl:remove */
  left: 0;
  z-index: 100; /* Behind the navbar */
  padding: 48px 0 0; /* Height of navbar */
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
}

@media (max-width: 767.98px) {
  .sidebar {
    top: 5rem;
  }
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: .5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

.sidebar .nav-link {
  font-weight: 500;
  color: #333;
}

.sidebar .nav-link .feather {
  margin-right: 4px;
  color: #727272;
}

.sidebar .nav-link.active {
  color: #2470dc;
}

.sidebar .nav-link:hover .feather,
.sidebar .nav-link.active .feather {
  color: inherit;
}

.sidebar-heading {
  font-size: 2em;
  text-transform: uppercase;
}
    </style>

    
    <!-- Custom styles for this template -->
  </head>
  <body>
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/akun">
              <span data-feather="file"></span>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>Profil Akun
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/toko">
              <span data-feather="shopping-cart"></span>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
  <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
</svg>Toko
            </a>
          </li>
          
        </ul>

        
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      

      <div class="akun-page" >
    <div class="form" style="background: #E5E5E5; width: 600px;" >
        <div class="container">
          
      <form action="/input_akun" method="post" enctype="multipart/form-data">
        @csrf
          <br><br>
        <h2>Profil Saya</h2>
        
        
            
        
        <table>
          <tr>
            <td><input type="text" class="form-control" name="user_id" placeholder="Nama" value="{{ auth()->user()->id }}" hidden></td>
          	<td><input type="file" name="image"/></td>
          </tr>
          <tr>
            <tr>
            <td>Username</td>
            <td>{{ auth()->user()->username }}</td>
          </tr>
          <td>Nama</td>
          <td>{{ auth()->user()->name }}</td>
        </tr>
        <td>email</td>
        <td>{{ auth()->user()->email }}</td>
      </tr>
          <tr>
            <td>Nomor Telpon</td>
            <td><input type="text" name="telp" placeholder="Nomor Telepon"></td>
          </tr>
          <tr>
            <td>Jenis kelamin</td>
            <td><input type="radio" name="jenis_kelamin" value="laki-laki">laki-laki</td>
            <td><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
          </tr>
          <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tanggal_lahir" placeholder="Nama Lengkap"></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat_prov" placeholder="Provinsi"></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="text" name="alamat_lengkap" placeholder="Alamat Lengkap"></td>
          </tr>
          <tr>
            <td></td>
            <td><button type="submit" class="btn btn-primary btn-block btn-large">Simpan</button><br><br><br></td>
          </tr>
          
        </table>
            <!-- <br><br>
                    <h2>Ubah Password</h2>
                    <table>
                <tr>
                   <td>Password Lama</td>
                   <td><input type="password" name="pl" placeholder="Password Lama"></td>
                </tr>
                <tr>
                   <td>Password Baru</td>
                   <td><input type="password" name="pb" placeholder="Password Baru"></td>
                </tr>
                <tr>
                   <td>Konfirmasi Password</td>
                   <td><input type="password" name="kp" placeholder="Konfirmasi Password"></td>
                </tr>
                <tr><td></td>
              <td><button type="submit" class="btn btn-primary btn-block btn-large">Konfirmasi</button></td>
          </tr>
      </table> -->
    </div>
    
    </form>
  </div>
  
</div>
      

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>


  
@endsection