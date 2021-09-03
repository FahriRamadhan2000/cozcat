<nav class="navbar navbar-light" style="background-color: #FFD748;">
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container">
    <a class="navbar-brand" href="/dashboard">
      <img src="img/logo3.png" alt="cozcat" width="120">
    </a>
    
    @auth
    <div class="dropdown col-2" style="text-decoration: none">
    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    {{ auth()->user()->name }}
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
      <li><a class="dropdown-item" href="/akun">Kelola Akun</a></li>
      <hr class="dropdown-divider">
      <li><a class="dropdown-item" href="/pesanan_saya">Pesanan Saya</a></li>
      <hr class="dropdown-divider">
      <li>
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="dropdown-item">Logout</button>
        </form>
    </ul>
  </div>
  
      @endauth
    
    
  </div>
</nav>