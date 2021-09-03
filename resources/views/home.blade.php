<!DOCTYPE html>
<html>
<head>
  <title>CozCat | Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style type="text/css">
    .navbar{
      background-color: #FFD748;
    }
    .media{
      background-color: #FFD748;
    }
  </style>
</head>
<body>

	<nav class="navbar navbar-light">
		<a class="navbar-brand" href="#">
			<img src="img/{{ $img1 }}" width="120px" alt="logo">
		</a>

		<form class="navbar-form">
			<div class="input-group">
                
                <input type="search" class="form-control" placeholder="Search" name="search">
				<div class="input-group-btn">
					<button class="btn btn-secondary" type="submit">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                          </svg>
					</button>
				</div>
			</div>
		</form>

		<div class="nav ms-auto">
			<a href="{{ url('/register') }}">
				<button type="button" class="btn btn-info">Daftar</button>
			</a>
			<p>&emsp;&emsp;</p>
			<a href="/login">
				<button type="button" class="btn btn-secondary">Login</button>
			</a>
		</div>
	</nav>


	<div class="media">
		<img class="align-self-start mr-3" width="400px" src="img/{{ $img2 }}" alt="GAMBAR">
		<div class="media-body">
			<br><br><br>
			<h4 class="mt-0">Temukan Jasa Tempat Penitipan Kucing <br> yang memberikan solusi bagi Anda yang bingung<br> merawat kucing di tengah padatnya aktivitas</h4>
		</div>
	</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>