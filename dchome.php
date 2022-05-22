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
    <title>DC | Home</title>

    <link rel="stylesheet" href="home.css"> 
<script>
    let currentSlide = 0;

    function moveSlide(direction) {
        currentSlide = modulo(currentSlide + direction,5);
        const slides = document.querySelectorAll(".slide");
        slides.forEach(slide => slide.style.display = "none");
        slides[currentSlide].style.display = "flex";
    }

    function modulo(num,mod) {
        return(num%mod + mod)%mod;
    }
</script>
</head>
<body>
    <div class="navbar">
        <div class="logo" style="margin-left: 26px;">
            <a href="home.php">
            <img src="cdnlogo.com_dc.png"></a>
        </div>
    <div class="content">
        <div class="character">
            <h1><a href="character_dc.php">CHARACTER</a></h1>
        </div>
        <div class="comic">
            <h1><a href="comics_dc.php">COMICS</a></h1>
        </div>
        <div class="movies">
            <h1><a href="movies_dc.php">MOVIES</a></h1>
        </div>
        <div class="shows">
            <h1><a href="shows_dc.php">TV SHOWS</a></h1>
        </div>
        <div class="games">
            <h1><a href="game_dc.php">GAMES</a></h1>
        </div>
        <div>
            <h1><a href="profile.php"><?php echo $user_data['full_name']; ?></a></h1>
        </div>
        </div>
    </div>
    <div class="main">
        <div class="slide">
            <a href="https://www.dccomics.com/blog/2022/05/06/mxy-things-up-with-the-super-pets-this-free-comic-book-day" target="_blank"><img id="img" src="https://www.dccomics.com/sites/default/files/MxyUp_marquee_62747a971b1b35.81972433.jpg"></a>
            <h1>Mxy Things Up with the Super-Pets this Free Comic Book Day</h1>
            <p>It’s fun from the fifth dimension—for free!</p>
        </div>

        <div class="slide">
            <a href="https://www.dccomics.com/blog/2022/02/16/peacemaker-scores-a-second-season" target="_blank"><img id="img" src="https://www.dccomics.com/sites/default/files/PeacemakerS2_marquee_620d75dd7999f4.98280661.jpg"></a>
            <h1>Peacemaker Scores a Second Season</h1>
            <p>Eight episodes just isn’t enough.</p>
        </div>

        <div class="slide">
            <a href="https://www.dccomics.com/blog/2022/05/10/lance-reddick-brings-thomas-wayne-to-life-in-batman-unburied" target="_blank"><img id="img" src="https://www.dccomics.com/sites/default/files/dc-hero_20220503_BatmanUnburied_627598fbd52018.76107430.jpg"></a>
            <h1>Lance Reddick Brings Thomas Wayne to Life in Batman Unburied</h1>
            <p>Batman Unburied is a new narrative podcast that takes the Dark Knight in a bold, unprecedented new direction.</p>
        </div>

        <div class="slide">
            <a href="https://www.dccomics.com/blog/2022/04/26/superman-loiss-alex-garfin-balances-heroism-and-high-school" target="_blank"><img id="img" src="https://www.dccomics.com/sites/default/files/AlexGarfinInt_marquee_62675d68d14602.54891860.jpg"></a>
            <h1>Superman & Lois</h1>
            <p>Superman & Lois's Alex Garfin Balances Heroism and High School</p>
        </div>

        <div class="slide">
            <a href="" target="_blank"><img id="img" src="https://www.dccomics.com/sites/default/files/KiteMan_marquee_6269c3625c9c80.27954710.jpg"></a>
            <h1>A New Kite Man Animated Series is Coming to HBO Max</h1>
            <p>HBO Max announced today that they’ve greenlit an all-new Harley Quinn spin-off series centered around Kite Man and his post-Ivy life</p>
        </div>

        <div class="prev" onclick="moveSlide(-1)" style="left: 20px;">&#10094</div>
        <div class="next" onclick="moveSlide(1)" style="right: 20px;">&#10095</div>
    </div>
</body>
</html>