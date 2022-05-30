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
    <title>Comics | DC</title>
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
<body style="background: linear-gradient(#484359,#5A5A5A);">
    
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
            <h1 class="active" ><a href="comics_dc.php">COMICS</a></h1>
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
        <div class="book">
            <section class="poster">
                <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2022/03/HARDWARE_S1_Cv5_00511_DIGITAL_623e255e8ce659.66926383.jpg?itok=SgdNcoHr" alt="">
            </section>
                <p id="price">Price</p>
                <p id="rate">$4.05</p>
                <a href="https://www.amazon.com/Hardware-2021-5-Season-One-ebook/dp/B09R2MGPLT/ref=sr_1_1?keywords=hardware%3A+season+one+%235&qid=1652997199&sr=8-1" target="__blank"><button>Buy Now</button></a>
            <h1>Hardware: Season One</h1>
            <h2></h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2022/04/BM_Cv123_12311_DIGITAL_6266f5220ea907.73836349.jpg?itok=QK56QBgn" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$5.41</p>
            <a href="https://www.amazon.com/Batman-2016-123-Joshua-Williamson-ebook/dp/B09X612D3Z/ref=sr_1_1?keywords=batman+%23123&qid=1652997328&sr=8-1" target="__blank"><button>Buy Now</button></a>
            <h1>Batman</h1>
            <h2></h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2022/04/BMB_NY_Cv2_00211_DIGITAL_6266f5305b5a15.27105763.jpg?itok=oURcV3S5" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$4.06</p>
            <a href="https://www.amazon.com/Batman-Beyond-Neo-Year-Collin-Kelly-ebook/dp/B09X5YFNGZ/ref=sr_1_1?keywords=batman+beyond%3A+neo-year+%232&qid=1652997361&sr=8-1" target="__blank"><button>Buy Now</button></a>
            <h1>Batman Beyond: Neo-Year</h1>
            <h2></h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2022/04/BMKT_Cv3_00311_DIGITAL_6266f538d852c0.93582940.jpg?itok=6sqrhfcu" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$5.04</p>
            <a href="https://www.amazon.com/Batman-Killing-Time-2022-3-ebook/dp/B09X5ZQ6XV/ref=sr_1_1?keywords=batman%3A+killing+time+%233&qid=1652997399&sr=8-1" target="__blank"><button>Buy Now</button></a>
            <h1>Batman: Killing Time</h1>
            <h2></h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/gn-covers/2022/04/BM_DKD_v6%20%28Cover%29_6266f4dfbc8ee4.70417192.jpg?itok=P9anR03L" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$21.02</p>
            <a href="https://www.amazon.com/Batman-Dark-Knight-Detective-Vol/dp/1779513305/ref=sr_1_1?keywords=batman%3A+the+dark+knight+detective+vol.+6&qid=1652997463&sr=8-1" target="__blank"><button>Buy Now</button></a>
            <h1>Batman: The Dark Knight Detective</h1>
            <h2></h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2022/04/EP_LoT_Cv3_00311_DIGITAL_6266f546a15281.63104633.jpg?itok=7gR6SucH" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$6.73</p>
            <a href="https://www.amazon.com/Earth-Prime-Legends-Tomorrow-Lauren-Fields-ebook/dp/B09X5ZCLYK/ref=sr_1_1?keywords=earth-prime%3A+legends+of+tomorrow+%233&qid=1652997525&sr=8-1" target="__blank"><button>Buy Now</button></a>
            <h1>Eath Prime: Legend Of Tommarow</h1>
            <h2></h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2022/04/FPBYND_Cv1_00111_DIGITAL_6266f55612c033.95413161.jpg?itok=4MIt1mm0" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$5.40</p>
            <a href="https://www.amazon.com/Flashpoint-Beyond-1-Geoff-Johns-ebook/dp/B09X61724K/ref=sr_1_1?keywords=flashpoint+beyond+%231&qid=1652997561&sr=8-1" target="__blank"><button>Buy Now</button></a>
            <h1>Flashpoint Beyond</h1>
            <h2></h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2022/04/MONKEYPRINCE_Cv4_00411_DIGITAL_6266f561d24860.88032771.jpg?itok=x2LhWJke" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$4.05</p>
            <a href="https://www.amazon.com/Monkey-Prince-2022-2021-ebook/dp/B09X5YZGQ5/ref=sr_1_1?keywords=monkey+prince+%234&qid=1652997597&sr=8-1" target="__blank"><button>Buy Now</button></a>
            <h1>Monkey Prince</h1>
            <h2></h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2022/04/NUBIACOROSP_Cv1_00111_DIGITAL_6266f5833c4899.89406053.jpg?itok=fLqev3ow" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$6.78</p>
            <a href="https://www.amazon.com/Nubia-Coronation-Special-Amazons-2021-ebook/dp/B09X5Z46P7/ref=sr_1_1?keywords=nubia%3A+coronation+special+%231&qid=1652997631&sr=8-1" target="__blank"><button>Buy Now</button></a>
            <h1>Nubia: Coronation Special</h1>
            <h2></h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2022/04/OSSQDRN_Cv6_00611_DIGITAL_6266f58deff771.22224132.jpg?itok=oWAc0KAd" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$4.06</p>
            <a href="https://www.amazon.com/One-Star-Squadron-2021-Mark-Russell-ebook/dp/B09X619G9X/ref=sr_1_1?keywords=one-star+squadron+%236&qid=1652997665&sr=8-1" target="__blank"><button>Buy Now</button></a>
            <h1>One-Star Squadron</h1>
            <h2></h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2022/04/SSQUAD_Cv15_01511_DIGITAL_6266f5976d79c4.13297576.jpg?itok=6zaWbXMb" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate" style="font-size: 50px; height: 150px; width: auto; box-sizing: border-box;">16 Book Series</p>
            <a href="https://www.amazon.com/dp/B08WPT7Z37?searchxofy=true&binding=kindle_edition&ref_=dbs_s_aps_series_rwt_tkin&qid=1652997702&sr=8-1" target="__blank"><button>Buy Now</button></a>
            <h1>Suicide Squad</h1>
            <h2></h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/gn-covers/2022/04/TOSPETS_Bk1%20%28Cover%29_6266f4ed9e6e89.56899574.jpg?itok=zfelPI1f" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$16.13</p>
            <a href="https://www.amazon.com/Tails-Super-Pets-Action-Comics-1938-2011-ebook/dp/B09X635X5F/ref=tmm_kin_swatch_0?_encoding=UTF8&qid=1652997878&sr=8-1" target="__blank"><button>Buy Now</button></a>
            <h1>Tails Of The Super-Pets</h1>
            <h2></h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2022/04/TFZ_Cv7_00711_DIGITAL_6266f5b8a4f558.26260023.jpg?itok=MG8dw82n" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$4.06</p>
            <a href="https://www.amazon.com/Task-Force-Z-2021-7-ebook/dp/B09WJJF3T6/ref=sr_1_1?keywords=task+force+z+%237&qid=1652997923&sr=8-1" target="__blank"><button>Buy Now</button></a>
            <h1>Task Force Z</h1>
            <h2></h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2022/04/WRLDOK_Cv6_00611_DIGITAL_6266f5c2ef56f7.77463024.jpg?itok=AIk9t-b8" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$9.99</p>
            <a href="https://www.amazon.com/WORLD-KRYPTON-FINAL-ISSUE-SUAYAN/dp/B09YVMD997/ref=sr_1_4?keywords=world+of+krypton+%236&qid=1652997950&sr=8-4" target="__blank"><button>Buy Now</button></a>
            <h1>World Of Krypton</h1>
            <h2></h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/comic-covers/2022/04/BGS_Cv6_00611_DIGITAL_626983e4823d29.19456627.jpg?itok=toQZ_g_p" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$4.03</p>
            <a href="https://www.amazon.com/Batgirls-2021-6-Becky-Cloonan-ebook/dp/B09XN6MKZY/ref=sr_1_1?keywords=batgirls+%236&qid=1652998031&sr=8-1" target="__blank"><button>Buy Now</button></a>
            <h1>Batgirls</h1>
            <h2></h2>
        </div>
        <div class="book">
            <section class="poster">
                <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/gn-covers/2022/04/BMVB%20%28%20Cover%29_626983a6cade22.20042378.jpg?itok=Wv8Gu-HY" alt="">
            </section>
            <p id="price">Price</p>
            <p id="rate">$16.04</p>
            <a href="https://www.amazon.com/Batman-Bigby-Wolf-Gotham-2021-ebook/dp/B09XJDYHRQ/ref=tmm_kin_swatch_0?_encoding=UTF8&qid=1652998084&sr=8-1" target="__blank"><button>Buy Now</button></a>
            <h1>Batman Vs Bigby! A Wolf In Gotham</h1>
            <h2></h2>
        </div>
    </div>
</body>
</html>