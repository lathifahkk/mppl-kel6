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
        
        {{-- section --}}
        <div class="container">
            <div class="row" style="color: #979797; margin-bottom:12px;">
                <p>Product / Product Details / <span style="color: #0c0d36;"> Check Out</span></p>
            </div>
        </div>

        {{-- cart details --}}
        <div class="container">
            <div class="row text-start">
                <div class="col-4">
                    <p>Image</p>
                    <img src="img/pic-2.jpg" alt="product" style="border-radius:8px; width:260px;">
                </div>
                <div class="col-3">
                    <p style="margin-bottom:38px;">Name</p>
                    <p>Sambal Pecal 2kg</p>
                    <p style="color: #979797;">Online</p>
                </div>
                <div class="col-2">
                    <p style="margin-bottom:38px;">Price</p>
                    <p>Rp. 90.000</p>
                    <p style="color: #979797;">Rupiah</p>
                </div>
                <div class="col-3">
                    <p style="margin-bottom:38px;">Amount</p>
                    <input style="font-size: 18px; background-color:#F3F3F3; width:79%;" class="form-control" type="number" name="postal-code">
                </div>
            </div>
        </div>

        {{-- shipping details --}}
        <div class="container">
            <div class="row fw-bolder fs-4 mt-4">
                <p>Shipping Details</p>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>Address 1</p>
                    <input style="font-size: 18px; background-color:#F3F3F3; width:90%;" class="form-control" type="text" name="address-1">
                </div>
                <div class="col-6">
                    <p>Address 2</p>
                    <input style="font-size: 18px; background-color:#F3F3F3; width:90%;" class="form-control" type="text" name="address-2">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <p>Province</p>
                    <input style="font-size: 18px; background-color:#F3F3F3; width:90%;" class="form-control" type="text" name="province">
                </div>
                <div class="col-4">
                    <p>City</p>
                    <input style="font-size: 18px; background-color:#F3F3F3; width:90%;" class="form-control" type="text" name="city">
                </div>
                <div class="col-4">
                    <p>Postal Code</p>
                    <input style="font-size: 18px; background-color:#F3F3F3; width:85%;" class="form-control" type="number" name="postal-code">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <p>Country</p>
                    <input style="font-size: 18px; background-color:#F3F3F3; width:90%;" class="form-control" type="text" name="country">
                </div>
                <div class="col-6">
                    <p>Phone Number</p>
                    <input style="font-size: 18px; background-color:#F3F3F3; width:90%;" class="form-control" type="number" name="phone-number">
                </div>
            </div>
        </div>
        
        {{-- Payment Information --}}
        <div class="container">
            <div class="row fw-bolder fs-4 mt-4">
                <p>Payment Information</p>
            </div>
            <div class="row">
                <div class="col-2">
                    <p>Rp. 30.000</p>
                    <p style="color: #979797;">Shipment Cost</p>
                </div>
                <div class="col-2">
                    <p style="color: #29A867;  margin-bot:6px;">Rp. 210.000</p>
                    <p style="color: #979797;">Total Cost</p>
                </div>
                <div class="col-3">
                    <a href="#" class="btn btn-success btn-lg" style="width:100%; font-size: 18px;">Checkout Now</a>    
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
