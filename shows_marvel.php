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
    <title>TV Shows | Marvel</title>
    <link rel="stylesheet" href="shows.css">
    <script>
        window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
    document.getElementById("navbar").style.backgroundColor = "black";
  } else {
    document.getElementById("navbar").style.backgroundColor = "transparent";
  }
}
    </script>
</head>
<body style="background: linear-gradient(#8EC7C6,#150C21); background-repeat: no-repeat;">
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
            <h1 class="active"><a href="shows_marvel.php">TV SHOWS</a></h1>
        </div>
        <div class="games">
            <h1><a href="game_marvel.php">GAMES</a></h1>
        </div>
        <div>
            <h1><a href="profile.php"><?php echo $user_data['full_name']; ?></a></h1>
        </div>
        </div>
    </div>

    <div class="part1">
        <div class="sec1">
            <p class="headline">MOON KNIGHT</p>
            <img class="imdblogo" src="imdb-logo-transparent.png" alt="">
            <p id="rating">7.7/10</p>
            <section class="content">
                <img src="kkyoasz1sfc81.png" alt="" class="poster">
                <h1>MOON KNIGHT</h1>
                <p id="line2">18+ | 2022 | Season 1</p>
                <p id="gerne">Action |  Fantasy | Psychological Horror</p>
                <p id="story">The Story</p>
                <p id="description">Moon Knight follows Steven Grant, a mild-mannered<br>
                    gift-shop employee, who becomes plagued with<br>
                    blackouts and memories of another life.Steven<br>
                    discovers he has dissociative identity disorder <br>
                    and shares a body with mercenary Marc Spector.</p>
                <a href="https://soap2day.ac/TczozMjoiMzk5M3x8MTA0LjIwMC4xMjkuODh8fDE2NTMwNzcwNTEiOw.html" target="__blank"><button>Watch Now</button></a>
            </section>
        </div>
        <div class="sec2">
            <div>
            <p id="poster"><img src="wallpapersden.com_poster-of-hawkeye-4k_1366x768.png" alt=""></p>
            <p id="title">HAWKEYE</p>
            <p id="rate">7.7/10</p>
            <p id="imdb"><img src="imdb-logo-transparent.png" alt=""></p>
            <a href="https://soap2day.ac/TczozMjoiMzgyM3x8MTA0LjIwMC4xMjkuODh8fDE2NTMwNzcwNzQiOw.html" target="__blank"><button>Watch Now</button></a>
            <p id="Season">S01</p>
            <p id="episode">E06</p>
            </div>
            <div>
                <p id="poster"><img src="wallpapersden.com_76652-1366x768.png" alt=""></p>
                <p id="title">THE FALCON AND THE WINTER SOLDIER</p>
                <p id="rate">7.3/10</p>
                <p id="imdb"><img src="imdb-logo-transparent.png" alt=""></p>
                <a href="https://soap2day.ac/TczozMjoiMzI1N3x8MTA0LjIwMC4xMjkuODh8fDE2NTMwNzcxMTUiOw.html" target="__blank"><button>Watch Now</button></a>
                <p id="Season">S01</p>
                <p id="episode">E06</p>
            </div>
            <div>
                <p id="poster"><img src="36CTFM2xq3qpfaHVh960McO0etL.png" alt=""></p>
                <p id="title">LOKI</p>
                <p id="rate">8.3/10</p>
                <p id="imdb"><img src="imdb-logo-transparent.png" alt=""></p>
                <a href="https://soap2day.ac/TczozMjoiMzU0OHx8MTA0LjIwMC4xMjkuODh8fDE2NTMwNzcxMzUiOw.html" target="__blank"><button>Watch Now</button></a>
                <p id="Season">S01</p>
                <p id="episode">E06</p>
            </div>
        </div>
    </div>
    <div class="showss">
        <h1>Shows</h1>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/legends_lob_crd_01.jpg" alt="">
            <p id="title">Marvel Studios: Legends</p>
            <p id="year">2021</p>
            <a href="https://soap2day.ac/TczozMjoiMzAzMnx8MTA0LjIwMC4xMjkuODh8fDE2NTMwNzcxNTkiOw.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/wandavision_lob_crd_06.jpg" alt="">
            <p id="title">WandaVision</p>
            <p id="year">2021</p>
            <a href="https://soap2day.ac/TczozMjoiMzA0N3x8MTA0LjIwMC4xMjkuODh8fDE2NTMwNzcxODciOw.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/falcws_lob_crd_03.jpg" alt="">
            <p id="title">The Falcon and The Winter Soldier</p>
            <p id="year">2021</p>
            <a href="https://soap2day.ac/TczozMjoiMzI1N3x8MTA0LjIwMC4xMjkuODh8fDE2NTMwNzcyMTAiOw.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/loki_lob_crd_04.jpg" alt="">
            <p id="title">Loki</p>
            <p id="year">2021</p>
            <a href="https://soap2day.ac/TczozMjoiMzU0OHx8MTA0LjIwMC4xMjkuODh8fDE2NTMwNzcyMjciOw.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/whatif_lob_crd_01.jpg" alt="">
            <p id="title">What If...? | Season 1</p>
            <p id="year">2021</p>
            <a href="https://soap2day.ac/TczozMjoiMzY3MXx8MTA0LjIwMC4xMjkuODh8fDE2NTMwNzcyNTciOw.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/hawkeye_lob_crd_04.jpg" alt="">
            <p id="title">Hawkeye</p>
            <p id="year">2021</p>
            <a href="https://soap2day.ac/TczozMjoiMzgyM3x8MTA0LjIwMC4xMjkuODh8fDE2NTMwNzcyNzUiOw.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/moonknight_lob_crd_05.jpg" alt="">
            <p id="title">MoonKnight</p>
            <p id="year">2022</p>
            <a href="https://soap2day.ac/TczozMjoiMzk5M3x8MTA0LjIwMC4xMjkuODh8fDE2NTMwNzczMDAiOw.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/msmarvel_lob_crd_04.jpg" alt="">
            <p id="title">Ms. Marvel</p>
            <p id="year">8 JUNE, 2022</p>
            <button>Coming Soon</button>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/shehulk_lob_crd_02.jpg" alt="">
            <p id="title">She Hulk</p>
            <p id="year">17 AUGUST, 2022</p>
            <button>Coming Soon</button>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/secretinvasion_lob_crd_02.jpg" alt="">
            <p id="title">Secret Invasion</p>
            <p id="year"></p>
            <button>Coming Soon</button>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/ironheart_lob_crd_02.jpg" alt="">
            <p id="title">Ironheart</p>
            <p id="year"></p>
            <button>Coming Soon</button>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/armorwars_lob_crd_01.jpg" alt="">
            <p id="title">Armor Wars</p>
            <p id="year"></p>
            <button>Coming Soon</button>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/gotg-holiday_lob_crd_01.jpg" alt="">
            <p id="title">The Guardians of the Galaxy Holiday Special</p>
            <p id="year">2022</p>
            <button>Coming Soon</button>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/iamgroot_lob_crd_02.jpg" alt="">
            <p id="title">I Am Groot</p>
            <p id="year"></p>
            <button>Coming Soon</button>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/xmen97_lob_crd_01_rev.jpg" alt="">
            <p id="title">X-Men '97</p>
            <p id="year"></p>
            <button>Coming Soon</button>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/whatif2_lob_crd_01.jpg" alt="">
            <p id="title">What If...? | Season 2</p>
            <p id="year"></p>
            <button>Coming Soon</button>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/echo_lob_crd_01.jpg" alt="">
            <p id="title">Echo</p>
            <p id="year"></p>
            <button>Coming Soon</button>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/spider-manfreshmanyear_lob_crd_01.jpg" alt="">
            <p id="title">Spider-Man: Freshman Year</p>
            <p id="year"></p>
            <button>Coming Soon</button>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/agathahouseofharkness_lob_crd_01.jpg" alt="">
            <p id="title">Agatha: House of Harkness</p>
            <p id="year"></p>
            <button>Coming Soon</button>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/marvelzombies_lob_crd_01.jpg" alt="">
            <p id="title">Marvel Zombies</p>
            <p id="year"></p>
            <button>Coming Soon</button>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/daredevilss3_lob_crd_02.jpg" alt="">
            <p id="title">Marvel's Daredevil</p>
            <p id="year">2018</p>
            <a href="" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/defenderss1_lob_crd_03.jpg" alt="">
            <p id="title">Marvel's The Defenders</p>
            <p id="year">2017</p>
            <a href="" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/ironfists2_lob_crd_02.jpg" alt="">
            <p id="title">Marvel's Iron Fist</p>
            <p id="year">2018</p>
            <a href="" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/jessicajoness3_lob_crd_04.jpg" alt="">
            <p id="title">Marvel's Jessica Jones</p>
            <p id="year">2019</p>
            <a href="" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/lukecages2_lob_crd_03.jpg" alt="">
            <p id="title">Marvel's Luke Cage</p>
            <p id="year">2018</p>
            <a href="" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/thepunishers2_lob_crd_04.jpg" alt="">
            <p id="title">Marvel's The Punisher</p>
            <p id="year">2019</p>
            <a href="" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/agentcarters2_lob_crd_03.jpg" alt="">
            <p id="title">Marvel's Agent Carter</p>
            <p id="year">2016</p>
            <a href="" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/agentsofshields7_lob_crd_04.jpg" alt="">
            <p id="title">Marvel's Agents of S.H.I.E.L.D.</p>
            <p id="year">2020</p>
            <a href="" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/inhumanss1_lob_crd_02.jpg" alt="">
            <p id="title">Marvel's Inhumans</p>
            <p id="year">2017</p>
            <a href="" target="__blank">
                <button>Watch Now</button></a>
        </div>
    </div>
</body>
</html>