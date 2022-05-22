<?php
session_start();
include('connection.php');
include('fun.php');

$user_data = checkLogin($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Fandom </title>
    <style>
        @media screen and (min-width:1024px) {
        *{
            margin: auto;
            padding: auto;
            box-sizing: border-box;
            overflow-x: hidden;
        }
        .content {
            height:100vh;
            background: linear-gradient(to left,#1492E6,#0E5380,#080808);
            display: flex;
            justify-content: center;
        }
        #img1 {
            height: 130px;
            transition : 0.2s ease-in-out;
        }
        #img1:hover {
            height: 250px;
            filter: drop-shadow(2px 4px 4px black);
        }
        #img2 {
            height: 80px;
            transition : 0.2s ease-in-out;
        }
        #img2:hover {
            height: 150px;
        }
        #logo{
            height: 250px;
            transition : 0.2s ease-in-out;
        }
        .logoTag:hover #logo{
            height: 400px;
        }
        .logoTag:hover p {
            font-size: 24px;
            top: -120px;
        }
        p {
            position: relative;
            font-size: 18px; color: white; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: 500;
            text-align: center;
            top: -80px;
            transition : 0.2s ease-in-out;
        }
    }
    </style>
</head>
<body>
    <div class="content">
    <a href="intro2.php">
        <img id="img1" src="cdnlogo.com_dc.png">
    </a>
    <div class="logoTag">
        <a href="profile.php">
        <img id="logo" src="Fandom.png">
        </a>
        <p>CHOOSE YOUR TEAM.</p>
    </div>
    <a href="intro.php">
        <img id="img2" src="Daco_249605.png">
    </a>
    </div>
</body>
</html>