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
            </div>
        </div>
    
        <div class="container">
            <div class="row pt-3 justify-content-center">
                <div class="col-1" style="width: 175px;">
                    <img src="img/bag.png" alt="bag" style="width: 150px; height:150px">
                </div>
            </div>
            <div class="row text-center">
                <div class="col mt-3">
                    <p class="fs-3">Transaction Processed!</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <p class="fw-lighter mb-1" style="color:#525252; font-size:16px;">Pesanan kamu akan diarahkan ke aplikasi WhatsApp</p>
                    <p class="fw-lighter mb-1" style="color:#525252; font-size:16px;">Tekan tombol “Menuju WhatsApp” untuk lanjut ke pemesanan</p>
                </div>
            </div>

            <div class="row text-center mt-5">
                <div class="col">
                    <button type="button" class="btn btn-success" style="width:244px; height:44px;">Menuju WhatsApp</button>
                </div>
            </div>

            <div class="row text-center mt-2">
                <div class="col">
                    <button type="button" class="btn" style="width:244px; height:44px; color:#525252; background-color:#f3f3f3; border:0px;">Batalkan Pesanan</button>
                </div>
            </div>
        </div>
    
        <div class="row text-center footer" style="margin-top:155px;">
            <div class="col">
                <p>2021 Copyright Store. All Rights Reserved.</p>
            </div>
        </div>
      </body>
</html>
