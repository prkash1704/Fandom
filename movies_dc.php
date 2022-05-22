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
    <title>Movies | DC</title>
    <link rel="stylesheet" href="movies.css">
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
<body>
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
            <h1 class="active"><a href="movies_dc.php">MOVIES</a></h1>
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
        <div class="poster">
            <img id="img" src="the-batman-2022-movie-cast-wallpaper-1280x768_13.jpg" alt="">
            <section class="data" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                <p id="country">USA, 2022</p>
                <p id="title">THE BATMAN</p>
                <p style="top: 100px; font-size: 15px;font-weight: 500;">Action | Adventure | Crime & Gangster</p>
                <p style="top: 150px;"><img src="imdb-logo-transparent.png" alt=""></p>
                <p style="top: 146px; left: 80px; font-size: 30px; font-weight: 600;">8.5/10</p>
            </section>
        </div>
        <div class="recommended">
            <h1>Streaming Now</h1>
            <div class="watch">
                <a href="https://www.primevideo.com/dp/amzn1.dv.gti.e78b472d-4cbe-49e9-b05a-ace30495e398?autoplay=1&ref_=atv_cf_strg_wb" target="_blank"><img src="logo1.png" alt=""></a>
            </div>
            <div class="watch">
                <a href="https://www.youtube.com/watch?v=ZO1pd5oAmiw" target="_blank"><img src="logo2.png" alt=""></a>
            </div>
            <div class="watch">
               <a href="https://tv.apple.com/us/movie/the-batman/umc.cmc.75o96q32hcm2kzx4ilop1ylmx" target="_blank"><img src="logo3.png" alt=""></a>
            </div>
        </div>
    </div>
    
    <h1 id="castH">Cast</h1>
    <div class="cast">
        <div>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQecP7h8r37ESxNIBRfwHbcGnwOlB1JtuFu7e_1UlxTycBCdchhT0ybPd0&s=10" alt="">
            <p id="name">Robert Pattinson</p>
            <p id="chr">Batman</p>
        </div>
        <div>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSn8LXORsZFAjzqNky_qsIOtwUww7fgwk1tqbdprcvWdAqMXX94psgAWJI&s=10" alt="">
            <p id="name">Zoë Kravitz</p>
            <p id="chr">Selina Kyle</p>
        </div>
        <div>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0ImrVrBigkTZ1onOObaNza8jp2Q-A11k_5dGm55c5RjOTKrwZjA0xBqk&s=10" alt="">
            <p id="name">Paul Dano</p>
            <p id="chr">Riddler</p>
        </div>
        <div>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSn-_QiXBCTMhhbY9RcKegk3ZDxjfwuoF_to46qQOKGO7L196ECxdoOJv4&s=10" alt="">
            <p id="name">Colin Farrell</p>
            <p id="chr">Penguin</p>
        </div>
        <div>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTB5igWX-U6U6njPWlDTwEsFj6P2SyQ19LDdzBWKmPGD1tf2aHowSaTrk&s=10" alt="">
            <p id="name">Jeffrey Wright</p>
            <p id="chr">James Gordon</p>
        </div>
        <div>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRS7uJ-tQwzhJV773eszUNUYFg70-mwx0AUaDoHRnYjJGTWXHZA_5PUhOE&s=10" alt="">
            <p id="name">Andy Serkis</p>
            <p id="chr">Alfred Pennyworth</p>
        </div>
    </div>

    <div class="new">
        <h1>Movies</h1>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/movie-covers/2013/12/darkknightrises_thumb_192x291_52ac20da47a3b9.07047124.jpg?itok=MghqMBpn" alt="">
            <p id="title">The Dark Knight Rises</p>
            <p id="year">2012</p>
            <a href="http://snackhair.com/data/movies/The%20Dark%20Knight%20Trilogy/The.Dark.Knight.Rises.mp4" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/movie-covers/2013/12/batmanbegins_thumb_192x291_52ac0de3be51f2.08870352.jpg?itok=kejK4Zlj" alt="">
            <p id="title">Batman Begins</p>
            <p id="year">2005</p>
            <a href="http://103.133.175.242/80/wp-content/uploads/2019/06/Batman.Begins.2005.1080p.BluRay.x264.AAC.Androider.mp4" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/movie-covers/2013/12/thedarkknight_thumb_192x291_52ac3257584a98.35705610.jpg?itok=mwyD0jZY" alt="">
            <p id="title">The Dark Knight</p>
            <p id="year">2008</p>
            <a href="http://103.133.175.242/80/wp-content/uploads/2019/06/The.Dark_.Knight.2008.1080p.BluRay.x264.AAC.Androider.mp4" target="_blank"><button>Watch Now</button></div></a>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/movie-covers/2013/12/watchmen_thumb_192x291_52ac3307e32402.64695184.jpg?itok=t-aQJFN8" alt="">
            <p id="title">Watchmen</p>
            <p id="year">2009</p>
            <a href="http://82.15.55.70/Data/Film%20+%20TV/Films/Watchmen/The.Watchmen.BluRay.1080p.x264.5.1.Judas.mp4" target="_blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/movie-covers/2013/12/greenlantern_thumb_192x291_52ac228d50a812.86126222.jpg?itok=YGj116RY" alt="">
            <p id="title">Green Lantern</p>
            <p id="year">2011</p>
            <a href="https://q11.mrqls.to/a/extra/m1/2011/Green.Lantern.2011.mp4?tok=4D3757456B38544A304D433967506E556638554932664D6630517A42654E6E4177515348322D446F7951545A424F4A356650576D7762474A6551576F6834446C3361626F6E666E4F6A4A4B35304E794830375577384D4864754B6D636B2533446943384E6A56594C4B31684D48316C6437456C656D576B4D33557A5368373339547770653268354B5A30633532797461325A50633646554B334170494C3872675775646157387852794879387A6F3153545532366D636E35334F6C5A6D4B686457736D383067754D344843&valid=nCt6s9oX8hdDogNGtuLF2g&t=1653092972"
             target="__blank">
                <button>Watch Now</button></a></div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/movie-covers/2013/12/constantine_thumb_192x291_52ac7b66ab9251.30930364.jpg?itok=lQGZuxR6" alt="">
            <p id="title">Constantine</p>
            <p id="year">2005</p>
            <a href="https://q2.mrqls.to/a/extra/m1/2005/Constantine.2005.mp4?tok=6D55724D4F70726C4B6C4B5039557238366D784D5435673449594C5947593965346F3964366C6541356B667A616E6A50496D3978306A65514A7261564B684B34446965527731566C516966424C554C4D49583965446C683278797667386D2D625756417143516452346B6539253344372D79387A2D38415437732533446E5141516E37492533446D2D704D6E774F306C674B787843636F784376426954574351645A776B2D4A4833615A4C6C4C6236554B51416F78634F6C38674F555056356C416A36337356396A2533446B326B2533447964&valid=uI37b2rxr4w5RPRbSQelhQ&t=1653093054"
             target="__blank">
                <button>Watch Now</button></a></div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/movie-covers/2013/12/manofsteel_thumb_192x291_52ab977d243284.01494825.jpg?itok=at2lKgeF" alt="">
            <p id="title">Man Of Steel</p>
            <p id="year">2013</p>
            <a href="http://snackhair.com/data/movies/Man%20of%20Steel/ManofSteel.mp4" target="_blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/movie-covers/2016/08/ThumbMovies_192x291_SuicideSquad_MushroomCloud_57a1211a33b1e7.33170028.jpg?itok=htmFNv3U" alt="">
            <p id="title">Suicide Squad</p>
            <p id="year">2016</p>
            <a href="http://167.114.174.132:9092/movies/Batch211/Suicide.Squad.2016.720p.BluRay.x264-%5BYTS.AG%5D.mp4" target="_blank">
            <button>Watch Now</button></a></div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/movie-covers/2017/08/Movies-Thumb_WonderWomanMovie2017_59a4b5f04e7ea5.00139244.jpg?itok=weftOt2l" alt="">
            <p id="title">Wonder Woman</p>
            <p id="year">2017</p>
            <a href="http://167.114.174.132:9092/movies/Batch238/Wonder.Woman.2017.720p.BluRay.x264-%5BYTS.AG%5D.mp4" target="_blank"><button>Watch Now</button></a>
            </div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/movie-covers/2017/11/KeyarJL_TheLeague_Keyart_5a206235e32cc1.07186227.jpg?itok=mxVD4Dsr" alt="">
            <p id="title">Justice League</p>
            <p id="year">2017</p>
            <a href="https://q2.mrqls.to/a/extra/m1/2017/Justice.League.2017.mp4?tok=686974483351314F456963253344305231714369744C356B5A3246696458785231474568394C31546B2D466974672533446B5937443041737667594B446A732533447A4E556E4C7777416E674A6A48656741334E564B456839482D4E5A6A39783966335445484D6A3958734E594C457967346F6949623277517333514661486A4D253344325330473877516F33676F324165673473664961307651636D6649433965675572683444427673443052564B43696325334433546C6146683966364E5A543176414D31666B434A694E6A7852466554&valid=KiUI2LtDtMngYEGD5D47kg&t=1653093130"
             target="__blank">
                <button>Watch Now</button></a></div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/movie-covers/2018/11/Movies-Thumb_Aquaman2018_single_5bedc81a90d565.98093378.jpg?itok=fN1OGW6_" alt="">
            <p id="title">Aquaman</p>
            <p id="year">2018</p>
            <a href="https://q1.mrqls.to/a/extra/m2/2018/Aquaman.2018.mp4?tok=7462786B5372437142746758516242494D73796D48416C50516268304D7343694273426A52647763507379374E416B554F74454A4B376C6D4175775850586746563631623138563853586B64536F696D4273426661586C42483743364676516758634230486F6C6E42396B5145735535413656484673527A536351635274426935375541547130554B6F6C543637557A2533446F55354236566536706B73487245684C3578654374686A4E626763537579324373423357586C7825334435466E44377762556252414D73533651&valid=GNzPSEFUvNuPivAjm9Ww9A&t=1653093214"
             target="__blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/movie-covers/2019/03/Movies-Thumb_Shazam20190313_5c8934a6c8f4c0.03036534.jpg?itok=skHnuuoa" alt="">
            <p id="title">Shazam!</p>
            <p id="year">2019</p>
            <a href="http://103.156.66.58/m4t1/movies/english/2019/Shazam%20(2019).mp4" target="_blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/movie-covers/2019/08/Movies-Thumb_TheJoker_20190828_5d66fba5ad5239.73009138.jpg?itok=QXpVNnxI" alt="">
            <p id="title">Joker</p>
            <p id="year">2019</p>
            <a href="https://q1.mrqls.to/a/extra/m2/2019/Joker.2019.20191217.mp4?tok=695561574D5171614B6B4B253344486B6F72416D724D393166313465646F32543559315331654B575A4F4A52617257334F38463272732D31654D326A71393361633525334468735270694A334C514E504D4E4B574B6A724852674D6B37313767376B4B4725334466396F78506364316A594C396C3972366639334F6A37624A6C33253344466E364976774F6D377477493050634A75684975346839723766394F44674F552D3072452533447A71453469624A31656351385670733253317950514F6A356574584D7961444C6B346A416D4C6747&valid=V28cHuac5sc3QJmCqXNGlQ&t=1653093293"
             target="__blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/movie-covers/2019/07/TVPage_Thumb_kitchen_5d2d59df3adcb3.61588729.jpg?itok=BdjcRWL5" alt="">
            <p id="title">The Kitchen</p>
            <p id="year">2019</p>
            <a href="https://q6.mrqls.to/a/extra/m2/2019/The.Kitchen.2019.mp4?tok=644D6856464E784975635237774D78352533444F68453076577A774D526C2533444F784175627948784F674E434F685A367656347565303639645545746468377649513249636B35697247677949554F464B524575627944364956793664785979654245334E786C364B5546757356306B6445717A63456C79624358794E414E455077416D71466B7A626B46394B55786E714658665A4571306345386E5956516E6330532D62673876635348744D514E46516855766279623249566979623046777168253344304D42782533444F425939&valid=SoSo79D3PpvjJONGVL8wpA&t=1653093455"
             target="__blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/movie-covers/2019/12/Movies-Thumb_BoP__5df1b6165d38c7.32399605.jpg?itok=TRinufIM" alt="">
            <p id="title">Birds Of Pray</p>
            <p id="year">2020</p>
            <a href="https://c1.s2dmax.xyz/a/extra/m2/2020/Birds.of.Prey.And.the.Fantabulous.Emancipation.of.One.Harley.Quinn.2020.20200321.mp4?valid=1eqeZqWM9rK6YwSJZLYRMw&t=1653093539&dz=6D55724D4F70726C4B6C4B5039557238366D784D54&cz=6E71626539722D67376B4E50386E41433271636B52"
             target="__balnk"><button>Watch Now</button></a></div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/movie-covers/2020/12/Movies-Thumb_WW84_HelmetArt_5fca9741c15786.50981449.jpg?itok=NQGP4ae3" alt="">
            <p id="title">Wonder Woman 1984</p>
            <p id="year">2020</p>
            <a href="http://103.156.66.58/m4t1/movies/english/2020/Wonder%20Woman%201984%20(2020).mp4" target="_blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/movie-covers/2021/03/Movies-Thumb_ZackSnyderJusticeLeague_Keyart_603e9e717fed30.39358315.jpg?itok=y8nwKHln" alt="">
            <p id="title">Zack Snyder's Justice League</p>
            <p id="year">2021</p>
            <a href="https://c1.s2dmax.xyz/a/extra/m2/2021/Zack.Snyders.Justice.League.2021.mp4?valid=IDoQ3FWiw5xiQP15fHlD6A&t=1653093721&dz=7058754E25334471427036586446387242463458755242&cz=6667574634616A644352524F466334347852585432"
             target="__balnk"><button>Watch Now</button></a></div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/movie-covers/2021/07/Movies-Thumb_TheSuicideSquad2021_july_60e4812d558cd9.83560586.jpg?itok=0bZQNysY" alt="">
            <p id="title">The Suicide Squad</p>
            <p id="year">2021</p>
            <a href="http://103.156.66.58/m4t1/movies/english/2021/The%20Suicide%20Squad%20(2021)%201080p.mp4" target="_blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/movie-covers/2016/02/ThumbMovies_192x291_BatmanVSuperman_56d50c33b1efb4.21595592.jpg?itok=NYsLDP_X" alt="">
            <p id="title">Batman Vs Superman: Down Of Justice</p>
            <p id="year">2016</p>
            <a href="http://snackhair.com/data/movies/Man%20of%20Steel/Batman.v.Superman.Dawn.of.Justice.mp4" target="_blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://www.dccomics.com/sites/default/files/styles/comics320x485/public/movie-covers/2022/02/Movies-Thumb_TheBatman_2_6205b82ee37268.37925455.jpg?itok=bYD6OyeS" alt="">
            <p id="title">The Batman</p>
            <p id="year">2022</p>
            <a href="https://q2.mrqls.to/a/extra/m2/2022/the.batman.2022.mp4?tok=5962644C2D587257253344574E433955787A345864512D745736385750593862744C36587253425964433955686F4771514233733176336C534D3963634436554B76476B6844776A4673395451463857534F375676494A58526F7A6E726D4459394C455678667A54515234715637776E4364777041772D58376943583943253344567750796C417438706C363353533533704166716C2D6A796B424731515563796E774A316E68473857504D38624D442D6162694156756944515663726B7752366F684741572533446B3862396A4A&valid=AQ5CTk85ih6Plif7WkW2sw&t=1653093873"
             target="__balnk"><button>Watch Now</button></a></div>
    </div>
</body>
</html>