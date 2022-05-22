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
    <title>Marvel | Home</title>

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
        <div class="logo">
            <a href="home.php">
            <img src="marvel-logo-34283.png"></a>
        </div>
    <div class="content">
        <div class="character">
            <h1><a href="character_marvel.php">CHARACTER</a></h1>
        </div>
        <div class="comic">
            <h1><a href="comics_marvel.php">COMICS</a></h1>
        </div>
        <div class="movies">
            <h1><a href="movies_marvel.php">MOVIES</a></h1>
        </div>
        <div class="shows">
            <h1><a href="shows_marvel.php">TV SHOWS</a></h1>
        </div>
        <div class="games">
            <h1><a href="game_marvel.php">GAMES</a></h1>
        </div>
        <div>
            <h1><a href="profile.php"><?php echo $user_data['full_name']; ?></a></h1>
        </div>
        </div>
    </div>
    <div class="main">
        <div class="slide">
            <a href="https://www.marvel.com/articles/culture-lifestyle/asked-answered-women-of-marvel-xochitl-gomez" target="_blank"><img id="img" src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/askedandanswered-tw-1920x1080-xoch.jpg"></a>
            <h1>CULTURE & LIFESTYLE</h1>
            <p>'Asked & Answered with the Women of Marvel': Xochitl Gomez</p>
        </div>
        <div class="slide">
            <a href="https://www.marvel.com/articles/comics/patsy-walker-from-romance-comic-star-to-super-hero" target="_blank"><img id="img" src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/hellcat_2.jpg"></a>
            <h1>COMICS</h1>
            <p>Patsy Walker: From Romance Comic Star to Super Hero</p>
        </div>
        <div class="slide">
            <a href="https://www.marvel.com/articles/movies/doctor-strange-multiverse-of-madness-direct-sequel-to-multiple-marvel-properties" target="_blank"><img id="img" src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/_mom_card.jpg"></a>
             <h1>MOVIES</h1>
             <p>The Daunting Task of ‘Doctor Strange in the Multiverse of Madness’ as the Direct Sequel to Multiple Marvel Properties</p>
         </div>
        <div class="slide">
            <a href="https://www.marvel.com/articles/tv-shows/moon-knight-visual-development-mr-knight" target="_blank"><img id="img" src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/moon_knight_7.png"></a>
            <h1>TV SHOWS</h1>
            <p>‘Moon Knight’: How The Visual Development Team Brought Moon Knight and Mr. Knight to Life</p>
        </div>
        <div class="slide">
            <a href="https://www.marvel.com/articles/games/marvel-contest-of-champions-wong-rintrah" target="_blank"><img id="img" src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/mcoc_card.jpg"></a>
            <h1>GAMES</h1>
            <p>Marvel Contest of Champions Reveals Wong and Rintrah</p>
        </div>

        <div class="prev" onclick="moveSlide(-1)" style="left: 160px;">&#10094</div>
        <div class="next" onclick="moveSlide(1)" style="right: 160px;">&#10095</div>
    </div>
</body>
</html>