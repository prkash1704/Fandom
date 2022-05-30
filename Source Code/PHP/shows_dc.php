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
    <title>TV Shows | DC</title>
    <link rel="stylesheet" href="shows.css">
    <script>
        window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
    document.getElementById("navbar").style.backgroundColor = "black";
  } else {
    document.getElementById("navbar").style.backgroundColor = "transparent";
  }
}
    </script>
</head>
<body style="background: linear-gradient(#190C14,#823B1C); background-repeat: no-repeat;">
    <div id ="navbar">
        <div class="logo" style="margin-left: 26px;">
            <a href="dchome.php">
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
            <h1 class="active"><a href="shows_dc.php">TV SHOWS</a></h1>
        </div>
        <div class="games">
            <h1><a href="game_dc.php">GAMES</a></h1>
        </div>
        <div>
            <h1><a href="profile.php"><?php echo $user_data['full_name']; ?></a></h1>
        </div>
        </div>
    </div>

    <div class="part1">
        <div class="sec1">
            <p class="headline">PEACEMAKER</p>
            <img class="imdblogo" src="imdb-logo-transparent.png" alt="">
            <p id="rating">8.4/10</p>
            <section class="content">
                <img src="Peacemaker-cast.jpg" alt="" class="poster" style="filter:opacity(0.6);">
                <h1>PEACEMAKER</h1>
                <p id="line2">18+ | 2022 | Season 1</p>
                <p id="gerne">Action | Adventure | Comedy</p>
                <p id="story">The Story</p>
                <p id="description">Peacemaker is a man who fights for peace at any cost,<br>
                     no matter how many people he has to kill to get it.</p>
                <a href="https://soap2day.ac/TczozMjoiMzg4MHx8MTA0LjIwMC4xMjkuODh8fDE2NTMwNjkxMzYiOw.html" target="__blank"><button>Watch Now</button></a>
            </section>
        </div>
        <div class="sec2">
            <div>
            <p id="poster"><img src="The-Flash-Season-8..png" alt=""></p>
            <p id="title">THE FLASH</p>
            <p id="rate">7.6/10</p>
            <p id="imdb"><img src="imdb-logo-transparent.png" alt=""></p>
            <a href="https://soap2day.ac/TczozMToiMzk0fHwxMDQuMjAwLjEyOS44OHx8MTY1MzA3NjMyNyI7.html" target="__blank"><button>Watch Now</button></a>
            <p id="Season">S08</p>
            <p id="episode">E138</p>
            </div>
            <div>
                <p id="poster"><img src="1110175.png" alt=""></p>
                <p id="title">Arrow</p>
                <p id="rate">7.5/10</p>
                <p id="imdb"><img src="imdb-logo-transparent.png" alt=""></p>
                <a href="https://soap2day.ac/TczozMToiMzkzfHwxMDQuMjAwLjEyOS44OHx8MTY1MzA3NjM1NyI7.html" target="__blank"><button>Watch Now</button></a>
                <p id="Season">S08</p>
                <p id="episode">E170</p>
            </div>
            <div>
                <p id="poster"><img src="p19626992_b_h8_aa.png" alt=""></p>
                <p id="title">SUPERGIRL</p>
                <p id="rate">6.2/10</p>
                <p id="imdb"><img src="imdb-logo-transparent.png" alt=""></p>
                <a href="https://soap2day.ac/TczozMToiNDQyfHwxMDQuMjAwLjEyOS44OHx8MTY1MzA3NjM4NiI7.html" target="__blank"><button>Watch Now</button></a>
                <p id="Season">S06</p>
                <p id="episode">E65</p>
            </div>
        </div>
    </div>
    <div class="showss">
        <h1>Shows</h1>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/tv-covers/2020/11/TVPage_Thumb_Pennyworth_S2_b_5fb709cd555527.43677944.jpg?itok=b2FXdDBg" alt="">
            <p id="title">Pennyworth</p>
            <p id="year">2019 - present</p>
            <a href="https://soap2day.ac/TczozMjoiMTE1Nnx8MTA0LjIwMC4xMjkuODh8fDE2NTMwNzY0MTEiOw.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/tv-covers/2021/10/TVPage_Thumb_Batwoman_S3_61664f46deb0c1.08156460.jpg?itok=aGyWVNtN" alt="">
            <p id="title">Batwoman</p>
            <p id="year">2019 - present</p>
            <a href="https://soap2day.ac/TczozMjoiMTI0Nnx8MTA0LjIwMC4xMjkuODh8fDE2NTMwNzY0MzQiOw.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/tv-covers/2022/03/TVPage_Thumb_DMZ_6233996bc79a47.52163293.jpg?itok=OT9O_dsD" alt="">
            <p id="title">DMZ</p>
            <p id="year">Available Now</p>
            <a href="https://soap2day.ac/TczozMjoiMzk3N3x8MTA0LjIwMC4xMjkuODh8fDE2NTMwNzY0NTQiOw.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/tv-covers/2022/03/TVPage_Thumb_Flash_S8_621ff889a6d298.67245018.jpg?itok=QBdgylHz" alt="">
            <p id="title">The Flash</p>
            <p id="year">2014 - present</p>
            <a href="https://soap2day.ac/TczozMToiMzk0fHwxMDQuMjAwLjEyOS44OHx8MTY1MzA3NjMyNyI7.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/tv-covers/2019/09/preview-full-ARRS8_8x12_5d855dcc4603f8.66481647.JPG?itok=i7tqUA-H" alt="">
            <p id="title">Arrow</p>
            <p id="year">2012 - 2020</p>
            <a href="https://soap2day.ac/TczozMToiMzkzfHwxMDQuMjAwLjEyOS44OHx8MTY1MzA3NjM1NyI7.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/tv-covers/2021/12/TVPage_Thumb_Peacemaker_61b40c91b69f02.86431400.jpg?itok=nem_Dubm" alt="">
            <p id="title">Peacemaker</p>
            <p id="year">2021 - present</p>
            <a href="https://soap2day.ac/TczozMjoiMzg4MHx8MTA0LjIwMC4xMjkuODh8fDE2NTMwNzY1MjUiOw.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/tv-covers/2019/10/TVPage_Thumb_WatchmenHBO_5da8b646cfbfb5.79197478.jpg?itok=0mxby_kq" alt="">
            <p id="title">Watchmen</p>
            <p id="year">2019 - present</p>
            <a href="https://soap2day.ac/TczozMjoiMTI3MXx8MTA0LjIwMC4xMjkuODh8fDE2NTMwNzY1NTciOw.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/tv-covers/2022/01/TVPage_Thumb_SMLOIS_S2_61d64975b53a38.37197591.jpg?itok=zOg02cE6" alt="">
            <p id="title">Superman & Lois</p>
            <p id="year">2021 - present</p>
            <a href="https://soap2day.ac/TczozMjoiMzE4N3x8MTA0LjIwMC4xMjkuODh8fDE2NTMwNzY1OTciOw.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/tv-covers/2022/01/TVPage_Thumb_Naomi_61d911c4019a52.62006767.jpg?itok=aQ_aMKWG" alt="">
            <p id="title">Naomi</p>
            <p id="year">2022 - present</p>
            <a href="https://soap2day.ac/TczozMjoiMzg3OXx8MTA0LjIwMC4xMjkuODh8fDE2NTMwNzY2MzIiOw.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/tv-covers/2021/09/TVPage_Thumb_DoomPatrol_S3_614a31081235a6.76544572.jpg?itok=cKuiL253" alt="">
            <p id="title">Doom Patrol</p>
            <p id="year">2019 - present</p>
            <a href="https://soap2day.ac/TczozMToiOTU3fHwxMDQuMjAwLjEyOS44OHx8MTY1MzA3NjY2MCI7.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/tv-covers/2021/08/TVPage_Thumb_Titans_S3_611190d2a208c2.28766544.jpg?itok=VSbMMYWF" alt="">
            <p id="title">Titans</p>
            <p id="year">2018 - present</p>
            <a href="https://soap2day.ac/TczozMToiODgzfHwxMDQuMjAwLjEyOS44OHx8MTY1MzA3NjY5MiI7.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/tv-covers/2021/03/TVPage_Thumb_Supergirl_S6_605e86180d03e0.44266819.jpg?itok=yzzOO0E2" alt="">
            <p id="title">Supergirl</p>
            <p id="year">2015 - 2021</p>
            <a href="https://soap2day.ac/TczozMToiNDQyfHwxMDQuMjAwLjEyOS44OHx8MTY1MzA3NjcxOCI7.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/tv-covers/2021/08/TVPage_Thumb_Lucifer_S6_61143ca6cd6325.61326919.jpg?itok=a4ji3XKt" alt="">
            <p id="title">Lucifer</p>
            <p id="year">2016 - 2021</p>
            <a href="https://soap2day.ac/TczozMToiNDAwfHwxMDQuMjAwLjEyOS44OHx8MTY1MzA3Njc0MCI7.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/tv-covers/2021/02/TVPage_Thumb_BlackLightning_601deb66353ac3.30353069.jpg?itok=gk42MHKF" alt="">
            <p id="title">The Black Lightning</p>
            <p id="year">2018 - 2021</p>
            <a href="https://soap2day.ac/TczozMToiNjE1fHwxMDQuMjAwLjEyOS44OHx8MTY1MzA3Njc3NyI7.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/tv-covers/2019/03/Unknown_5c9d453f0c8443.29462513.jpeg?itok=WflLz98k" alt="">
            <p id="title">Gotham</p>
            <p id="year">2014 - 2019</p>
            <a href="https://soap2day.ac/TczozMToiMzY2fHwxMDQuMjAwLjEyOS44OHx8MTY1MzA3NjgwMyI7.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/tv-covers/2020/09/TVPage_Thumb_SwampThingCW_5f737eedd01023.64445225.jpg?itok=WfqFYmEm" alt="">
            <p id="title">Swamp Thing</p>
            <p id="year">2019</p>
            <a href="https://soap2day.ac/TczozMjoiMTA4NHx8MTA0LjIwMC4xMjkuODh8fDE2NTMwNzY4MjYiOw.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/tv-covers/2021/05/TVPage_Thumb_SweetTooth_keyart_60ad7030dd5283.90450783.jpg?itok=HY0sjcBS" alt="">
            <p id="title">Sweet Tooth</p>
            <p id="year">Available Now</p>
            <a href="https://soap2day.ac/TczozMjoiMzUzNnx8MTA0LjIwMC4xMjkuODh8fDE2NTMwNzY4NDYiOw.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/tv-covers/2021/10/TVPage_Thumb_YJS4__617a24c8af67a0.02302557.jpg?itok=TqKqJ9IA" alt="">
            <p id="title">Young Justice</p>
            <p id="year">2010 - present</p>
            <a href="https://soap2day.ac/TczozMToiNjQ1fHwxMDQuMjAwLjEyOS44OHx8MTY1MzA3Njg2OCI7.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/tv-covers/2013/12/batmanFINAL_text_52abcb6b859729.76738849.jpg?itok=tE1k3xxt" alt="">
            <p id="title">The Batman</p>
            <p id="year">2004 - 2008</p>
            <a href="https://soap2day.ac/TczozMjoiMTI2MXx8MTA0LjIwMC4xMjkuODh8fDE2NTMwNzY4OTQiOw.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/tv-covers/2014/05/Constantine_thumb2_53718b84ad0af0.38363878.jpg?itok=ayd8H8sy" alt="">
            <p id="title">Constantine</p>
            <p id="year">2014 - 2015</p>
            <a href="https://soap2day.ac/TczozMjoiMTc1OXx8MTA0LjIwMC4xMjkuODh8fDE2NTMwNzY5NjIiOw.html" target="__blank">
                <button>Watch Now</button></a>
        </div>
    </div>
</body>
</html>