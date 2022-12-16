<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início - Netflix </title>
    <link href="https://i.pinimg.com/originals/0f/66/dc/0f66dc3fe8ea994a70ed78472b2aa50f.png" rel="icon">
</head>

<style>
    .bg_video {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        width: 100%;
        height: auto;
        z-index: -1000;
    }

    body {
        color: white;
        padding: 0;
        margin: 0;
        height: 700px;
    }

    .menu_list {
        list-style: none;
        padding-left: 0;
        padding-top: 30px;
        padding-bottom: 0
    }

    .menu_list li {

        display: inline-block;
        margin-left: 15px;

    }

    .menu_list li a {

        color: white;
        text-decoration: none;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .logo img {
        width: 150px;
        height: 75px;
        float: left;
        margin-left: 50px;
        margin-right: 35px;
        padding-top: 0;
    }

    .titulo img {
        width: 600px;
        height: 150px;
        margin-left: 40px;
        margin-right: 900px;
        margin-top: 275px;
    }

    .titulo h1 {
        margin-left: 50px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .titulo p {
        margin-left: 50px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    }

    .filmes {
        margin-top: 50px;
        padding-left: 40px;
    }

    .filmes p {
        font-weight: bolder;
        font-size: 20px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        margin-top: 50px;
    }

    .filmes img {
        width: 250px;
        margin-left: 0px;
        border-radius: 3px;
    }

    .filmes img:hover {
        border: 2px solid white;
        overflow: hidden;
    }

    .img1 img:hover {
        border: 2px solid white;
        overflow: hidden;
    }

    .gif {
        height: 20px;
    }






</style>

<body>
    <video width="320" height="240" autoplay muted class="bg_video">
        <source src="Wandinha _ Trailer oficial _ Netflix.mp4" type="video/mp4">
        <source src="Wandinha _ Trailer oficial _ Netflix.ogg" type="video/ogg">
    </video>

    <div class="container-fluid">


        <header class="row">
            <div class="logo">
                <img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c529.png">
            </div>
            <div class="Título">
                <ul class="menu_list">
                    <li>
                        <a href="#"> Início </a>
                    </li>

                    <li>
                        <a href="#"> Séries </a>
                    </li>

                    <li>
                        <a href="#"> Filmes </a>
                    </li>

                    <li>
                        <a href="#"> Mais recentes </a>
                    </li>

                    <li>
                        <a href="#"> Minha Lista </a>
                    </li>
                    <a href="http://localhost:8080/senac_php3/netflix/perfis.php">
                        <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/e70b1333850498.56ba69ac32ae3.png"
                            style="width: 30px; float: right; margin-right: 40px;">
                    </a>
                    <img src="https://www.udop.com.br/u_img/buscar/lupa.png"
                        style="width: 30px; float: right; margin-right: 20px; ">

                </ul>

            </div>



        </header>
    </div>

    <div id="hero" class="container-fluid">
        <div class="container-fluid">
            <div class="row" id="hero_infos">
                <div class="col-6">
                    <div class="titulo">
                        <img
                            src="https://occ-0-993-1001.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABdxlUl_M2h5ERjFfyvuhRn2v-Az7Pwe_KxG_M9HSWbURJYrAs9pvqDPa3B3UPTCn3K_xS17OhTYmOca-lM4XAN7y5RogX7xYSfhIkk21Sgt9wNuZlqUFsCVdSD-tT7udzadO5zDd2hkAMGYPQJV9kbYoTY6n6u5X4YgGHG6AStY-EUePkvpO6A.png?r=50a">

                        <h1> Top 1 de hoje no Brasil </h1>
                        <p>Inteligente, sarcástica e apática, Wandinha Addams pode estar meio morta por dentro, <br> mas
                            na Escola Nunca Mais ela vai fazer amigos, inimigos e investigar assassinatos.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="sequencia">
        <img src="1.png" style="height:250px; float:left;">
        <div class="img1">
            <img src="https://media3.giphy.com/media/1WHAlOdc9ZNUZq85JI/giphy.gif?cid=549b592d3gsxkq8juxdjgwfnmkeietoxeaq88ro2qe3o9zbh&rid=giphy.gif&ct=g"
                height="250px" style="height:250px; float:left;">
        </div>
        <img src="2.png"style="height:250px; float:left;">
        <div class="img1">
            <a href="https://www.youtube.com/watch?v=wUFwunMKa4E">
                <img src="gifs-de-among-us-0.gif" style="height:250px;"></a>
        </div>
    </div>


    <div class="filmes">
        <p>Vistos Recentemente -></p>
        <tr>
            <td><a href="https://www.youtube.com/watch?v=EKD_bvu_D9w" target="_blank">
                    <img src="pequena.webp"></a></td>
            <a href="https://www.youtube.com/watch?v=aYx4O80o62s">
                <td><img src="onfire.webp" alt="Glass Onion">
            </a></td>
            <a href="https://www.youtube.com/watch?v=_OkblXTvF2c">
                <td><img src="warrionnun.jpg">
            </a></a></td>
            <a href="https://www.youtube.com/watch?v=FKYvlqm7ZTI">
                <td><img src="vannila.webp">
            </a></td>
            <a href="https://www.youtube.com/watch?v=NFnrLVrORiE">
                <td><img src="sandman.jpg">
            </a></td>
            <a href="https://www.youtube.com/watch?v=Dkgw8A-XiO0">
                <td><img src="desencanto.jpg">
            </a></td>
        </tr>
    </div>
    <div class="filmes">
        <p>Minha Lista -></p>
        <tr>
            <td><a href="https://www.youtube.com/watch?v=wUFwunMKa4E">
                    <img src="love.jpeg"></a></td>
            <a href="https://www.youtube.com/watch?v=CKia57bMc88">
                <td><img src="pre-playGlassOnio.jpeg" alt="Glass Onion">
            </a></td>
            <a href="https://www.youtube.com/watch?v=RAKWlGS-0UY">
                <td><img src="arcane (2).jpeg">
            </a></a></td>
            <a href="https://www.youtube.com/watch?v=Ncra_hUVtMM">
                <td><img src="round6.jpeg">
            </a></td>
            <a href="https://www.youtube.com/watch?v=Ncra_hUVtMM">
                <td><img src="wednesdayinha.jpeg">
            </a></td>
            <a href="https://www.youtube.com/watch?v=Ncra_hUVtMM">
                <td><img src="coisasentranhas.jpeg">
            </a></td>
        </tr>
    </div>
</body>

</html>