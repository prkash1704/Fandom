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
    <title>Game | Marvel</title>
    <link rel="stylesheet" href="game.css">
    <script>
        window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.backgroundColor = "black";
  } else {
    document.getElementById("navbar").style.backgroundColor = "transparent";
  }
}
    </script>
</head>
<body style="background: linear-gradient(#B8265D,#A40808);">
    <div id ="navbar">
        <div class="logo">
            <a href="marvel_home.php">
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
            <h1 class="active"><a href="game_marvel.php">GAMES</a></h1>
        </div>
        <div>
            <h1><a href="profile.php"><?php echo $user_data['full_name']; ?></a></h1>
        </div>
        </div>
    </div>

    <div class="gameHome">
        <div class="game_Details">
            <section class="poster" style="background: linear-gradient(#B8265D,#A40808);">
                <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/midnightsons_lob_crd_02.jpg" alt="">
                <p id="title">Marvel's Midnight Suns</p>
            </section>
            <p id="logo"><img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/midnightsuns_lob_log_def_02.png" alt=""></p>
            <p id="about">A new tactical RPG set in the darker
                 side of the Marvel Universe, 'Marvel's Midnight
                  Suns' brings players face-to-face against 
                  supernatural forces as they team up with and 
                  live among the Midnight Suns, Earth's last
                   line of defense against the underworld.
                </p>
            <p id="dvelopr">DEVELOPERS<br>Firaxis Games & 2K</p>
            <a href="https://store.steampowered.com/app/368260/Marvels_Midnight_Suns/" target="_blank"><p id="buy"><button>Buy Now</button></p></a>
        </div>
        <div class="game_Details">
            <section class="poster" style="background: linear-gradient(#B8265D,#A40808);">
                <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/marvelsguardiansofthegalaxy_lob_crd_02.jpg" alt="">
                <p id="title">Marvel's Guardians of the Galaxy</p>
            </section>
            <p id="logo"><img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/marvelsguardiansofthegalaxy_lob_log_def_01.png" alt=""></p>
            <p id="about">Fire up Star-Lord’s jet boots
                 for a wild ride across the cosmos in this
                 third-person action-adventure game, a fresh
                 take on Marvel’s Guardians of the Galaxy. With
                 the unpredictable Guardians at your side, blast
                 your way from one explosive situation to another,
                  with original and iconic Marvel characters
                  caught in a struggle for the fate of the universe. You got this. Probably.</p>
            <p id="dvelopr">DEVELOPER<br>Eidos-Montréal</p>
            <a href="https://store.steampowered.com/app/1088850/Marvels_Guardians_of_the_Galaxy/" target="_blank"><p id="buy"><button>Buy Now</button></p></a>
        </div>
        <div class="game_Details">
            <section class="poster" style="background: linear-gradient(#B8265D,#A40808);">
                <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/msmmm_lob_crd_02.jpg" alt="">
                <p id="title">Marvel's Spider-Man: Miles Morales</p>
            </section>
            <p id="logo"><img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/poptart_lob_log_def_01.png" alt=""></p>
            <p id="about">The latest adventure in the Spider-Man universe will build on and expand ‘Marvel’s Spider-Man’ through an all-new story. Players will experience the rise of Miles Morales as he masters new powers to become his own Spider-Man.</p>
            <p id="dvelopr">DEVELOPER<br>Insomniac Games</p>
            <a href="https://www.croma.com/sony-marvel-s-spider-man-miles-morales-for-ps5-action-adventure-games-standard-edition-ppsa-01341-/p/231651?utm_source=google&utm_medium=ps&utm_campaign=Sok_Pmax_Gaming&gclid=Cj0KCQjw1ZeUBhDyARIsAOzAqQK5uaODhdCC45YhkySlJM7OxPtgv0TSx_x2YM_8mbdT3lO3gMZncZAaAvkKEALw_wcB" target="_blank"><p id="buy"><button>Buy Now</button></p></a>
        </div>
    </div>
</body>
</html>