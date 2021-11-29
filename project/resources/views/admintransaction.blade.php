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
            <a href="#" class="navbar-brand text-light mt-5">
                <img src="img/logo.png" alt="" width="79" height="95" class="d-inline-block align-text-top logoadmin">
            </a>
            <ul class="navbar-nav d-flex flex-column mt-5 w-100">
                <li class="nav-item w-100" style="list-style-type : none; margin-top: 60px">
                    <a href="/admin" class="nav-notselect">Dashboard</a>
                </li>
                <li class="nav-item w-100" style="list-style-type : none; margin-top: 24px">
                    <a href="/adminproduct" class="nav-notselect">My Products</a>
                </li>
                <li class="nav-item w-100 nav-select" style="list-style-type : none; margin-top: 24px">
                    <a href="/admintransaction" class="nav-link">Transactions</a>
                </li>
                <li class="nav-item w-100" style="list-style-type : none; padding-top: 300px; padding-bottom:100px;">
                    <a href="{{url('logout')}}" style="color: #FF7158; margin-right:120px; font-size:21px;">Sign Out</a>
                    <img src="img/Group 38.png" alt="" width="21" height="21" class="d-inline-block align-text-top" style="padding-right: 15px;">
                </li>
            </ul>
        </nav>
        <h1 class="admin-container" style="color:#0C0D36; font: size 24px; margin-top: 34px;">Transactions</h1>
        <p class="admin-container" style="color:#9191A9; font: size 16px; margin-top: 6px;">Big result start from the small one</p>
        <div class="admin-container">
            @foreach($transaction as $data)
            <div class="recent-card">
                <img src="{{asset('storage/' . $data->image )}}" alt="" width="55" height="55">
                <h3>{{$data->productname}}</h3>
                <p>{{$data->created_at}}</p>
                <a href="#"><img src="img/expand_more_24px.png" alt="" width="55" height="55"></a>
            </div>
            @endforeach
        </div>    
    </body>
</html>
