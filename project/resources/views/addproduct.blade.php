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
        <nav class="navbar navbar-expand d-flex flex-column align-item-start" id="sidebar">
            <a class="navbar-brand text-light mt-5">
                <img src="{{asset('img/logo.png')}}" alt="" width="79" height="95" class="d-inline-block align-text-top logoadmin">
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
                    <img src="{{asset('img/Group 38.png')}}" alt="" width="16" height="16" class="d-inline-block align-text-top">
                </li>
            </ul>
        </nav>
            <h1 class="dashboard" style="color:#0C0D36; font: size 24px; margin-top: 34px;">Create New Product</h1>
            <p class="dashboard" style="color:#9191A9; font: size 16px; margin-top: 6px;">Create your own product</p>
            <form method="post" action="/addproduct" enctype="multipart/form-data">
            @csrf
            <div class="card-add" style="margin-left: 290px; margin-right:65px; padding-bottom:34px;">
            <ul class="list-group">
                <li class="list-group-item" style="display:flex;">
                    <div class="p-2 flex-fill bd-highlight" style="margin-top:36px; margin-left:38px; width:40%;">
                        Product Name
                    </div>
                    <div class="p-2 flex-fill bd-highlight" style="margin-top:36px; margin-left:26px">
                        Price
                    </div>
                </li>
                <li class="list-group-item" style="display:flex;">
                    <div class="p-2 flex-fill bd-highlight" style="margin-left:38px; width:40%;">
                        <input type="text" class="form-control" id="" name="productname" style="width:100%;">
                        @error('productname')
                            <div class="invalid-feedback"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="p-2 flex-fill bd-highlight" style="margin-left:26px; width:50%">
                        <input type="number" class="form-control" id="" name="price" placeholder="150000" style="width:100%">
                        @error('price')
                            <div class="invalid-feedback"> {{ $message }}</div>
                        @enderror
                    </div>
                </li>
                <li class="list-group-item" style="margin-top:19px; margin-left:38px; list-style-type : none;">
                    Category
                </li>
                <li class="list-group-item" style="margin-left:38px;  margin-right:39px; list-style-type : none;">
                    <select class="form-select" name="category" style="width:100%; padding-top:10px; padding-bottom:10px; background-color:#F3F3F3; border: 6px solid transparent; border-radius: 8px;">
                        <option selected style="border: 6px solid transparent; border-radius: 8px;" >Select Product Category</option>
                        <option >Offline</option>
                        <option >Online</option>
                    </select>
                </li>
                <li class="list-group-item" style="margin-top:19px; margin-left:38px;  margin-right:39px; list-style-type : none;">
                    Description
                </li>
                <li class="list-group-item" style="margin-left:38px;  margin-right:55px; list-style-type : none;">
                    <textarea class="form-control" name="description" rows="10" style="width:100%; padding-top:10px; padding-bottom:10px; background-color:#F3F3F3; border: 6px solid transparent; border-radius: 8px;"></textarea>
                </li>
                <li class="list-group-item" style="margin-top:19px; margin-left:38px;  margin-right:55px; list-style-type : none;">
                    Photo Product
                </li>
                <li class="list-group-item" style="margin-left:38px;  margin-right:55px; list-style-type : none;">
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="image" style="width:75%;" name="image">
                        <label class="input-group-text" for="image" style="background-color:#BBBBBB; padding:10px 36px 10px 36px; border-radius:8px;">Upload</label>
                    </div>
                </li>
            </ul>
            </div>
            <div class="text-start dashboard" style="width:80%; margin-top:24px; margin-bottom:35px;">
                <button class="btn btn-primary text-center btn-outline-light" style="width:100%; color:#FFFFFF; background-color:#29A867; padding-top:10px; padding-bottom:10px; font-size:16px; border-radius:8px;" type="submit">Create Product</button>
            </div>
            </form>
    </body>
</html>
