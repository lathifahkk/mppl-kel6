<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin Pecel Mba Mer</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="css/stylesheet.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    </head>
    <body style="background-color:#F5F5FB;">
        <nav class="navbar navbar-expand d-flex flex-column align-item-start" id="sidebar">
            <a class="navbar-brand text-light mt-5">
                <img src="img\logo.png" alt="" width="79" height="95" class="d-inline-block align-text-top logoadmin">
            </a>
            <ul class="navbar-nav d-flex flex-column mt-5 w-100">
                <li class="nav-item w-100" style="list-style-type : none; margin-top: 61px">
                    <a href="#" class="nav-notselect">Dashboard</a>
                </li>
                <li class="nav-item w-100 nav-select" style="list-style-type : none; margin-top: 24px">
                    <a href="#" class="nav-link">My Products</a>
                </li>
                <li class="nav-item w-100" style="list-style-type : none; margin-top: 24px">
                    <a href="#" class="nav-notselect">Transactions</a>
                </li>
                <li class="nav-item w-100" style="list-style-type : none; padding-top: 200px; padding-bottom:100px;">
                    <a href="#" style="color: #FF7158; margin-right:100px;">Sign Out</a>
                    <img src="img/Group 38.png" alt="" width="16" height="16" class="d-inline-block align-text-top">
                </li>
            </ul>
        </nav>
            <h1 class="dashboard" style="color:#0C0D36; font: size 24px; margin-top: 34px;">My Products</h1>
            <p class="dashboard" style="color:#9191A9; font: size 16px; margin-top: 6px;">Manage it well and get money</p>
            <div class="btn-group dashboard button-addnew">
                <a href="#" class="btn btn-primary active" aria-current="page" style="padding: 10px 20px 10px 20px; color:#FFFFFF;">Add New Product</a>
            </div>
            <div class="row dashboard">
                @foreach ($product as $data)
                <div class="col text-start" style="margin-right:40px;">
                    <a href="#">
                    <div class="card card-product">
                    @if ($data->image)
                    <img src="{{asset('storage/' . $data->image )}}" class="card-img-top" alt="" width="214" height="160" style="margin: 13px 13px 0px 13px;">
                    @else
                    <img src="img\menu-3.jpg" class="card-img-top" alt="" width="214" height="160" style="margin: 13px 13px 0px 13px;">
                    @endif
                        <div class="card-body" style="margin: 13px;">
                          <p class="card-text mb-0" style="font: size 18px; color:#0C0D36;">{{$data->productname}}</p>
                          <p class="card-text" style="padding-bottom:13px; font: size 16px; color: #C5C5C5;">Rp. {{$data->price}}</p>
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
    </body>
</html>
