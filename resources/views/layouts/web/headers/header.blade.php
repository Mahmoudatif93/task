<!DOCTYPE html>
<html lang="en" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>task</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnec    t" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="{{ asset('web_files/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('web_files/scss/custom.css') }}">

    <link rel="stylesheet" href="{{ asset('web_files/css/slick.css') }} ">

    <style>
        .navbar-nav {
            margin-left: auto;
        }

        .nav-link {
            color: #80ADD5;
            font-size: 20px;
            transition: .3s;
            margin-left: 31px;
        }

        .nav-link:hover {
            color: #015CAB;
        }

        ul.navbar-nav {
            align-items: baseline;
        }

        a#menu {
            display: flex;
            align-items: flex-start;
        }






        span.count {
            position: absolute;
            top: -7px;
            right: 50px;
            font-size: 14px;
            background: #015CAB;
            border-radius: 50%;
            width: 19px;
            height: 19px;
            color: white;
            align-items: center;
            display: flex;
            justify-content: center;
        }


        li.menu-area {
            position: relative;
        }

        .menu {
            cursor: pointer;
            display: flex;
            align-items: center;
        }

*/
        .item {
            align-items: center;
        }

        .item-details {
            display: flex;
        }

        .info {
            text-align: left;
            margin-top: 10px;
        }

        .info h4 {
            font-weight: 600;
            font-size: 20px;
        }

        .info p {
            padding-top: 5px;
            font-size: 20px;
        }


        .total {
            display: flex;
            align-items: center;
            border-top: 1px solid #80add5;
            padding-top: 15px;
            margin-top: 15px;
        }

        .price {
            display: flex;
            align-items: center;
            font-size: 20px;
        }

        .price span {
            color: #80add5;
        }

        .price p {
            color: #015CAB;
            padding-left: 10px;
            font-weight: 600;
        }


        .view-btn {
            background: #015CAB;
            padding: 15px;
            width: 100px;
            margin-left: auto;
            border-radius: 5px;
        }

        .view-btn a {
            color: white;
        }


        .show-dropdown-menu {
            opacity: 1;
            transition: 0.5s all ease;
        }


        .navbar-dark .navbar-toggler {
            background-color: #015CAB;
            margin-left: auto;
            margin-right: 15px;
        }


        .navbar-collapse .navbar-nav .nav-item {
            margin-bottom: 15px;
        }


        /*search*/
        .input-icons i {
            position: absolute;
        }

        .input-icons {
            width: 100%;
            margin-bottom: 10px;
        }

        .icon {
            padding: 32px;
            min-width: 40px;
            color: #a9a7a7;

        }

        .input-field {
            width: 645px;
            padding:36px;
            background-color: #F7F7F2;
            height: 50px;
            text-indent: 31px;
            border: 0;
            margin-left: 10px;

        }


    </style>
</head>

<body>
    <div class="topbar">
        <div class="container">
            <div class="social">

                <a href="{{ route('fakka.index') }}">
                    <figure>
                        <img style="width: 150px;" src="{{ asset('web_files/images/logo.png') }}" alt="">
                    </figure>
                </a>

                <li class="nav-item dropdown">
                    <a style="color: black" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Explore
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>

                  <div style="max-width:400px;margin:auto">
                    <div class="input-icons">
                        <i  class="fa fa-search icon"></i>
                        <input   class="input-field" id="search" type="text" placeholder="Search By Name/ Category">
                    </div>
              </div>



            </div>
            <div class="right-side">
                <div class="language">

                </div>
                <div class="row col-md-12" >
<div class="col-md-4">

    <a  style="font-size: 30px;color:black ;text-decoration:none;display : inline;word-break: break-word;" href="">
        Join  <span style="color:rgb(199, 196, 196) ">|</span>
      </a>

    </div>

    <div class="col-md-4">


          <a style="font-size: 30px;color:black;text-decoration:none;" href="">
            Login
         </a>
        </div>

<div class="col-md-4">
    <button type="button" style="width:155px"class="btn btn-success">Sign Up</button>
</div>






                </div>


                <div style="padding-left: 25px;font-size: 20px;font-weight: 700;">
                    <!--  <h1>  @if(Auth::guard('website')->check() ==1) {{Auth::guard('website')->user()->first_name}}</h1>@endif-->
                </div>
            </div>
        </div>
    </div>
    <header>


    </header>


    <script>



    </script>
