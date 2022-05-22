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
    <title>Profile | Fandom</title>
    <style>
body {
  background-color: #0c2231;
  height: 100vh;
  position: relative;
}

.wrapper {
  position: absolute;
  top: 50%;
  left: 10%;
  transform: translateY(-50%);
}

.text {
  font-family: "Exo", sans-serif;
  color: #eff8f3;
  text-transform: uppercase;
  font-size: 15vmin;
  letter-spacing: 2px;
  margin: 30px 0 0 30px;
  animation: animate 0.6s cubic-bezier(0.2, 0.6, 0.2, 1);
  animation-fill-mode: backwards;
}

.animate-delay-3 {
  animation-delay: 0.3s;
}

.animate-delay-6 {
  animation-delay: 0.6s;
}

@keyframes animate {
  0% {
    opacity: 0;
    transform: translateY(30vh);
  }

  100% {
    opacity: 1;
    transform: translateY(0%);
  }
}
.btn {
    position: absolute;
    top: -120px;
}

a {
			padding: 15px 20px;
			font: 13px 'Montserrat', sans-serif;
			font-weight: 700;
			letter-spacing: 2px;
			text-transform: uppercase;
			text-decoration: none;
			text-align: center;
			margin: 1em;
		}

		a:hover {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.20), 0 6px 20px 0 rgba(0, 0, 0, 0.20);
		}
	
	@media (min-width: 417px) and (max-width: 567px) {
		a {
			padding: 15px 30px;
			font: 16px 'Montserrat', sans-serif;
		}
	}
    
.button3 {
	color: white;
  background: linear-gradient(to right, #8041F2 ,#3095ED );
	border-radius: 8px;
	transition: .2s ease-in-out;
}

.button3:hover {
	border-radius: 30px;
}

    </style>
</head>
<body>
<div class="wrapper">
  <div class="wrapper__text">
    <h2 class="text">Hello</h2>
  </div>
  <div class="wrapper__text">
    <h2 class="text text--highlight animate-delay-3" style="color: #398557;"><?php echo $user_data['full_name']; ?></h2>
  </div>
  <div class="btn">
  <a href="logout.php" class="button3" >Log Out</a>
  <a href="home.php" class="button3" >Home</a>
  </div>
</div>
</body>
</html>