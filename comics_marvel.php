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
    <title>Comics | Marvel</title>
    <link rel="stylesheet" href="comics.css">
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
<body style="background: linear-gradient(#C92027,#E6CE9F);">
    <div id ="navbar">
        <div class="logo">
            <a href="marvel_home.php">
            <img src="marvel-logo-34283.png"></a>
        </div>
    <div class="content">
        <div class="character">
            <h1><a href="character_marvel.php">CHARACTER</a></h1>
        </div>
        <div class="comics">
            <h1 class="active"><a href="comics_marvel.php">COMICS</a></h1>
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
        <div class="book">
            <section class="poster">
                <img src="https://i.annihil.us/u/prod/marvel/i/mg/9/00/6262ff702bc3b/portrait_uncanny.jpg" alt="">
            </section>
                <p id="price">Price</p>
                <p id="rate">$1.99</p>
                <a href="store.html" target="_blank"><button>Buy Now</button></a>
            <h1>Knights Of X</h1>
            <h2>Howard, Quinn</h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://i.annihil.us/u/prod/marvel/i/mg/3/f0/6262ff7341f94/portrait_uncanny.jpg" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$1.99</p>
            <a href="store.html" target="_blank"><button>Buy Now</button></a>
            <h1>Carnage</h1>
            <h2>V., Manna</h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://i.annihil.us/u/prod/marvel/i/mg/3/70/6262ff561534b/portrait_uncanny.jpg" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$1.99</p>
            <a href="store.html" target="_blank"><button>Buy Now</button></a>
            <h1>Star Wars: Crimson Reign</h1>
            <h2>Soule, Cummings</h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://i.annihil.us/u/prod/marvel/i/mg/6/d0/6262ff56238bf/portrait_uncanny.jpg" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$1.99</p>
            <a href="store.html" target="_blank"><button>Buy Now</button></a>
            <h1>Silk</h1>
            <h2>Kim, Miyazawa</h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://i.annihil.us/u/prod/marvel/i/mg/7/30/6259cb878dd80/portrait_uncanny.jpg" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$1.99</p>
            <a href="store.html" target="_blank"><button>Buy Now</button></a>
            <h1>The Amazing Spider-Man</h1>
            <h2>Wells, Romita</h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://i.annihil.us/u/prod/marvel/i/mg/7/70/6262ff544f9e9/portrait_uncanny.jpg" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$1.99</p>
            <a href="store.html" target="_blank"><button>Buy Now</button></a>
            <h1>Silver Surfer Rebirth</h1>
            <h2>Marz, Lim</h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://i.annihil.us/u/prod/marvel/i/mg/4/b0/6262ff579893e/portrait_uncanny.jpg" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$1.99</p>
            <a href="store.html" target="_blank"><button>Buy Now</button></a>
            <h1>Sabretooth</h1>
            <h2>Lavalle, Kirk</h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://i.annihil.us/u/prod/marvel/i/mg/4/50/6262ff57f3982/portrait_uncanny.jpg" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$1.99</p>
            <a href="store.html" target="_blank"><button>Buy Now</button></a>
            <h1>Ms. Marvel: Beyond the Limit</h1>
            <h2>Ahmed, Carlos</h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://i.annihil.us/u/prod/marvel/i/mg/6/a0/6262ff5806de1/portrait_uncanny.jpg" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$1.99</p>
            <a href="store.html" target="_blank"><button>Buy Now</button></a>
            <h1>Punisher</h1>
            <h2>Aaron, Saiz</h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://i.annihil.us/u/prod/marvel/i/mg/9/50/6262ff72c25da/portrait_uncanny.jpg" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$1.99</p>
            <a href="store.html" target="_blank"><button>Buy Now</button></a>
            <h1>Hulk: Grand Design - Madness</h1>
            <h2>Rugg, Rugg</h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://i.annihil.us/u/prod/marvel/i/mg/8/d0/6262ff73a0b2a/portrait_uncanny.jpg" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$1.99</p>
            <a href="store.html" target="_blank"><button>Buy Now</button></a>
            <h1>Thor</h1>
            <h2>Simonson, Coipel</h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://i.annihil.us/u/prod/marvel/i/mg/6/a0/6262ff72cb834/portrait_uncanny.jpg" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$1.99</p>
            <a href="store.html" target="_blank"><button>Buy Now</button></a>
            <h1>Alien</h1>
            <h2>Johnson, Larroca</h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://i.annihil.us/u/prod/marvel/i/mg/c/d0/51ed8cf71fd82/portrait_uncanny.jpg" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$1.99</p>
            <a href="store.html" target="_blank"><button>Buy Now</button></a>
            <h1>Age of Ultron</h1>
            <h2>Bendis, Hitch</h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://i.annihil.us/u/prod/marvel/i/mg/5/40/515f1c002c52b/portrait_uncanny.jpg" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$1.99</p>
            <a href="store.html" target="_blank"><button>Buy Now</button></a>
            <h1>Avengers Vs. X-Men</h1>
            <h2>Aaron, Cheung</h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://i.annihil.us/u/prod/marvel/i/mg/7/50/57f3f7952e46c/portrait_uncanny.jpg" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$1.99</p>
            <a href="store.html" target="_blank"><button>Buy Now</button></a>
            <h1>The Marvels Project</h1>
            <h2>Brubaker, Epting</h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://i.annihil.us/u/prod/marvel/i/mg/8/f0/56cb2b6085b2c/portrait_uncanny.jpg" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$1.99</p>
            <a href="store.html" target="_blank"><button>Buy Now</button></a>
            <h1>Hulk Smash Avengers</h1>
            <h2></h2>
        </div>
    </div>
</body>
</html>