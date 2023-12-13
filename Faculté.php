<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Style.css">
    <link rel="stylesheet" href="Java/javascript.js">
    <link href="Sheria-icons/Sheria-icons.css" rel="stylesheet">
    <title>Publiation</title>
    <style type="text/css">
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: Maiandra GD, sans-serif;
        scroll-behavior: smooth;
    }
    .logo a .icon {
        display: inline-block;
        font-size: 18px;
        color: #03a9f4;
    }

    p {
        font-weight: 300;
        color: #111;
    }

    .logo {
        color: gray;
        font-weight: bold;
        font-size: 2em;
        text-decoration: none;
        font-family: 'poppins', sans-serif;
    }

    .logo span {
        color: #fb911f;
        font-family: 'poppins', sans-serif;
    }

    header {
        position: fixed;
        top: 0%;
        left: 0%;
        padding: 20px 10px;
        width: 100%;
        z-index: 1;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        transition: 0.5s;
    }

    .navbar {
        display: flex;
        position: relative;
    }

    .navbar li {
        list-style: none;
    }

    .navbar a {
        color: gray;
        text-decoration: none;
        margin-left: 30px;
        font-weight: 700;
    }
    .titre {
        display: flex;
        width: 100%;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .menu {
        margin-top: -100px;
    }

    .menu .contenu {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 40px;
    }

    .menu .contenu .box {
        width: 350px;
        margin: 20px;
        border: 20px solid whitesmoke;
        box-shadow: 20px 15px 35px rgba(0, 0, 0, 0.8);
    }

    .menu .contenu .box .imbox {
        position: relative;
        width: 100%;
        height: 300px;
    }

    .menu .contenu .box .imbox {
        position: relative;
        width: 100%;
        height: 300px;
    }

    .menu .contenu .box .text {
        text-align: center;
        font-weight: 300px;
        color: #111;
    }

    .menu .contenu .box .text h3 {
        font-weight: 400;
        font-family: "Lucida Handwriting";
    }

    .menu .contenu .box .imbox img {
        position: relative;
        top: 0;
        left: 0;
        width: 100%;
        height: 300px;
        object-fit: cover;
    }

    .menu .contenu .box .imbox video {
        position: relative;
        top: 0;
        left: 0;
        width: 100%;
        height: 300px;
        object-fit: cover;
    }

    .Copyright {
        padding: 20px 40px;
        border-top: 2px solid rgba(0, 0, 0, 0.1);
        background: rgba(228, 222, 222, );
        text-align: center;
    }

    .Copyright p:nth-child(1) {
        color: #333;
    }

    .Copyright a {
        color: #fb911f;
        text-decoration: none;
        font-weight: 600;
        font-style: italic;
    }

    .btn1 {
        font-size: 1em;
        color: #fff;
        background: #fb911f;
        padding: 10px 20px;
        display: inline-block;
        margin-top: 20px;
        text-transform: uppercase;
        text-decoration: none;
        letter-spacing: 1px;
        transition: 0.5s;
        margin-left: 10px;
        font-family: "Lucida Handwriting";
    }
    </style>
</head>

<body>
<section class="menu" id="menu">
    <div class="titre">
        <h2 class="titre-texte"><span>M</span>enu</h2>
        <p>Nous vous presentons donc nos plats le plus commandés et choisis au menu :</p>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="Images/agronomie2.JPG" alt="">
            </div>
            <div class="text">
                <h3>Fac Agronomie</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="Images/droit.PNG" alt="">
            </div>
            <div class="text">
                <h3>Fac Droit</h3>
            </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="Images/fac_pharmacie.PNG" alt="">
                </div>
                <div class="text">
                    <h3>Fac Pharmacie</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="Images/fac_polytech.PNG" alt="">
                </div>
                <div class="text">
                    <h3>Fac Polytechnique</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="Images/science_sociale.PNG" alt="">
                </div>
                <div class="text">
                    <h3>Fac Science Sociale</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="Images/Sciences.JPG" alt="">
                </div>
                <div class="text">
                    <h3>Fac Sciences</h3>
                </div>
            </div>
        </div>
        <div class="titre">
            <a href="Index.php" class="btn1">Retour</a>
        </div>
</section>
    <div class="Copyright">
        <p>Copyright 2022 <a href="#">El Sheria 18</a> ainsi que sa famille et ses amis disent Merci!!!</p>
    </div>
        <script type="text/javascript">
            window.addEventListener('scroll',function(){
                const header =document.querySelector('header');
                header.classList.toggle("sticky",window.scrollY > 0);
            });
    
        function toggleMenu(){
            const menuToggle = document.querySelector('.menuToggle');
            const navbar = document.querySelector('.navbar');
            navbar.classList.toggle('active');
            menuToggle.classList.toggle('active');
        }
        </script>
</body>
</html>