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
    <title>Character | DC</title>
    <link rel="stylesheet" href="character.css">
    <script src="character.js"></script>
</head>
<body>
    <div id ="navbar">
        <div class="logo" style="margin-left: 26px;">
            <a href="dchome.php">
            <img src="cdnlogo.com_dc.png"></a>
        </div>
    <div class="content">
        <div class="character">
            <h1 class="active"><a href="character_dc.php">CHARACTER</a></h1>
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
    <div id ="main">
        <div id="list" >
            <div class="active" onclick="change2('flashh.jpg','flashhh.png','FLASH','Barry Allen',0,this);
            rate(183,4,27,20,25,79,'https://www.dccomics.com/sites/default/files/Char_Gallery_Flash_758_6055049612af35.61135649.jpg',6);"><img src="flash.png"></div>
            <div onclick="change2('Wonderrr.jpg','Wonderr.png','WONDER WOMAN','Diana Prince',1,this);
            rate(183,7,41,18,19,78,'https://i0.wp.com/www.comicsbeat.com/wp-content/uploads/2020/07/WW_Cv759_var.jpg?fit=1200%2C750&ssl=1',7);"><img src="wonder.png"></div>
            <div onclick="change2('batmannn.jpg','batmann.png','BATMAN','Bruce Wayne',2,this);
            rate(188,8,31,7,17,92,'https://i.insider.com/62225ce7dcce010019a6def1?width=1000&format=jpeg&auto=webp',8);"><img src="batman.png"></div>
            <div onclick="change2('supermannn.jpg','supermann.png','SUPERMAN','Clark Kent',3,this);
            rate(191,7,50,19,21,87,'https://mycbs4.com/resources/media/66fd1985-1250-495b-b198-8858f6199c60-large16x9_superman.jpg?1634092918009',9);"><img src="superman.png"></div>
            <div onclick="change2('greennn.jpg','greenn.png','GREEN LANTERN','Hal Jordan',4,this);
            rate(181,4,26,12,13,80,'https://www.dccomics.com/sites/default/files/HJFLC_Cv1_R3_gallery_57fc3635f2c6a2.45566872.jpg',10);"><img src="green.png"></div>
            <div onclick="change2('aquamannn.jpg','aquamann1.png','AQUAMAN','Arthur Curry',5,this);
            rate(186,5,35,8,14,76,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzJKLdPHUYG8ZpV1SBTG-zuuBwKJJcRWXvYCmlV8MjHEcPmDKcK3KFkO1xDrdCnP8_EU&usqp=CAU',11);"><img src="aquaman.png"></div>
        </div>
     <div id="card">
        <div class="backbg" onclick="movHid();">
            <img id="backimg" src="flashh.jpg" alt="" >
            <div class="frontbg">
                <img id="frontimg" src="flashhh.png" alt="">
                <p id="name">FLASH</p>
                <p id="realName">Barry Allen</p>
            </div>
        </div>
            <div id="hidsec">
                <h1 id="top">TOP TRUMPS CARD</h1>
                <div id="CardfrontView">
                    <img src="https://www.dccomics.com/sites/default/files/Char_Gallery_Flash_758_6055049612af35.61135649.jpg" alt="" id="cardImg">
                    <section id="cardContent">
                        <h1>TOP TRUMP FILE</h1><br>
                        <p id="trumpFile">
                        Sometimes lightning does. strike the same place twice. When youngster Wally West was visiting his Uncle in a forensics lab he was doused in chemicals and struck by a bolt in an exact repeat of the incident that granted his uncle superpowers. The truth was revealed and Wally was overjoyed that his uncle had been his hero. He took up the mantle of the Scarlet Speedster known as The Flash.
                        </p>
                    </section>
                <div id="skills">
                    <div id="rating">
                        <p id="rate1">183</p>
                        <p id="type">HEIGHT(cm)</p>
                    </div>
                    <div id="rating">
                        <p id="rate2">4</p>
                        <p id="type" style="font-size: 9px;">INTELLIGENCE</p>
                    </div>
                    <div id="rating">
                        <p id="rate3">27</p>
                        <p id="type">STRENGTH</p>
                    </div>
                    <div id="rating">
                        <p id="rate4">20</p>
                        <p id="type">SPEED</p>
                    </div>
                    <div id="rating">
                        <p id="rate5">25</p>
                        <p id="type">AGILITY</p>
                    </div>
                    <div id="rating">
                        <p id="rate6">79</p>
                        <p id="type" style="font-size: 8px;">FIGHTING SKILLS</p>
                    </div>
                </div>
                </div>
            </div>
       </div>

       <div id="info">
           <h1>About</h1>
           <div id="details">
               <img style="transform: translateX(50%);" src="https://speedforce.org/wp-content/uploads/2017/03/sneak-peek-at-the-flash-in-the-justice-league-film-1-1024x576.jpg" alt="" id="pic">
               <div id="data">
                   <h1 id="head" style="top: 90px;">THE FLASH</h1>
                   <p id="para" style="top: 180px;">Barry Allen, a forensic investigator in Central City, gains the power of superhuman speed from a freak accident. He decides to use it to fight crime as the Flash, a costumed superhero.</p>
               </div>
           </div>
       </div>
    </div>
</body>
</html>
</body>
</html>