<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/stylesheetuser.css')}}">
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
            Hello, {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{url('logout')}}">Log Out</a></li>
          </ul>
        </li>
        </ul>
      </div>
    </nav>
        
        {{-- section --}}
        <div class="container">
            <div class="row" style="color: #979797; margin-bottom:12px;">
                <p>Product /<span style="color: #0c0d36;"> Product Details</span></p>
            </div>
        </div>

        {{-- product images --}}
        <div class="container">
            <div class="row text-start">
                <div class="col-10">
                    <img src="{{asset('storage/' . $product[0]->image )}}" alt="bag" style="width:1051px; height:655px;">
                </div>
                <div class="col-2">
                    <img  src="{{asset('storage/' . $product[0]->image )}}" alt="bag" style="width:196px; height:144px; border-radius:8px; margin-bottom:25px;">
                    <img  src="{{asset('storage/' . $product[0]->image )}}" alt="bag" style="width:196px; height:144px; border-radius:8px; margin-bottom:25px;">
                    <img  src="{{asset('storage/' . $product[0]->image )}}" alt="bag" style="width:196px; height:144px; border-radius:8px; margin-bottom:25px;">
                    <img  src="{{asset('storage/' . $product[0]->image )}}" alt="bag" style="width:196px; height:144px; border-radius:8px;">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-4" style="font-size: 24px">
                <div class="col-6">
                    <p class="mb-0 fw-bolder">
                        {{$product[0]->productname}}
                    </p>
                    <p class="mb-0" style="color:#979797;">
                    {{$product[0]->category}}
                    </p>
                    <p class="mb-0 fw-bolder" style="color:#FF7158;"> 
                        Rp. {{$product[0]->price}}
                    </p>
                </div>
                <div class="col-6 text-end">
                    <a href="{{url('landing/checkout/'.$product[0]->id)}}" class="btn btn-success btn-lg" style="width:120px font-size: 18px;">Go to Check Out</a>    
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-4 mb-0" style="font-size: 24px">
                <div class="col ">
                    <p>
                        Deskripsi
                    </p>
                </div>
            </div>
            <div class="row">
                <p> {{$product[0]->description}}</p>
            </div>
        </div>
    
        <div class="row text-center footer mt-4">
            <div class="col">
                <p>2021 Copyright Store. All Rights Reserved.</p>
            </div>
        </div>
      </body>
      <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
-->
</html>
