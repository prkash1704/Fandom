<?php 
session_start();
include('connection.php');
include('fun.php');

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //posted
    $user_name = $_POST['uname'];
    $full_name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $dob = $_POST['age'];
    $gender = $_POST['gender'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        $db_urs_name = "select * from userdetails where user_name ='$user_name'";
        $db_email = "select * from userdetails where email = '$email'";
        $res_urs_name = mysqli_query($con,$db_urs_name);
        $res_email = mysqli_query($con,$db_email);

        if(mysqli_num_rows($res_urs_name) > 0)
        {
            echo "<script>alert('Username is already taken.');</script>";
        }
        elseif(mysqli_num_rows($res_email) > 0)
        {
            echo "<script>alert('Email is already taken.');</script>";
        }
        else
        {
            //save to database
            $user_id = random_num(20);
            $query = "insert into userdetails (user_id,user_name,full_name,email,password,dob,gender) values('$user_id','$user_name','$full_name','$email','$password','$dob','$gender')";

            mysqli_query($con,$query);

            header("Location: login.php");
            die;
        }
    }
    else
    {
        echo "Please enter some valid detail";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Account | Fandom</title>

    <style>
        body {
            box-sizing: border-box;
            overflow: hidden;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            margin: 0;
            
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
        input[type='name'],input[type='email'],input[type='password'],input[type='date'] {
            margin-top: 5px;
            border: 1px solid rgb(31, 30, 30);
            border-radius: 13px;
            width: 100%;
            height: 35px;
        }
        input[type='name'],input[type='email'],input[type='date'],button
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
            height: 5px;
        }
        .content h3 {
            margin-top: 20px;
            font-size: 30px;
            margin-right: 130px;
        }
        input[type='radio']
        {
            margin-top: 5px;
            margin-bottom: 20px;
        }
        button {
            font-weight: 600;
            margin-top: 5px;
            width: 100%;
            height: 35px;
            border-radius: 13px;
            cursor: pointer;
            text-align: center;
          }
        button[type='submit']
        {
            background-color: #FA005A;
            border: none;
        } 
        button[type='button']
        {
            background-color: transparent;
            text-align: center;
            border: 1px solid rgb(31, 30, 30);
        }
        button[type='button'] img {
            height: 15  px;
            width: 15px;
            position: relative;
            top: 2px; right: 2px;
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
        select {
            margin-top: 5px;
            margin-bottom: 10px;
        }
        form #fandom {
            height: 30px;
            width: 160px;
            border:  1px solid rgb(31, 30, 30);
            border-radius: 13px;
            text-align: center;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="logo">
            <img src="Fandom.png">
        </div>
        <div class="content">
            <h3>Sign up</h3>
        <form name="regform" action="" method="post">
            Username*
            <br>
            <input name="uname" type="name" placeholder="Enter your username" required minlength="8" maxlength="16" name="username" value="">
            <br>
            Name*
            <br>
            <input name="name" type="name" placeholder="Enter your username" required minlength="8" maxlength="16" name="username" value="">
            <br>
            Email*
            <br>
            <input type="email" placeholder="Enter your email" name="email" value="">
            <br>
            Password*
            <br>
            <input type="password" placeholder="Enter your password" required minlength="8" maxlength="32" name="password" value="">
            <p>Must be at least 8 character</p>
            Date Of Birth*
            <br>
            <input type="date"  name="age" value="" style="text-transform: uppercase;"><br>
            Gender*
            <br>
            <select id="fandom" name="gender">
                <option value="">Select Gender</option>
                <option value="male">MALE</option>
                <option value="female">FEMALE</option>
                <option value="other">OTHER</option>
            </select>
            <br>
            <button type="submit" value="submit">Create Your Account</button>
            <br>
            <h6>
            Alraedy have an account?
            <a href="login.php">Log in</a></h6>
        </form>
        </div>
    </div>
</body>
</html>