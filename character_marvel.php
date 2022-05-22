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
    <title>Character | Marvel</title>
    <link rel="stylesheet" href="character.css">
    <script src="character.js"></script>
</head>
<body>
    <div id ="navbar">
        <div class="logo">
            <a href="marvel_home.php">
            <img src="marvel-logo-34283.png"></a>
        </div>
    <div class="content">
        <div class="character">
            <h1 class="active"><a href="character_marvel.php">CHARACTER</a></h1>
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
    <div id ="main">
        <div id="list" >
            <div class="active" onclick="change1('spidermannn.jpg','spy.png','SPIDER MAN','Peter Parker',0,0,this);
            rate(24,10,7,4,50,10,'spyCard.jpeg',0);"><img src="spiderman.png"></div>
            <div onclick="change1('doctorstrange.png','PngItem_116174.png','DOCTOR STRANGE','Dr. Stephen Strange',1,0,this);
            rate(15,7,8,2,80,8,'Doctor-Strange-Reading-Order-705x470.jpg',1);"><img src="drstrange.png"></div>
            <div onclick="change1('ironmannn.jpg','PngItem_508817.png','IRON MAN','Tony Strak',2,0,this);
            rate(30,9,10,5,20,10,'iron-man-marvel-comic-2020_1366x768.jpg',2);"><img src="ironman.png"></div>
            <div onclick="change1('captain-america-endgame-wallpapers-20208.jpg','cappp.png','CAPTAIN AMERICA','Steve Rogers',3,0,this);
            rate(28,10,10,2,25,9,'teahub.io-kaptan-amerika-wallpaper-1876884.jpg',3);"><img src="captain.png"></div>
            <div onclick="change1('The-Mighty-Thor-iPhone-Wallpaper.jpg','thorr.png','THOR','Thor Odinson',4,0,this);
            rate(30,3,11,1,75,9,'thor-comic-art-ra-1366x768.jpg',4);"><img src="thor.png"></div>
            <div onclick="change1('wp6617966-black-widow-for-mobile-wallpapers.jpg','widoww.png','BLACK WIDOW','Natasha Romanoff',5,0,this);
            rate(10,12,7,1,12,6,'wallpaperflare.com_wallpaper.jpg',5);"><img src="widow.png"></div>
        </div>
     <div id="card">
        <div class="backbg" onclick="movHid();">
            <img id="backimg" src="spidermannn.jpg" alt="">
            <div class="frontbg">
                <img id="frontimg" src="spy.png" alt="">
                <p id="name">SPIDER MAN</p>
                <p id="realName">Peter Parker</p>
            </div>
        </div>
            <div id="hidsec">
                <h1 id="top">TOP TRUMPS CARD</h1>
                <div id="CardfrontView">
                    <img src="spyCard.jpeg" alt="" id="cardImg">
                    <section id="cardContent">
                        <h1>TOP TRUMP FILE</h1><br>
                        <p id="trumpFile">
                            A radioactive spider-bite gave Peter Parker superhuman powers of agility,
                            strength,spider-sense and speed. He used his powers to help defend the
                            city against villainy. With great power, comes great responsibility.
                        </p>
                    </section>
                <div id="skills">
                    <div id="rating">
                        <p id="rate1">24</p>
                        <p id="type">STRENGTH</p>
                    </div>
                    <div id="rating">
                        <p id="rate2">10</p>
                        <p id="type">SKILLS</p>
                    </div>
                    <div id="rating">
                        <p id="rate3">7</p>
                        <p id="type">SIZE</p>
                    </div>
                    <div id="rating">
                        <p id="rate4">4</p>
                        <p id="type">WISECRACKS</p>
                    </div>
                    <div id="rating">
                        <p id="rate5">50</p>
                        <p id="type">MYSTIQUE</p>
                    </div>
                    <div id="rating">
                        <p id="rate6">10</p>
                        <p id="type">RATING</p>
                    </div>
                </div>
                </div>
            </div>
       </div>

       <div id="info">
           <h1>Stroy Moments</h1>
           <div id="details">
               <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/005smp_ons_mnt_01_2.jpg" alt="" id="pic">
               <div id="data">
                   <h1 id="head">TEAMING UP</h1>
                   <p id="para">In Berlin, Spider-Man found himself fighting alongside Iron Man and several other Super Heroes against a rogue Captain America and his allies.</p>
               </div>
           </div>
           <div id="btn">
               <div id="btn1" class="action" onclick="line(this);">TEAMING UP</div>
               <div id="btn2" onclick="line(this);">STATEN ISLAND FERRY</div>
               <div id="btn3" onclick="line(this);">TAKING ON VULTURE</div>
               <div id="btn4" onclick="line(this);">NEW SUIT</div>
               <div id="btn5" onclick="line(this);">BATTLING THANOS</div>
           </div>
       </div>
    </div>
</body>
</html>