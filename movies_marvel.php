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
    <title>Movies | Marvel</title>
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
            <h1 class="active"><a href="movies_marvel.php">MOVIES</a></h1>
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
        <div class="poster">
            <img id="img" src="Spider_Man_No_Way_Home_2022_IMAX_Films_5K_Poster Wallpaper_1920x1080[10wallpaper.com].png" alt="">
            <section class="data">
                <p id="country">USA, 2022</p>
                <p id="title">SPIDER-MAN</p>
                <p id="subtitle">No Way Home</p>
                <p id="genere">Action | Sci-Fi | Superhero</p>
                <p id="imdblogo"><img src="imdb-logo-transparent.png" alt=""></p>
                <p id="rating">8.5/10</p>
            </section>
        </div>
        <div class="recommended">
            <h1>Streaming Now</h1>
            <div class="watch">
                <a href="https://www.primevideo.com/detail/amzn1.dv.gti.df5db546-ce75-4f60-8e7e-f9a68e00a2c1?ref_=av_auth_return_redir&autoplay=1" target="_blank"><img src="logo1.png" alt=""></a>
            </div>
            <div class="watch">
                <a href="https://www.youtube.com/watch?v=UNow5oWracE" target="_blank"><img src="logo2.png" alt=""></a>
            </div>
            <div class="watch">
               <a href="https://tv.apple.com/in/movie/spider-man-no-way-home/umc.cmc.2qf7xc5hds0m5jgx4roago580?action=play" target="_blank"><img src="logo3.png" alt=""></a>
            </div>
        </div>
    </div>

    <h1 id="castH">Cast</h1>
    <div class="cast">
        <div>
            <img src="data:image/jpeg;base64,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" alt="">
            <p id="name">Tom Holland</p>
            <p id="chr">Spider-Man</p>
        </div>
        <div>
            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAGQAZAMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAGAAMEBQcBAgj/xAA7EAACAQMCBAQDAwoHAQAAAAABAgMABBEFIQYSMVETIkGRYXGBocHRFSMyM0JVYpSx8RRDZJKy4fAH/8QAGQEAAgMBAAAAAAAAAAAAAAAAAQIAAwQF/8QAIhEAAgMBAAIBBQEAAAAAAAAAAAECAxEhEjEiBBMyUWEU/9oADAMBAAIRAxEAPwCoii71JRMZ2pIuPSn1A+tQgkX0x9lOBfhXlnSONnkIVEGWY9AKB+IOLZ5pGh0uTwoRsZceZvfpUIGF3qFnaHFxOint1NVlzxVp8X6nmlbPbA96ziS4aRizuzOerNvTsMUr4PPkelAPA8TiuFmHNbfMCQfeBVlaavaXS55/COf0XIFAEVqskTFjl1GQo3yO4/CnLVMHlLYPpj1FAOGjlQRkdPQ0yyddqGNP1K4smQ+LzwZwUY5H0PpRTBPFdRCSI5U1EwNYRZI/hUWWMHNWTqO1RpVFEBWtHv0rlSmjGaVQhaL2wadVuuf70wDjqa6zhIy5OAoyT8qcAJ8X6u8s0ljbuRFF+sx+03b6UIOebyrUi5uXn8SQHeaRnYn4mpui20TyDmAPMaRsZI5YaFcXMYaKHnB65U1Pg4evYXyIHKn0xmtF06CD/CR8qrgAelWtvGpYLyj47Vkl9Q0zZD6ZNGVPplwHH5mQEbqwU+U/hTv5OuCykwtk79OncfWtijtYmGTGpPypw6bbOed4lzUV7Y3+bDEL+GSBgTC4VtpE9GHcf+6174f1Ge1vDAzF1J3+I7/0rZbvSLK4QpJAjD02oB4h4TTTFkvrQnCMDjsCaeNqfGVzocek5jmmXHtXLSUy26O3UjeuuflWgyjDLk0q9N160qgBwMN+nX1qHrtx4Gi3jo2/hMBg99vvrccKeqg/Sq7X3t4tNlR0QtMCiAqNyad8WsCTbxHyuRsoG+1S7GYxyKo+uKKeOtFgsZhc28ZMkkhEpGcZ6/SqrhTS1ur1nuF5kjGcfGqfNOOlzrlGfiHuhTFrFR12ojtduU0P2hSLy4CqBt2q/sLi3kIVZFz8TXPs1s6dfIl1bY5KfB2rxbsnKAcU6SvoRUzg2jDnANUXEID6XdKdsxmr6XkOw3oZ4vcxaFfOpwRGTUj+SFszxYIaPLzRSx53jfH31MZqPP8A5jodg3CVvdXNpbzy3TvKzSRBiN+XGSP4aKjomk/uuy/l1/CukvRyZezFScHalWznQ9I/ddl/Lp+FKiKOULcWuyahZFj+bKkD553+6iihrjeMm1tpgP0HKn4ZH/VGa2LQ1b8ZpgnrlrFf6JN5j4rL4mP4juKGeC4gsUhK4y2PajBYRJas6sQcglR2ByR/WhrRVSLPJsDISfqawRfxaOlYl5qRb3VqqjnaMv64xmo8ckEqDn0qV1bYMqdPtB+yiS2VZIlyKmR6fbjJAIJ7AUil+x3D9A7Zi4sJnjiEiKDuGPMPf+9EjPLFZ+PJvhcnFRLqFIlKpnBqRFIX0+NW7jIpH0tzPQOzavezybXtvZR9fzgDEj6kYpnU4by70u9gluFnjeBslRjO21Xc+keKwLRRyBDlCRjFeo9JEFs8EAZZJzjA6ZPYelWRa5hRYnj0OeH7AaVollYj/IhVT8/X7c1YGlSNdE5R4NKkaVAhBFM3trHe2slvMMo49qdFehTgM44j0q70SLxY7ryyEqAo36daD9JmXnYEjJbetR49j59NiYDcPisZtJ/BvZo3yCJCtU2RWcLoTe9NG064yNyRV8lziLKjLelBOn3TcwDZG2fjU5tTnKskK+UbH1rBKL3h067Uo9Jl/es1xIs7lAp22296t4RGtkJOdeU7jf0oElu7qe65nY5zgITipbyXFpIkUbFlXlIXmyD3GPem8MD93+BxbzKY1yRT+nlZdXtgD0bPsKFl1IyykK3UfZVvwXM99rzkbpbxksR3Ow++pVF+aTEvsj9t4aBXDXa8k10TknDSrlKgQg16Fea6DTgIHEFqLrSZ0P7K84+lYRxHC9rqssyqfDJHMR6HArWeL+K1sr+24f09Fn1C82lJPlto/Vj3bAOB7+mRvUtPj/Kk0U8YaGdEdQRsRgA/aDVNsvHpdVHyeAjaamjJ4hflIXlHf4Z96KdCkiurXk9fTJHWhDXOH59KkaaAGW0YnHdKb03V3i8vMQe4Pp2qidanHhdCxwl8g4e5u7LmBiEyZIXlXmOPnXiNxMC8tqsQGPME3+XwqFBrMK2RRiGk6YHf51E1jVeUR+EzB3O++xFVKD9Gl2rN09XWoLHcTGJeXmGF/h71q3AmjfknRg8qkXV0fEkz1A9B7faTWc8J8PXDaZd6/OqlLdWeBJQcOw3GR2zitZsNRN1ZTPKgjurYlLiHOeRwM+xGCD6gitdcFHpgtscuFgDXCaiaRcyXek2V1MFEk1vHI4UYGSoJx71JJq0qOGu15pVCEIGq3ifUJtK4e1HULYIZra3eRA4yuQNs12lTEMK4KvLi841hubqQyz3DSGV26t5CfuFbHqNlDPpMksgPiW4542HUZIBHyrtKq7V8Rq3k0Uiostv5xn4UGcV6NZW8TXNuhifG4Q4U/SlSrFU3puuSwGYJ5AFGepos4P0y21GSS5vA0rR/ooT5R9K7SrRa8iUUpOXQ/wBLvpbrhXXreRUCWkvhR8owSpCtv/uNXfERNnqdpcQeV7wSW049HURu6n5gjY9mNKlV0fSM8/yZY6DtoWnD/SRf8BUw0qVFAPB60qVKoQ//2Q==" alt="">
            <p id="name">Tobey Maguire</p>
            <p id="chr">Spider-Man</p>
        </div>
        <div>
            <img src="data:image/jpeg;base64,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" alt="">
            <p id="name">Zendaya</p>
            <p id="chr">MJ(Michelle)</p>
        </div>
        <div>
            <img src="data:image/jpeg;base64,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" alt="">
            <p id="name">Andrew Garfield</p>
            <p id="chr">Spider-Man</p>
        </div>
        <div>
            <img src="data:image/jpeg;base64,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" alt="">
            <p id="name">Marisa Tomei</p>
            <p id="chr">Aunt May</p>
        </div>
        <div>
            <img src="data:image/jpeg;base64,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" alt="">
            <p id="name">Willem Dafoe</p>
            <p id="chr">Norman Osborn</p>
        </div>
    </div>
    
    <div class="new">
        <h1>Marvel Movies</h1>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/ironman_lob_crd_01_3.jpg" alt="">
            <p id="title">Iron Man</p>
            <p id="year">2008</p>
            <a href="https://tartarus.feralhosting.com/firepig/JP/MOVIES/Iron%20Man%202008%201080p%20BluRay%20x264%20%20AAC%20-%20Ozlem/Iron%20Man%202008%201080p%20BluRay%20x264%20%20AAC%20-%20Ozlem.mp4" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/theincrediblehulk_lob_crd_01_2.jpg" alt="">
            <p id="title">The Incredible Hulk</p>
            <p id="year">2008</p>
            <a href="http://103.87.212.46/Data/movies1/hollywood/2020/The%20Incredible%20Hulk%20(2008)/The.Incredible.Hulk.2008.1080p.BluRay.x264.YIFY.mp4" target="__blank">
                <button>Watch Now</button></a>
        </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/ironman2_lob_crd_01_3.jpg" alt="">
            <p id="title">Iron Man 2</p>
            <p id="year">2010</p>
            <a href="https://q11.mrqls.to/a/extra/m2/2010/Iron.Man.2.2010.mp4?tok=432D467A734665726B4130716B456466524148326F532533447173763345672D5734714747346D41457270474F387754346E695767675050363268414B7972723256704D4A78655761526E36347373432D6E6B2533445679754142594D50584B6D4271377A775845623635397158706C5A506F49615578496F2533446C476D46737A57425779614E7562762D4B6B653635706A565A49554C6F496255786664383425334462556734514E47756A253344372D707632736D41474D7247474D723635415A54686F6D4F45756F45745852416E4B78&valid=zDjrVUCs06_IhEqVquPdrg&t=1653092078"
             target="__blank"><button>Watch Now</button></a>
            </div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/thor_lob_crd_01.jpg" alt="">
            <p id="title">Thor</p>
            <p id="year">2011</p>
            <a href="https://q11.mrqls.to/a/extra/m1/2011/Thor.2011.mp4?tok=616169372D4C79553865514873576A7A36596C5346615277415950693862654B776176514563687A374D696C49785545716F6D30346E59532D496334253344554F7A467052446B714470465756302D4953513864785032534873316E316D444A3842485A7669335842507772533933724651736146784164426A755879482533445A304F33564168446E69433658423770704367796E465174614649316155636A6D6D4D356C6B4B41484E4539594F4B43644F657861766B4A575749725A31522D73674C77577A723659466D4F&valid=knfCnJvvRfzc_I2w7SVEmA&t=1653092293"
             target="__blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/captainamerica_lob_crd_01.jpg" alt="">
            <p id="title">Captain America: The First Avenger</p>
            <p id="year">2011</p>
            <a href="https://q2.mrqls.to/a/extra/m1/2011/Captain.America.The.First.Avenger.2011.mp4?tok=504D61483851584C324E79347954596B3154624A71694E78684D45586A4D714834515848345043347954495A446D4F366A68736D6362484C6B4E5A253344344E326B396247356C69736436504F2D6F4C4A46674C6B4877494F6B78675862365069423555595177504F4B6B664D79566433635861397338516E58354F69343055584176682D6D6F65637863494834656139626F65715970626D387150374E766A754368635939684D454C6A4D4A25334438544858334D54593450384E6F67754B6D6459396C4D306A6A4D366648&valid=TIhat5XtKVOyuZtkrn4SMg&t=1653092398"
             target="__blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/theavengers_lob_crd_03.jpg" alt="">
            <p id="title">The Avengers</p>
            <p id="year">2012</p>
            <a href="https://tartarus.feralhosting.com/firepig/JP/MOVIES/The%20Avengers%20%282012%29/The.Avengers.2012.720p.BluRay.x264.YIFY.mp4" target="__blank">
                <button>Watch Now</button></a></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/ironman3_lob_crd_01_10.jpg" alt="">
            <p id="title">Iron Man 3</p>
            <p id="year">2013</p>
            <a href="https://tartarus.feralhosting.com/firepig/JP/MOVIES/Iron%20Man%203%202013%201080p%20BluRay%20x264%20ac3%20vice/Iron%20Man%203%202013%201080p%20BluRay%20x264%20ac3%20vice.mp4" target="__blank">
                <button>Watch Now</button></a></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/thorthedarkworld_lob_crd_02_1.jpg" alt="">
            <p id="title">Thor: The Dark World</p>
            <p id="year">2013</p>
            <a href="http://snackhair.com/data/movies/Thor/Thor2.mp4" target="__blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/captainamericathewintersoldier_lob_crd_01_1.jpg" alt="">
            <p id="title">Captain America: The Winter Soldier</p>
            <p id="year">2014</p>
            <a href="https://tartarus.feralhosting.com/firepig/JP/MOVIES/Captain%20America%20The%20Winter%20Soldier%20%282014%29%20%5B1080p%5D/Captain.America.The.Winter.Soldier.2014.1080p.BluRay.x264.YIFY.mp4" target="__blank">
            <button>Watch Now</button></a></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/guardiansofthegalaxy_lob_crd_03.jpg" alt="">
            <p id="title">Guardians of the Galaxy</p>
            <p id="year">2014</p>
            <a href="https://q2.mrqls.to/a/extra/m1/2014/Guardians.of.the.Galaxy.2014.mp4?tok=4D3757456B38544A304D433967506E556638554932664D6630517A42654E6E4177515348322D446F7951545A424F4A356650576D7762474A6551576F6834446C3361626F6E666E4F6A4A4B35304E794830375577384D4864754B6D636B2533446943384E6A56594C4B31684D48316C6437456C656D576B4D33557A5368373339547770653268354B5A30633532797461325A50633646554B334170494C3872675775646157387852794879387A6F3153545532366D636E35334F6C5A6D4B686457736D383067754D344843&valid=027CErIsg-ulSzkWaMbLSA&t=1653092582"
             target="__blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/avengersageofultron_lob_crd_03.jpg" alt="">
            <p id="title">Avengers: Age Of Ultron</p>
            <p id="year">2015</p>
            <a href="https://tartarus.feralhosting.com/firepig/JP/MOVIES/Avengers%20Age%20of%20Ultron%20%282015%29%20%5B1080p%5D/Avengers.Age.of.Ultron.2015.1080p.BluRay.x264.YIFY.mp4" target="__blank">
                <button>Watch Now</button></a></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/ant-man_lob_crd_01_8.jpg" alt="">
            <p id="title">Ant-Man</p>
            <p id="year">2015</p>
            <a href="http://103.156.66.58/m4t1/movies/english/2015/Ant-Man%20(2015).mp4" target="__blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/captainamericacivilwar_lob_crd_01_9.jpg" alt="">
            <p id="title">Captain America: Civil War</p>
            <p id="year">2016</p>
            <a href="http://167.114.174.132:9092/movies/batch202/Captain.America.Civil.War.2016.720p.BluRay.x264-%5BYTS.AG%5D.mp4" target="__blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/doctorstrange_lob_crd_01_6.jpg" alt="">
            <p id="title">Doctor Strange</p>
            <p id="year">2016</p>
            <a href="http://167.114.174.132:9092/movies/Batch220/Doctor%20Strange%20%282016%29%20%5BYTS.AG%5D/Doctor.Strange.2016.720p.BluRay.x264-%5BYTS.AG%5D.mp4" target="__blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/guardiansofthegalaxyvol.2_lob_crd_01.jpg" alt="">
            <p id="title">Guardians of the Galaxy 2</p>
            <p id="year">2017</p>
            <a href="http://167.114.174.132:9092/movies/Batch237/Guardians.Of.The.Galaxy.Vol..2.2017.720p.BluRay.x264-%5BYTS.AG%5D.mp4" target="__blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/spider-manhomecoming_lob_crd_01_3.jpg" alt="">
            <p id="title">Spider-Man: Homecoming</p>
            <p id="year">2017</p>
            <a href="http://snackhair.com/data/movies/The%20Amazing%20Spider%20Man/Spider-Man%20Homecoming.mp4" target="__blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/thorragnarok_lob_crd_03.jpg" alt="">
            <p id="title">Thor: The Ragnarok</p>
            <p id="year">2017</p>
            <a href="http://snackhair.com/data/movies/Thor/ThorRagnarok.mp4" target="__blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/blackpanther_lob_crd_01_4.jpg" alt="">
            <p id="title">Black Panther</p>
            <p id="year">2018</p>
            <a href="http://103.87.212.46/Data/Movies/Hollywood/2018/Black%20Panther%20(2018)/Black%20Panther%20(2018)%20[1080p]%20BluRay.mp4" target="__blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/avengersinfinitywar_lob_crd_02_1.jpg" alt="">
            <p id="title">Avengers: Infinity War</p>
            <p id="year">2018</p>
            <a href="http://103.133.175.242/80/wp-content/uploads/2021/08/Avengers.Infinity.War_.2018.720p.BluRay.x264-YTS.AM_.mp4" target="__blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/ant-manthewasp_lob_crd_01.jpg" alt="">
            <p id="title">Ant-Man and The Wasp</p>
            <p id="year">2018</p>
            <a href="http://103.133.175.242/80/wp-content/uploads/2019/01/Ant-Man.And_.The_.Wasp_.2018.1080p.BluRay.x264-YTS.AM_.mp4" target="__blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/captainmarvel_lob_crd_06.jpg" alt="">
            <p id="title">Captain Marvel</p>
            <p id="year">2019</p>
            <a href="http://103.87.212.46/Data/Movies/Hollywood/2019/Captain%20Marvel%20(2019)/Captain.Marvel.2019.1080p.WEBRip.mp4" target="__blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/avengersendgame_lob_crd_05_2.jpg" alt="">
            <p id="title">Avengers: Endgame</p>
            <p id="year">2019</p>
            <a href="http://103.133.175.242/80/wp-content/uploads/2021/08/Avengers.Endgame.2019.720p.BluRay.x264-YTS.LT_.mp4" target="__blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/spider-manfarfromhome_lob_crd_04_3.jpg" alt="">
            <p id="title">Spider-Man: Far From Home</p>
            <p id="year">2019</p>
            <a href="http://82.15.55.70/Data/Film%20+%20TV/Films/Marvel%20Cinematic%20Universe%20(2008-2018)%20Phase%20I-II-III%20~%20TombDoc/23.%20Spider-Man.Far.From.Home.2019.1080p.BluRay.x264-%5bYTS.LT%5d.mp4" target="__blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/blackwidow_lob_crd_06.jpg" alt="">
            <p id="title">Black Widow</p>
            <p id="year">2021</p>
            <a href="http://103.87.212.46/Data/movies1/hollywood/2021/Black%20Widow%20(2021)/Black.Widow.2021.1080p.WEBRip.x264.AAC5.1-[YTS.MX].mp4" target="__blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/shangchi_lob_crd_07.jpg" alt="">
            <p id="title">Shang-Chi and The Legend Of The Ten Rings</p>
            <p id="year">2021</p>
            <a href="http://103.87.212.46/Data/movies1/hollywood/2021/Shang-Chi%20and%20the%20Legend%20of%20the%20Ten%20Rings%20(2021)/Shang-Chi.And.The.Legend.Of.The.Ten.Rings.2021.1080p.BluRay.x264.AAC5.1-[YTS.MX].mp4" target="__blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/eternals_lob_crd_06.jpg" alt="">
            <p id="title">Eternals</p>
            <p id="year">2021</p>
            <a href="http://103.87.212.46/Data/movies1/hollywood/2021/Eternals%20(2021)/Eternals.2021.mp4" target="__blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/spider-mannowayhome_lob_crd_03.jpg" alt="">
            <p id="title">Spider-Man: No Way Home</p>
            <p id="year">2021</p>
            <a href="https://c1.s2dmax.xyz/a/extra/m2/2022/Spider.Man.No.Way.Home.2022.mp4?tok=5542674534525A42355334416D5A6E6F30434D4E3856506C2D5148576B4673476D5459523253597571565A50455554357A6B63653168384D6B615738322D3771395165757866376A704250253344715134523050703230524E547851776334556F3642545A5965564B4A32532533443672542D4B766536727145386170566E4633526F32686A385838516A30774F387179677363566D365A70517646762D4F43316771446A5362436E5534527951497574585A4B35417763374F39477166634E6E6E57413743736C3043374E4D&valid=e_Ha9UtUlrDy3wNAGUwsFQ&t=1653092826"
             target="__blank"><button>Watch Now</button></a></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/doctorstrangeinthemultiverseofmadness_lob_crd_02_3.jpg" alt="">
            <p id="title">Doctor Strange in the Multiverse of Madness</p>
            <p id="year">MAY 6, 2022</p>
            <button>New Movie</button></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/thorloveandthunder_lob_crd_03.jpg" alt="">
            <p id="title">Thor: Love and Thunder</p>
            <p id="year">JUL 8, 2022</p>
            <button>New Movie</button></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/blackpanther2_lob_crd_02.jpg" alt="">
            <p id="title">Black Panther: Wakanda Forever</p>
            <p id="year">NOV 11, 2022</p>
            <button>New Movie</button></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/themarvels_lob_crd_01.jpg" alt="">
            <p id="title">The Marvels</p>
            <p id="year">JUL 28, 2023</p>
            <button>New Movie</button></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/blade_lob_crd_01.jpg" alt="">
            <p id="title">Blade</p>
            <p id="year"></p>
            <button>New Movie</button></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/antman_lob_crd_01.jpg" alt="">
            <p id="title">Ant-Man and The Wasp: Quantumania</p>
            <p id="year">FEB 17, 2023</p>
            <button>New Movie</button></div>
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/fantasticfour_lob_crd_01.jpg" alt="">
            <p id="title">Fantastic Four</p>
            <p id="year"></p>
            <button>New Movie</button></div>
    </div>
</body>
</html>