<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Balsamiq Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Atma' rel='stylesheet'>
    <title>Fahrschule</title>
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .navbar {
            display: flex;
            flex-direction: row;
            background-color: #b07b00;
            height: 100px;
            top: 0;
        }

        ul {
            display: flex;
            flex-direction: row;
            list-style-type: none;
            justify-content: space-evenly;
            align-items: center;
            vertical-align: middle;
        }
        
        li a {
            font-size: 30px;
            display: block;
            color: #ebebeb;
            text-align: center;
            text-decoration: none;
            font-family: 'Balsamiq Sans';
            transition: 0.5s;
            padding: 10px;
        }
        
        li a:hover {
            border-bottom: solid black 1px;
            color: black;
        }

        .active {
            font-size: 40px;
            color: black;
        }

        .left {
            float: left;
            width: 50%;
        }

        .right {
            display: flex;
            float: right;
            width: 50%;
            justify-content: flex-end;
            align-items: center;
        }

        .checkout-button {
            background-color: #b07b00;
            font-size: 30px;
            color: #ebebeb;
            font-family: 'Balsamiq Sans';
            margin-right: 20px;
            padding: 10px;
            border: none;
            transition: 0.5s;
        }

        .checkout-button:hover {
            border-bottom: solid black 1px;
            color: black;
            cursor: pointer;
        }

        .main-content {
            
        }

        .main-call-to-action {
            background-color: rgba(0, 0, 0, 1);
            text-align: center;
            box-shadow: 0px 100px 100px 0px rgb(50, 50, 50, 1);
        }

        .auto-img {
            width: 100%;
            height: 55rem;
            object-fit: cover;
            opacity: 0.3;
        }

        .fahrschule-logo-img {
            position: absolute;
            width: 50%;
            height: 20rem;
            left: 25%;
            top: 260px;
        }

        .main-call-to-action-button {
            position: absolute;
            font-size: 60px;
            display: block;
            color: #ebebeb;
            text-decoration: none;
            font-family: 'Amiko';
            top: 800px;
            transform: translate(-50%, 0);
            left: 50%;
            opacity: 0.5;
            transition: 0.3s;
        }

        .main-call-to-action-button:hover {
            opacity: 1;
        }

        .main-call-to-action-arrow-down {
            color: #b07b00;
        }

        .main-call-to-action-arrow-down:hover {
            text-shadow:1px 2px rgba(100, 100, 100, 0.5);
        }


        .ueber-uns {
            height: 1000px;
            margin: 15rem 20px 0px 20px;
        }

        .ueber-uns-heading {
            text-align: center;
        }

        .ueber-uns-heading p {
            color: #e6a100;
            font-size: 80px;
            font-family: 'Amiko';
            font-weight: 600;
        }

        .row {
            display: flex;
            flex-direction: row;
            margin-bottom: 7rem;
        }

        .ueber-uns-row-image-container {
            width: 40%;
            float: right;
        }

        .ueber-uns-row-image {
            height: 30rem;
            object-fit: cover;
            box-shadow: 0px 0px 30px 0px rgb(50, 50, 50, 1);
        }

        .ueber-uns-row-text-container {
            width: 55%;
            float: left;
            margin-right: 5%;
        }

        .ueber-uns-row-heading {
            padding: 0;
            margin: 0;
            font-weight: 400;
            font-size: 40px;
            font-family: 'Atma';
        }

        .ueber-uns-row-body {
            padding: 0;
            margin: 0;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="left">
            <ul>
                <li><a class="active" href="./">Home</a></li>
                <li><a href="./ausbildungsklassen.html">Ausbildungsklassen</a></li>
                <li><a href="./angebote.html">Angebote</a></li>
                <li><a href="./kontakt.html">Kontakt</a></li>
            </ul>
        </div>
        <div class="right">
            <a class="checkout-button">Checkout <i class="fa fa-shopping-cart"></i></a>
        </div>
    </div>

    <div class="main-content">
        <div class="main-call-to-action">
            <img src="./img/auto.jpg" class="auto-img" alt="">
            <img src="./img/fahrschule-logo.png" class="fahrschule-logo-img" alt="">
            <a href="#ueber-uns" class="main-call-to-action-button">Über uns<br><i class="fa fa-arrow-down main-call-to-action-arrow-down"></i></a>
        </div>
        <div class="ueber-uns" id="ueber-uns">
            <div class="ueber-uns-heading">
                <p class="">Wer sind wir?</p>
            </div>
            <div class="row">
                <div class="ueber-uns-row-text-container">
                    <p class="ueber-uns-row-heading">Lorem ipsum dolor</p><hr>
                    <p class="ueber-uns-row-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio et rem molestiae quaerat tempore fugit quod accusamus sequi perspiciatis ullam qui ipsa officiis excepturi, rerum eos cupiditate dolores doloribus nobis.</p>
                </div>
                <div class="ueber-uns-row-image-container">
                    <img class="ueber-uns-row-image" src="./img/auto.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="ueber-uns-row-image-container">
                    <img class="ueber-uns-row-image" src="./img/auto.jpg" alt="">
                </div>
                <div class="ueber-uns-row-text-container">
                    <p class="ueber-uns-row-heading">Lorem ipsum dolor</p><hr>
                    <p class="ueber-uns-row-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio et rem molestiae quaerat tempore fugit quod accusamus sequi perspiciatis ullam qui ipsa officiis excepturi, rerum eos cupiditate dolores doloribus nobis.</p>
                </div>
            </div>
            <div class="row">
                <div class="ueber-uns-row-text-container">
                    <p class="ueber-uns-row-heading">Lorem ipsum dolor</p><hr>
                    <p class="ueber-uns-row-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio et rem molestiae quaerat tempore fugit quod accusamus sequi perspiciatis ullam qui ipsa officiis excepturi, rerum eos cupiditate dolores doloribus nobis.</p>
                </div>
                <div class="ueber-uns-row-image-container">
                    <img class="ueber-uns-row-image" src="./img/auto.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</body>
</html>