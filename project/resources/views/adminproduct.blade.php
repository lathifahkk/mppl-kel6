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
                <li class="nav-item w-100" style="list-style-type : none; margin-top: 60px">
                    <a href="/admin" class="nav-notselect">Dashboard</a>
                </li>
                <li class="nav-item w-100 nav-select" style="list-style-type : none; margin-top: 24px">
                    <a href="/adminproduct" class="nav-link">My Products</a>
                </li>
                <li class="nav-item w-100" style="list-style-type : none; margin-top: 24px">
                    <a href="/admintransaction" class="nav-notselect">Transactions</a>
                </li>
                <li class="nav-item w-100" style="list-style-type : none; padding-top: 300px; padding-bottom:100px;">
                    <a href="{{url('logout')}}" style="color: #FF7158; margin-right:120px; font-size:21px;">Sign Out</a>
                    <img src="img/Group 38.png" alt="" width="21" height="21" class="d-inline-block align-text-top" style="padding-right: 15px;">
                </li>
            </ul>
        </nav>
        <h1 class="admin-container" style="color:#0C0D36; font: size 24px; margin-top: 34px;">My Products</h1>
        <p class="admin-container" style="color:#9191A9; font: size 16px; margin-top: 6px;">Manage it well and get money</p>
        <div class="admin-container">
            <div class="btn-group dashboard button-addnew" style="padding-top: 12px;padding-right: 0px;padding-bottom: 12px;">
                <a href="adminproduct/addproduct" class="btn btn-primary active" aria-current="page" style="padding: 10px 20px 10px 20px; color:#FFFFFF;">Add New Product</a>
            </div>    
        </div>
        <div class="admin-container">
            @foreach($product as $data)
            <a  href="{{url('adminproduct/detail/' . $data->id )}}" class="myprod-card">
                <img src="{{asset('storage/' . $data->image )}}" alt="" width="250" height="186">
                <h3>{{$data->productname}}</h3>
                <p style="color:#C5C5C5;">Rp. {{$data->price}}</p>
            </a>
            @endforeach
        </div>
    </body>
</html>
