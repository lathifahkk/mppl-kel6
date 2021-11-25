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
                            <a href="#" class="btn nav-btn" style="color:#FF7158;">Home</a>    
                            <a href="#" class="btn nav-btn" style="color:#0C0D36;">Product</a>    
                            <a href="#" class="btn nav-btn" style="color:#0C0D36;">Sign Up</a>    
                            <a href="{{url('/')}}" class="btn btn-success nav-btn" style="width:120px">Sign In</a>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-start text-wrap" style="width:40%; margin:auto; font-size:32px;">Daftar akun terlebih dahulu untuk melakukan checkout</div>
        <form action="/register" method="post">
            @csrf
            <div class="text-start text-wrap" style="width:40%; margin:auto; font-size:24px; padding-top:32px;">Name</div>
            <div class="text-start" style="width:40%; margin:auto; padding-top:12px;">
                <input style="font-size: 16px; width:100%; background-color:#F3F3F3;" value="{{old('name')}}" placeholder="Nama" type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                @error('name')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
            <div class="text-start text-wrap" style="width:40%; margin:auto; font-size:24px; padding-top:32px;">Email Address</div>
            <div class="text-start" style="width:40%; margin:auto; padding-top:12px;">
                <input style="font-size: 16px; width:100%; background-color:#F3F3F3;" value="{{old('email')}}" placeholder="xyz@gmail.com" type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                @error('email')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
            <div class="text-start text-wrap" style="width:40%; margin:auto; font-size:24px; padding-top:24px;">Password</div>
            <div class="text-start" style="width:40%; margin:auto; padding-top:12px;">
                <input style="font-size: 16px; width:100%; background-color:#F3F3F3;" placeholder="********" type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                @error('password')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
            <div class="text-start text-wrap" style="width:40%; margin:auto; font-size:24px; padding-top:24px;">Mobile</div>
            <div class="text-start" style="width:40%; margin:auto; padding-top:12px;">
                <input style="font-size: 16px; width:100%; background-color:#F3F3F3;" value="{{old('mobile')}}" placeholder="+6287" type="text" name="mobile" class="form-control @error('mobile') is-invalid @enderror">
                @error('mobile')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror</div>
            <div class="text-start text-wrap" style="width:40%; margin:auto; font-size:24px; padding-top:24px;">Address 1</div>
            <div class="text-start" style="width:40%; margin:auto; padding-top:12px;">
                <input style="font-size: 16px; width:100%; background-color:#F3F3F3;" value="{{old('address1')}}" placeholder="Duta Cemara" type="text" name="address1" class="form-control @error('address1') is-invalid @enderror">
                @error('address1')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
            <div class="text-start text-wrap" style="width:40%; margin:auto; font-size:24px; padding-top:24px;">Address 2</div>
            <div class="text-start" style="width:40%; margin:auto; padding-top:12px;">
                <input style="font-size: 16px; width:100%; background-color:#F3F3F3;" value="{{old('address2')}}" placeholder="Blok X1" type="text" name="address2" class="form-control @error('address2') is-invalid @enderror">
                @error('address2')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
            <div class="text-start text-wrap" style="width:40%; margin:auto; font-size:24px; padding-top:24px;">Province</div>
            <div class="text-start" style="width:40%; margin:auto; padding-top:12px;">
                <input style="font-size: 16px; width:100%; background-color:#F3F3F3;" value="{{old('province')}}" placeholder="West Java" type="text" name="province" class="form-control @error('province') is-invalid @enderror">
                @error('province')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
            <div class="text-start text-wrap" style="width:40%; margin:auto; font-size:24px; padding-top:24px;">City</div>
            <div class="text-start" style="width:40%; margin:auto; padding-top:12px;">
                <input style="font-size: 16px; width:100%; background-color:#F3F3F3;" value="{{old('city')}}" placeholder="Bandung" type="text" name="city" class="form-control @error('city') is-invalid @enderror">
                @error('city')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
            <div class="text-start text-wrap" style="width:40%; margin:auto; font-size:24px; padding-top:24px;">Postal Code</div>
            <div class="text-start" style="width:40%; margin:auto; padding-top:12px;">
                <input style="font-size: 16px; width:100%; background-color:#F3F3F3;" value="{{old('postalcode')}}" placeholder="11111" type="text" name="postalcode" class="form-control @error('postalcode') is-invalid @enderror">
                @error('postalcode')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
            <div class="text-start" style="width:40%; margin:auto; padding-top:36px;">
                <button class="btn btn-primary text-center btn-outline-light" style="width:100%; color:#FFFFFF; background-color:#29A867;" type="submit">Sign In Now</button>
            </div>
        </form>
        <div class="text-start" style="width:40%; margin:auto; padding-top:24px;">
            <a class="btn btn-primary text-center btn-outline-light" href="#" role="button" style="width:100%; color:#F3F3F3; background-color:#BBBBBB;">Back to Sign In</a>
        </div>
        <div class="row text-center footer mt-4">
            <div class="col">
                <p>2021 Copyright Store. All Rights Reserved.</p>
            </div>
        </div>
      </body>
</html>
