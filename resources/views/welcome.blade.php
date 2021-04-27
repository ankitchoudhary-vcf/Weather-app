<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Weather App</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900");
        @import url("https://cdn.linearicons.com/free/1.0.0/icon-font.min.css");

        body {
            font-family: 'Montserrat', sans-serif;
            background: #112233;
        }

        .weather-card {
            margin: 60px auto;
            height: 740px;
            width: 450px;
            background: #fff;
            box-shadow: 0 1px 38px rgba(0, 0, 0, 0.15), 0 5px 12px rgba(0, 0, 0, 0.25);
            overflow: hidden;
        }

        .weather-card .top {
            position: relative;
            height: 570px;
            width: 100%;
            overflow: hidden;
            background: url("https://s-media-cache-ak0.pinimg.com/564x/cf/1e/c4/cf1ec4b0c96e59657a46867a91bb0d1e.jpg") no-repeat;
            background-size: cover;
            background-position: center center;
            text-align: center;
        }

        .weather-card .top .wrapper {
            padding: 30px;
            position: relative;
            z-index: 1;
        }

        .weather-card .top .wrapper .mynav {
            height: 20px;
        }

        .weather-card .top .wrapper .mynav .lnr {
            color: #fff;
            font-size: 20px;
        }

        .weather-card .top .wrapper .mynav .lnr-chevron-left {
            display: inline-block;
            float: left;
        }

        .weather-card .top .wrapper .mynav .lnr-cog {
            display: inline-block;
            float: right;
        }

        .weather-card .top .wrapper .heading {
            margin-top: 20px;
            font-size: 35px;
            font-weight: 400;
            color: #fff;
        }

        .weather-card .top .wrapper .location {
            margin-top: 20px;
            font-size: 21px;
            font-weight: 400;
            color: #fff;
        }

        .weather-card .top .wrapper .temp {
            margin-top: 20px;
        }

        .weather-card .top .wrapper .temp a {
            text-decoration: none;
            color: #fff;
        }

        .weather-card .top .wrapper .temp a .temp-type {
            font-size: 85px;
        }

        .weather-card .top .wrapper .temp .temp-value {
            display: inline-block;
            font-size: 85px;
            font-weight: 600;
            color: #fff;
        }

        .weather-card .top .wrapper .temp .deg {
            display: inline-block;
            font-size: 35px;
            font-weight: 600;
            color: #fff;
            vertical-align: top;
            margin-top: 10px;
        }

        .weather-card .top:after {
            content: "";
            height: 100%;
            width: 100%;
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.5);
        }

        .weather-card .bottom {
            padding: 0 30px;
            background: #fff;
        }

        .weather-card .bottom .wrapper .forecast {
            overflow: hidden;
            margin: 0;
            font-size: 0;
            padding: 0;
            padding-top: 20px;
            max-height: 155px;
        }

        .weather-card .bottom .wrapper .forecast a {
            text-decoration: none;
            color: #000;
        }

        .weather-card .bottom .wrapper .forecast .go-up {
            text-align: center;
            display: block;
            font-size: 25px;
            margin-bottom: 10px;
        }

        .weather-card .bottom .wrapper .forecast li {
            display: block;
            font-size: 25px;
            font-weight: 400;
            color: rgba(0, 0, 0, 0.25);
            line-height: 1em;
            margin-bottom: 30px;
        }

        .weather-card .bottom .wrapper .forecast li .date {
            display: inline-block;
        }

        .weather-card .bottom .wrapper .forecast li .condition {
            display: inline-block;
            vertical-align: middle;
            float: right;
            font-size: 25px;
        }

        .weather-card .bottom .wrapper .forecast li .condition .temp {
            display: inline-block;
            vertical-align: top;
            font-family: 'Montserrat', sans-serif;
            font-size: 20px;
            font-weight: 400;
            padding-top: 2px;
        }

        .weather-card .bottom .wrapper .forecast li .condition .temp .deg {
            display: inline-block;
            font-size: 10px;
            font-weight: 600;
            margin-left: 3px;
            vertical-align: top;
        }

        .weather-card .bottom .wrapper .forecast li .condition .temp .temp-type {
            font-size: 20px;
        }

        .weather-card .bottom .wrapper .forecast li.active {
            color: rgba(0, 0, 0, 0.8);
        }

        .weather-card.rain .top {
            background: url("http://img.freepik.com/free-vector/girl-with-umbrella_1325-5.jpg?size=338&ext=jpg") no-repeat;
            background-size: cover;
            background-position: center center;
        }
    </style>
</head>

<body class="bg-primary">

    <div class="text-white mb-8">
        <div class="places-input col-10 m-4 col-sm-10">
            <input type="search" id="address" class="form-control" placeholder="Choose a city..." />

            <p>Selected: <strong id="address-value">none</strong></p>
        </div>

        <div class="row">
            <div class="col">
                <div class="weather-card one">
                    <div class="top">
                        <div class="wrapper">
                            <div class="mynav">
                                <a href="javascript:;"><span class="lnr lnr-chevron-left"></span></a>
                                <a href="javascript:;"><span class="lnr lnr-cog"></span></a>
                            </div>
                            <h1 class="heading">Clear night</h1>
                            <h3 class="location">Dhaka, Bangladesh</h3>
                            <p class="temp">
                                <span class="temp-value">20</span>
                                <span class="deg">0</span>
                                <a href="javascript:;"><span class="temp-type">C</span></a>
                            </p>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="wrapper">
                            <ul class="forecast">
                                <a href="javascript:;"><span class="lnr lnr-chevron-up go-up"></span></a>
                                <li class="active">
                                    <span class="date">Yesterday</span>
                                    <span class="lnr lnr-sun condition">
                                        <span class="temp">23<span class="deg">0</span><span class="temp-type">C</span></span>
                                    </span>
                                </li>
                                <li>
                                    <span class="date">Tomorrow</span>
                                    <span class="lnr lnr-cloud condition">
                                        <span class="temp">21<span class="deg">0</span><span class="temp-type">C</span></span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="weather-card rain">
                    <div class="top">
                        <div class="wrapper">
                            <div class="mynav">
                                <a href="javascript:;"><span class="lnr lnr-chevron-left"></span></a>
                                <a href="javascript:;"><span class="lnr lnr-cog"></span></a>
                            </div>
                            <h1 class="heading">Rainy day</h1>
                            <h3 class="location">Sylhet, Bangladesh</h3>
                            <p class="temp">
                                <span class="temp-value">16</span>
                                <span class="deg">0</span>
                                <a href="javascript:;"><span class="temp-type">C</span></a>
                            </p>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="wrapper">
                            <ul class="forecast">
                                <a href="javascript:;"><span class="lnr lnr-chevron-up go-up"></span></a>
                                <li class="active">
                                    <span class="date">Yesterday</span>
                                    <span class="lnr lnr-sun condition">
                                        <span class="temp">22<span class="deg">0</span><span class="temp-type">C</span></span>
                                    </span>
                                </li>
                                <li>
                                    <span class="date">Tomorrow</span>
                                    <span class="lnr lnr-cloud condition">
                                        <span class="temp">18<span class="deg">0</span><span class="temp-type">C</span></span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>