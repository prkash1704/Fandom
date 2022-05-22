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
    <meta http-equiv="refresh" content="35; marvel_home.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        .section {
            transform: translateY(-13%);
            position: relative;
            width: 105%; height: auto;
            display: flex;
            justify-content: center;
        }
        button {
            position: absolute;
            bottom: 80px; right: 80px;
            width: 100px; height: 30px;
            font-size: 14px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            border-radius: 8px;
            border: transparent;
            background-color: gray;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="section">
        <video autoplay loop muted>
            <source src="X2Download.com-Marvel%20Intro%20_%204k%2060FPS-(1080p60).mp4" type="video/mp4">
        </video>
    </div>
    <a href="marvel_home.php"><button>Skip</button></a>
</body>
</html>