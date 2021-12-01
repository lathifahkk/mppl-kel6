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
        <h1 class="admin-container" style="color:#0C0D36; font: size 24px; margin-top: 34px;">#STORE0839</h1>
        <p class="admin-container" style="color:#9191A9; font: size 16px; margin-top: 6px;">Transactions / <span>Details</span></p>
        <div class="admin-container">
            <div href="/transaction-details" class="transaction-details-card">
                <div class="tdc-col">                
                    <img src="img/image.png" alt="" width="242" height="242">
                    <h3 style="margin-top:24px; margin-bottom:24px; font-weight:bolder; color:#0C0D36;">Shipping Information</h3>
                    <h3>Address 1</h3>
                    <p>Jl.in aja dulu</p>
                    <h3>Province</h3>
                    <p>West Java </p>
                    <h3>Postal Code</h3>
                    <p>17111</p>
                </div>
                <div class="tdc-col">                
                    <h3>Customer Name</h3>
                    <p>Abiyyu</p>
                    <h3>Date of Transaction</h3>
                    <p>12 January 2020</p>
                    <h3>Total Amount</h3>
                    <p>Rp280,000</p>

                    <h3 style="margin-top:61px;">Address 2</h3>
                    <p>Jl.an berbatu</p>
                    <h3>Province</h3>
                    <p>North Java </p>
                    <h3>Postal Code</h3>
                    <p>17114</p>
                </div>
                <div class="tdc-col">                
                    <h3>Product Name</h3>
                    <p>Sambal Pecel</p>
                    <h3>Payment status</h3>
                    <p>Pending</p>
                    <h3>Mobile</h3>
                    <p>+628 2020 11111</p>

                    <button type="button" class="btn btn-tdc">Confirm</button>
                </div>
            </div>
        </div>    
    </body>
</html>
