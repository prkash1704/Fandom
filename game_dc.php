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
    <title>Game | DC</title>
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
<body style="background: linear-gradient(#223D47,#C1ABDE);">
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
            <h1><a href="shows_dc.php">TV SHOWS</a></h1>
        </div>
        <div class="games">
            <h1 class="active"><a href="game_dc.php">GAMES</a></h1>
        </div>
        <div>
            <h1><a href="profile.php"><?php echo $user_data['full_name']; ?></a></h1>
        </div>
        </div>
    </div>

    <div class="gameHome" style="display: flex;">
        <div class="game_Details" style="margin-top: 50px;">
            <section class="poster" style="background: linear-gradient(#223D47,#C1ABDE);">
                <img src="imgonline-com-ua-resize-X4Z6mQpYq00fw2.png" alt="">
                <p id="title">Injustice 2</p>
            </section>
            <p id="logo"><img src="883559.png" alt="" style="height: 30px;"></p>
            <p id="about">Injustice 2 is a fighting game in which players compete in one-on-one combat using characters from the DC Universe and other third-party franchises.
                </p>
            <p id="dvelopr" style="margin-top: 120px;">DEVELOPER<br>NetherRealm Studios<br>QLOC</p>
            <a href="https://store.steampowered.com/app/627270/Injustice_2/" target="_blank"><p id="buy" style="margin-top: -44px;"><button>Buy Now</button></p></a>
        </div>
        <div class="game_Details" style="margin-top: 50px;">
            <section class="poster" style="background: linear-gradient(#223D47,#C1ABDE);">
                <img src="imgonline-com-ua-resize-fF383XZbfRYALy.png" alt="">
                <p id="title">Gotham Knights</p>
            </section>
            <p id="logo"><img src="8eedf769a83524a00a200373ce900374.png" alt=""></p>
            <p id="about">Gotham Knights is an upcoming action role-playing game set in an open world Gotham City. The game features four playable characters: Nightwing, Batgirl, Robin, and Red Hood. Each character has their own unique playstyle and abilities, such as Robin being able to teleport via the Justice League's satellite</p>
            <p id="dvelopr">DEVELOPER<br>WB Games Montréal</p>
            <a href="https://store.steampowered.com/app/1496790/Gotham_Knights/" target="_blank"><p id="buy"><button>Buy Now</button></p></a>
        </div>
        <div class="game_Details" style="margin-top: 50px;">
            <section class="poster" style="background: linear-gradient(#223D47,#C1ABDE);">
                <img src="imgonline-com-ua-resize-owVAKZkW4vu.png" alt="">
                <p id="title">DC Universe Online</p>
            </section>
            <p id="logo"><img src="Daco_4551373.png" alt=""></p>
            <p id="about">DC Universe Online is a Free-to-Play, massive multiplayer online action game set in the popular DC Universe. Become one of a new breed of Heroes or Villains and wield incredible powers as you go to war with legendary characters such as Batman, Superman, Lex Luthor and The Joker.</p>
            <p id="dvelopr">DEVELOPER<br>Daybreak Game Company<br>Dimensional Ink Games</p>
            <a href="https://store.steampowered.com/app/24200/DC_Universe_Online/" target="_blank"><p id="buy" style="margin-top: -24px;"><button>Buy Now</button></p></a>
        </div>
    </div>
</body>
</html>