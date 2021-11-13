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
                <li class="nav-item w-100 nav-select" style="list-style-type : none; margin-top: 61px">
                    <a href="#" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item w-100" style="list-style-type : none; margin-top: 24px">
                    <a href="#" class="nav-notselect">My Products</a>
                </li>
                <li class="nav-item w-100" style="list-style-type : none; margin-top: 24px">
                    <a href="#" class="nav-notselect">Transactions</a>
                </li>
                <li class="nav-item w-100" style="list-style-type : none; margin-top: 200px; margin-bottom:100px;">
                    <a href="#" style="color: #FF7158;">Sign Out
                    <img src="img/Group 38.png" alt="" width="16" height="16" class="d-inline-block align-text-top logoadmin">
                    </a>
                </li>
            </ul>
        </nav>
            <h1 class="dashboard" style="color:#0C0D36; font: size 24px; margin-top: 34px;">Dashboard</h1>
            <p class="dashboard" style="color:#9191A9; font: size 16px; margin-top: 6px;">Look what you have made today!</p>
            <div class="d-flex bd-highlight dashboard">
                <div class="p-2 flex-fill bd-highlight card-dashboard" style="background-color:#FFFFFF">
                    <p style="font-size: 16px; color:#C5C5C5; margin-left: 26px;">Customer</p>
                    <p style="font-size: 32px; color::#0C0D36; margin-left: 26px; margin-top: 6px">15,209</p>
                </div>
                <div class="p-2 flex-fill bd-highlight card-dashboard" style="margin-left: 40px;">
                    <p style="font-size: 16px; color:#C5C5C5; margin-left: 26px;">Revenue</p>
                    <p style="font-size: 32px; color::#0C0D36; margin-left: 26px; margin-top: 6px">Rp. 931,290</p>
                </div>
                <div class="p-2 flex-fill bd-highlight card-dashboard" style="margin-left: 40px;">
                    <p style="font-size: 16px; color:#C5C5C5; margin-left: 26px;">Transactions</p>
                    <p style="font-size: 32px; color::#0C0D36; margin-left: 26px; margin-top: 6px">201</p>
                </div>
            </div>
            <h1 class="dashboard" style="color:#0C0D36; font: size 18px; margin-top: 24px;">Recent Transactions</h1>
            <div class="d-flex bd-highlight dashboard card-recent">
            <img src="img/image.png" alt="" width="44" height="44" class="d-inline-block align-text-top" style="margin-top:13px; margin-left:13px;">
                <div class="p-2 flex-fill bd-highlight" style="margin-top:20px; margin-left:13px">Nasi Pecel Nganjuk</div>
                <div class="p-2 flex-fill bd-highlight" style="margin-top:20px; margin-left:273px">21 November 2021</div>
                <div class="p-2 flex-fill bd-highlight" style="margin-top:20px; margin-left:70px">
                <img src="img/expand_more_24px.png" alt="" width="34" height="34" class="d-inline-block align-text-top"> 
                </div>
            </div>
    </body>
</html>
