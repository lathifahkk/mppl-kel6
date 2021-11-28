<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin Pecel Mba Mer</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    </head>
    <body style="background-color:#F5F5FB;">
        {{-- SIDE BAR --}}
        <nav class="navbar navbar-expand d-flex flex-column align-item-start" id="sidebar" style="width: 312px;">
            <a href="#" class="navbar-brand text-light mt-5">
                <img src="{{asset('img/logo.png')}}" alt="" width="80" height="95" class="d-inline-block align-text-top logoadmin">
            </a>
            <ul class="navbar-nav d-flex flex-column mt-5 w-100">
                <li class="nav-item w-100 nav-select" style="list-style-type:none; margin-top: 60px">
                    <a href="/admin" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item w-100" style="list-style-type : none; margin-top: 24px">
                    <a href="/adminproduct" class="nav-notselect">My Products</a>
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

            <h1 class="admin-container" style="color:#0C0D36; font: size 24px; margin-top: 34px;">Dashboard</h1>
            <p class="admin-container" style="color:#9191A9; font: size 16px; margin-top: 6px;">Look what you have made today!</p>
            <div class="admin-container">
                <div class="dashboard-card">
                            <p style="
                            margin-top: 42px;
                            margin-bottom: 0px;
                            "> Customer</p>
                            <h1 style="
                            margin-top: 6px;
                            "> 15,000</h1>
                </div>
                <div class="dashboard-card">
                            <p style="
                            margin-top: 42px;
                            margin-bottom: 0px;
                            "> Revenue</p>
                            <h1 style="
                            margin-top: 6px;
                            "> Rp. 931,290</h1>
                </div>
                <div class="dashboard-card" style="margin-right:0px;">
                            <p style="
                            margin-top: 42px;
                            margin-bottom: 0px;
                            "> Transaction</p>
                            <h1 style="
                            margin-top: 6px;
                            "> 201</h1>
                </div>
            </div>
            <h1 class="admin-container" style="color:#0C0D36; font-size :21px; margin-top: 34px;">Recent Transactions</h1>
            <div class="admin-container">
                <div class="recent-card">
                    <img src="img/image.png" alt="" width="55" height="55">
                    <h3>Nasi Pecel Nganjuk</h3>
                    <p>21 November, 2021</p>
                    <a href="#"><img src="img/expand_more_24px.png" alt="" width="55" height="55"></a>
                </div>
                <div class="recent-card">
                    <img src="img/image.png" alt="" width="55" height="55">
                    <h3>Nasi Pecel Nganjuk</h3>
                    <p>21 November, 2021</p>
                    <a href="#"><img src="img/expand_more_24px.png" alt="" width="55" height="55"></a>
                </div>
                <div class="recent-card">
                    <img src="img/image.png" alt="" width="55" height="55">
                    <h3>Nasi Pecel Nganjuk</h3>
                    <p>21 November, 2021</p>
                    <a href="#"><img src="img/expand_more_24px.png" alt="" width="55" height="55"></a>
                </div>
            </div>
    </body>
</html>
