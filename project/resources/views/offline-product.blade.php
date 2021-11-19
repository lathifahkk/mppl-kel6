<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/stylesheet.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Pecel Mba Merr</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <div class="header">
                <div class="row">
                    <div class="col-6">
                        <div class="header-logo">Lo<span>go</span></div>
                    </div>
                    <div class="col-6">
                        <div class="header-list">
                            <a href="#" class="btn nav-btn" style="color:#FF7158; font-size: 18px;">Home</a>    
                            <a href="#" class="btn nav-btn" style="color:#0C0D36; font-size: 18px;">Product</a>    
                            <a href="#" class="btn nav-btn" style="color:#0C0D36; font-size: 18px;">Sign Up</a>    
                            <a href="#" class="btn btn-success nav-btn" style="width:120px font-size: 18px;">Sign In</a>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
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
            <div class="row mt-4 mb-0" style="font-size: 24px">
                <div class="col ">
                    <p>
                        Offline Product
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col text-start menu-card">
                    <a href="/nasi-pecel-nganjuk">
                    <div class="card" style="width: 284px; border-radius:8px; float:left;">
                        <img src="img/menu-1.jpg" class="card-img-top" alt="product">
                        <div class="card-body">
                          <p class="card-text mb-0" style="color:#0C0D36;">Nasi Pecel Nganjuk</p>
                          <p class="card-text" style="color:#FF7158;">11.000</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col text-start menu-card">
                    <a href="/nasi-sambal-tumpang">
                    <div class="card" style="width: 284px; border-radius:8px; float:left;">
                        <img src="img/menu-2.jpg" class="card-img-top" alt="product">
                        <div class="card-body">
                          <p class="card-text mb-0" style="color:#0C0D36;">Nasi Sambal Tumpang</p>
                          <p class="card-text" style="color:#FF7158;">11.000</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col text-start menu-card">
                    <a href="/pecal-tanpa-nasi">
                    <div class="card" style="width: 284px; border-radius:8px; float:left;">
                        <img src="img/menu-3.jpg" class="card-img-top" alt="product">
                        <div class="card-body">
                          <p class="card-text mb-0" style="color:#0C0D36;">Pecal Tanpa Nasi</p>
                          <p class="card-text" style="color:#FF7158;">9.000</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col text-start menu-card">
                    <a href="/nasi-gudeg">
                    <div class="card" style="width: 284px; border-radius:8px; float:left;">
                        <img src="img/menu-4.jpg" class="card-img-top" alt="product">
                        <div class="card-body">
                          <p class="card-text mb-0" style="color:#0C0D36;">Nasi Gudeg</p>
                          <p class="card-text" style="color:#FF7158;">16.000</p>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    
        <div class="row text-center footer mt-4">
            <div class="col">
                <p>2021 Copyright Store. All Rights Reserved.</p>
            </div>
        </div>
      </body>
</html>
