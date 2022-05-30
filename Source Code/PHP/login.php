<?php
session_start();
include('connection.php');
include('fun.php');

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //posted
    $user_name = $_POST['uname'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        //read to database
        $query = "select * from userdetails where user_name = '$user_name' limit 1";
        $res = mysqli_query($con,$query);

        if($res)
        {
            if($res && mysqli_num_rows($res) > 0)
            {
                $user_data = mysqli_fetch_assoc($res);
                
                if($user_data['user_name'] === $user_name)
                {
                    if($user_data['password'] === $password)
                    {
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: profile.php");
                        die;
                    }
                    else
                    {
                        echo "<script>alert('Enter Valid Password');</script>";   
                    }
                }
                else
                {
                    echo "<script>alert('Username Doesn't Exists.');</script>";
                }
            }
            else
            {
                echo "<script>alert('Username Doesn't Exists.');</script>";
            }
            
        }
        echo "<script>alert('Username Doesn't Exists.');</script>";
    }
    else
    {
        echo "<script>alert('Enter Some Valid Detail.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in | Fandom</title>

    <style>
        body {
            box-sizing: border-box;
            overflow-x: hidden;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            margin: 0;
            padding: 0;
            
        }
        .main {
            display: flex;
            justify-content: center;
        }
        .logo img{
            height: 300px;
            margin-top: 150px;
        }
        .content {
            text-align: center;
            width: 750px;
            height: 100%;
        }
        form {
            position: relative;
            text-align: left;
            height: 100%;
            margin-left: 35%;
        }
        .content form input {
            padding-left: 15px;
        }
        input[type='name'],input[type='password'] {
            margin-top: 5px;
            border: 1px solid rgb(31, 30, 30);
            border-radius: 13px;
            width: 100%;
            height: 35px;
        }
        input[type='name'],input[type='email'],button
        {
            margin-bottom: 10px;
        }
        input::placeholder {
            font-size: 12px;
        }
        form p 
        {
            position: relative;
            font-size: 10px;
            padding-left: 10px;
            top: -8px;
        }
        .content h3 {
            margin-top: 100px;
            font-size: 30px;
            margin-right: 130px;
        }
        input[type='radio']
        {
            margin-top: 5px;
            margin-bottom: 20px;
        }
        button,#reg {
            font-weight: 600;
            margin-top: 5px;
            width: 104%;
            border-radius: 13px;
            cursor: pointer;
            text-align: center;
          }
        button[type='submit']
        {
            background-color: #FA005A;
            border: none;
            margin-top: -20px;
        } 
        button[type='button']
        {
            background-color: transparent;
            text-align: center;
            border: 1px solid rgb(31, 30, 30);
        }
        #reg {
            padding-top: 8px;
            height: 26px;
            font-weight: 500; font-size: 14px;
            background-color: #FA005A;
        }
        form h6 {
            position: relative;
            text-align: center;
            top: -32px;
            font-size: 12px;
        }
        form h6 a {
            text-decoration: none;
            color:#FA005A;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="logo">
            <img src="Fandom.png">
        </div>
        <div class="content" style="margin-top: 60px;">
            <h3>Log in</h3>
        <form action="" method="post">
            Username*
            <br>
            <input type="name" placeholder="Enter your username" name="uname">
            <br>
            Password*
            <br>
            <input type="password" placeholder="Enter your password" name="password">
            <p>Must be at least 8 character</p>
            <br>
            <button type="submit" value="" style="height: 35px;">Log in</button>
            <h6>
            Don't have an account?
            <a href="register.php">Sign Up</a></h6>
        </form>
        </div>
    </div>
</body>
</html>