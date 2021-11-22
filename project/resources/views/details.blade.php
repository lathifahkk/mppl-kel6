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
                <p>Product /<span style="color: #0c0d36;"> Product Details</span></p>
            </div>
        </div>

        {{-- product images --}}
        <div class="container">
            <div class="row text-start">
                <div class="col-10">
                    <img src="img/details-1.jpg" alt="bag" style="width:1051px; height:655px;">
                </div>
                <div class="col-2">
                    <img  src="img/details-2.png" alt="bag" style="width:196px; height:144px; border-radius:8px; margin-bottom:25px;">
                    <img  src="img/details-2.png" alt="bag" style="width:196px; height:144px; border-radius:8px; margin-bottom:25px;">
                    <img  src="img/details-2.png" alt="bag" style="width:196px; height:144px; border-radius:8px; margin-bottom:25px;">
                    <img  src="img/details-2.png" alt="bag" style="width:196px; height:144px; border-radius:8px;">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-4" style="font-size: 24px">
                <div class="col-6">
                    <p class="mb-0 fw-bolder">
                        Nasi Pecel Nganjuk
                    </p>
                    <p class="mb-0" style="color:#979797;">
                        Offline
                    </p>
                    <p class="mb-0 fw-bolder" style="color:#FF7158;"> 
                        Rp. 11.000
                    </p>
                </div>
                <div class="col-6 text-end">
                    <a href="#" class="btn btn-success btn-lg" style="width:120px font-size: 18px;">Go to Google Map</a>    
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-4 mb-0" style="font-size: 24px">
                <div class="col ">
                    <p>
                        Deskripsi
                    </p>
                </div>
            </div>
            <div class="row">
                <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla suscipit molestiae, maxime blanditiis neque dicta deserunt facilis voluptatum officia voluptates voluptatem quas temporibus magni quibusdam quidem sit fuga corporis, ipsam ex, autem modi facere. Enim perspiciatis ea cum similique sapiente molestiae magnam consectetur alias sint cumque earum quidem cupiditate, ipsam voluptate facilis possimus, commodi ratione ut veritatis, reiciendis est non quia? Magni minus sit, nisi, mollitia velit consequatur quas, maiores ipsa error eos obcaecati illo? Corrupti adipisci minus vitae, quam nemo veniam unde magni, aperiam accusamus aut temporibus fugit explicabo nam excepturi maiores dolore. Similique quasi at ipsum, est, nostrum mollitia magnam laborum assumenda nesciunt ab ipsam animi, recusandae iste accusantium? Aspernatur error at placeat explicabo vitae, optio ipsam quo illum quaerat non sit vel unde dolorum ullam magnam sunt eum cum nesciunt, accusantium, molestiae maiores! Recusandae, debitis. Quos soluta distinctio nostrum vel eum. Quibusdam ullam, itaque asperiores maxime vero cumque laborum in rerum optio ad voluptates ut molestiae, officiis, eos sunt mollitia quae! Commodi voluptas porro, excepturi esse nemo saepe quos, expedita autem nostrum accusantium, sunt inventore magnam nobis nulla explicabo hic minima tempore quo repellendus consequatur! Error tempore quo at fugiat quis provident labore voluptatibus nulla cum. Repellendus.</p>
            </div>
        </div>
    
        <div class="row text-center footer mt-4">
            <div class="col">
                <p>2021 Copyright Store. All Rights Reserved.</p>
            </div>
        </div>
      </body>
</html>
