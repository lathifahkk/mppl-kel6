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
        
        <div class="container text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3015005222182!2d106.89673581481681!3d-6.223918762689166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f35ac0909bc3%3A0x607b85d7827aaf8b!2sNasi%20Pecel%20Sambel%20Tumpang%20Nganjuk!5e0!3m2!1sen!2sid!4v1638429228638!5m2!1sen!2sid" width="600" height="440" style="border:1px solid;" allowfullscreen="" loading="lazy"></iframe>
            <div class="row justify-content-center mt-3">
                <div class="col-4">
                    <a href="/landing" class="btn btn-success btn-lg" style="width:190px; font-size: 18px;">Back to Home</a>    
                </div>
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
