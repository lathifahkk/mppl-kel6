<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/stylesheetuser.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Pecel Mba Merr</title>

        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <title>IPB Career</title>
  </head>
  <body>
    <!--navbar -->
    <nav class="navbar ">
      <div class="container">
        <a class="navbar-brand">
            <div class="header-logo" style="color:#000000">Lo<span>go</span></div>
        </a>
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a href="#" class="btn nav-btn" style="color:#FF7158; font-size: 18px;">Home</a>   
          </li>
          <li class="nav-item">
            <a href="#" class="btn nav-btn" style="color:#0C0D36; font-size: 18px;">Product</a>   
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color:#0C0D36; font-size: 18px; id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hello, 
          </a>
          <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Log Out</a></li>
          </ul>
        </li>
        </ul>
      </div>
    </nav>

    <div class="container">
            <div class="row text-center">
                <div class="col">
                    <img src="img/jumbotron.png" alt="bag" style="width:100%; height:500px">
                    <p class="jumbotron-msg fw-bold">Discount 50% Off Untuk Sambal</p>
                    <p class="jumbotron-msg-2 fw-lighter">Harga belum termasuk ongkir dari tiap kota.</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-4" style="font-size: 24px">
                <div class="col">
                    <p>
                        Product
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="/offline-product"><img class="me-2" src="img/offline.png" alt="offline"></a>
                    <a href="/online-product">
                        <img src="img/online.png" alt="online">
                    </a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-4 mb-0" style="font-size: 24px">
                <div class="col ">
                    <p>
                        New Product
                    </p>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
            @foreach ($product as $data)
              <div class="col">
                <div class="p-3">
                <div class="text-start menu-card">
                    <a href="#">
                    <div class="card" style="width: 284px; border-radius:8px; float:left;">
                    @if ($data->image)
                    <img src="{{asset('storage/' . $data->image )}}" class="card-img-top" alt="" width="284" height="140" style="">
                    @else
                    <img src="img\menu-3.jpg" class="card-img-top" alt="" width="214" height="284" height="140" style="">
                    @endif
                        <div class="card-body">
                          <p class="card-text mb-0" style="color:#0C0D36;">Pecal Tanpa Nasi</p>
                          <p class="card-text" style="color:#FF7158;">9.000</p>
                        </div>
                    </div>
                    </a>
                </div>
                </div>
              </div>
            @endforeach
            </div>
        </div>
    
        <div class="container">
            <footer class="py-3 my-4">
              <ul class="nav justify-content-center border-bottom pb-3 mb-3">
              </ul>
              <p class="text-center text-muted">2021 Copyright Store. All Rights Reserved.</p>
            </footer>
          </div>
        </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>