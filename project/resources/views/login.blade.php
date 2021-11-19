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
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    
        <div class="container">
            <div class="row pt-5">
                <div class="col-6">
                    <img src="img/pic-1.png" alt="login pic" style="padding-left: 66px;">
                </div>
                <div class="col-6 login">
                    <h1 style="font-size: 32px;">Belanja Sambal Pecal Nganjuk,</h1>
                    <h1 style="font-size: 32px; margin-bottom:20px;">menjadi lebih mudah</h1>
                    <p style="margin-top:58px;
                    margin-bottom:18px;">Email Address</p>
                    <input style="font-size: 18px;">
                    <p style="margin-top:12px; margin-bottom:18px;">Password</p>
                    <input style="font-size: 18px; margin-bottom:10px;">
                    <p class="batas"></p>
                    <a href="/sign-up-success" class="btn btn-sign-in" style="background-color: #29a867;
                    color: #fff;
                    font-size: 21px;
                    line-height: 30px;
                    ">Sign in to My Account</a>
                    <p class="batas"></p>
                    <a href="#" class="btn" style="background-color: #f3f3f3;
                    color: #bbb;
                    width:372px;
                    font-size: 21px;
                    line-height: 30px">Sign Up</a>
                </div>
            </div>
        </div>
    
        <div class="row text-center footer" style="margin-top:30px;">
            <div class="col">
                <p>2021 Copyright Store. All Rights Reserved.</p>
            </div>
        </div>
      </body>
</html>
