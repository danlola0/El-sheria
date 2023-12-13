<?php
session_start();

try{

    $bd=new PDO('mysql:host=localhost;dbname=Publications','root','');
  
    
    }
    catch(ExceptionPDO $e){
    echo 'Erreur ' .$e;
    }
if (isset($_SESSION['id'])) {
    $recevoir=$bd->prepare('SELECT * FROM connecter WHERE IdCon=?');
    $recevoir->execute(array($_SESSION['id']));
    $element=$recevoir->fetch();

}
if(isset($_POST['envoi'])){
if(isset($_POST['nom']) and isset($_POST['gmail']) and isset($_POST['message'])   ){
$sql=$bd->prepare('INSERT INTO Message values(null,:nom ,:gmail ,:message ) ' );
$sql->bindValue(':nom' ,$_POST['nom' ] );
$sql->bindValue(':gmail' ,$_POST['gmail' ] );
$sql->bindValue(':message' ,$_POST['message' ] );
$re=$sql->execute();
header('location:Message.php');

} else {
 echo 'Erreur ';

}



}






?>





<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/Style.css">
    <link rel="stylesheet" href="Java/javascript.js">
    <link href="Sheria-icons/Sheria-icons.css" rel="stylesheet">
    <title>Publication des articles</title>
    <style type="text/css">
        label {
            width: 200px;
            display: inline-block;
        }
        
        .Imp {
            color: red;
        }
        /*:invalid {
            border-color: rgb(0, 255, 76);
        }*/
        
        .cont {
            border-color: rgb(255, 0, 234);
        }
    </style>
</head>

<body>
    <header>
        <a href="#" class="logo"><span>P<lettre class="e" style="color: black; font-family: Lucida Handwriting;">ublication</lettre> S<lettre class="e" style="color: black; font-family: Lucida Handwriting;">cientifique</lettre><!--<span class="icon" title=""><i class="bi bi-cup-straw"></i></span></span><lettre class="e">des</lettre>--> <!--<span class="icon" title=""><i class="bi bi-house" style="color: gray;"></i></span>--></a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navbar"> 
         <li><a href="#banniere" onclick="toggleMenu();">Accueil</a></li>
         <li><a href="#apropos" onclick="toggleMenu();">Unikin</a></li>
         <li><a href="#menu" onclick="toggleMenu();">Facultés</a></li>
         <li><a href="#contact" onclick="toggleMenu();">Contact</a></li>
         <li style="position: relative;" ><?php
                if (!isset($_SESSION['id'])) {

                ?>
                <a href="DashEtude.php" onclick="toggleMenu();">E/C</a>
                <?php
                }else{
                    $sql0 = $bd->query("SELECT * FROM professeur ORDER BY IdProf DESC LIMIT 1");
                    $sql01 = $bd->query("SELECT * FROM ct ORDER BY IdCt DESC LIMIT 1");
                    $sql001 = $bd->query("SELECT * FROM ass ORDER BY IdAss DESC LIMIT 1");
                    $sql1 = $bd->query("SELECT * FROM notification WHERE state='on' AND type='prof' AND idCon='".$_SESSION['id']."'"); 
                    $count1 = $sql1->rowCount(); 
                    $sql2Fast = $bd->query("SELECT * FROM notification WHERE state='on' AND type='ct' AND idCon='".$_SESSION['id']."'"); 
                    $count2Fast = $sql2Fast->rowCount();
                    $sql3Fast = $bd->query("SELECT * FROM notification WHERE state='on' AND type='ass' AND idCon='".$_SESSION['id']."'"); 
                    $count3Fast = $sql3Fast->rowCount();
                    $totalCount=$count1+$count2Fast+$count3Fast;
                ?>
                <a href="/Me/El/DashEtude.php" <?php if($totalCount>0){?>onmouseover="activeFunnction('1')"<?php } ?> style="white;padding: 4px 9px 4px 9px;border-radius:80px;color: black;box-shadow: 0px 0px 5px silver;"><?= $element['nom']; ?>&#160<i style="color: black;" class="bi bi-bell-fill"></i><sup style="color: red;"><?php if($totalCount==0){}else{echo $totalCount;} ?></sup></a>
                <?php
                }
                ?>
                <div onmouseleave="activeFunnction('2')" style='box-shadow: 0px 0px 0px silver;display:none;position:absolute;top:-4px;width: 200px;padding: 2px 10px 20px 10px;background-color: white;border-radius: 10px;height: 300px;cursor: pointer;' id="winMuker">
                    <?php if($totalCount==0){ ?><h2 style="text-align: center;margin:20px auto;">Aucune notification</h2><?php } 
                    ?></h2><br/><br/><h3>Notifications</h3><hr/><br/>
                    <?php
                    if($count1>0){
                        while ($takePrf=$sql0->fetch()) {
                    ?>
                        <a href="/Me/El/DashProf.php" style="text-decoration: none;color: black;padding: 0px;margin: 0px;"><span>Professeur : <br/><?= $takePrf['Prenom']; ?> - <?= $takePrf['Nom']; ?></span></a><br/><strong style="color: gray;"><small><i><?= $takePrf['Date']; ?></i></small></strong><br/><hr/><br/>
                    <?php
                        }
                    }
                    if($count2Fast>0){
                        while ($takePrf2=$sql01->fetch()) {
                    ?>
                        <a href="/Me/El/DashCT.php" style="text-decoration: none;color: black;padding: 0px;margin: 0px;"><span>Chef des travaux : <br/><?= $takePrf2['Prenom']; ?> - <?= $takePrf2['Nom']; ?></span></a><br/><strong style="color: gray;"><small><i><?= $takePrf2['Date']; ?></i></small></strong><br/><hr/><br/>
                    <?php
                        }
                    }if($count3Fast>0){
                        while ($takePrf3=$sql001->fetch()) {
                    ?>
                        <a href="/Me/El/DashAss.php" style="text-decoration: none;color: black;padding: 0px;margin: 0px;"><span>Assistant(e) : <br/><?= $takePrf3['Prenom']; ?> - <?= $takePrf3['Nom']; ?></span></a><br/><strong style="color: gray;"><small><i><?= $takePrf3['Date']; ?></i></small></strong><br/><hr/>
                    <?php
                        }
                    }
                    ?>

                </div>
            </li>
            
         <li><a href="SignUp.php">Déconnexion <ion-icon class="bi bi-door-open"></ion-icon></a></li>
        </ul>
    </header>
    <section class="banniere" id="banniere">
        <div class="contenu">
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
            <h2 style="color: white;">Tout savoir sur les Publications des articles scientifiques</h2>
            <p style="color: black ;"><strong>La plublication d'article sientifique peut répondre à plusieurs objectifs. Qu'ils soient plutot personnels ou davantage basés sur l'échange, ils font toujours partie du "devoir" du Prof , Chef des travaux , Assistants et chercheur : celui de partager ses découvertes.</strong></p>
        </br>
        </br>
        </br>
            <a href="#contact" class="btn2">Plus d'info</a>
        </div>
    </section>
    <section class="apropos" id="apropos">
        <div class="row">
            <div class="col50">
                <h2 class="titre-texte">L'<span>U</span>NIKIN ( Université de Kinshasa ) </h2>
                <p>
                    L'<strong>université de Kinshasa</strong>, communément appelée <strong>UNIKIN</strong>, est un établissment francophone d'enseignement francophone d'enseignement supérieur universitaire situé dans la ville de <strong>Kinshasa</strong> en <strong>République Démocratique du Congo</strong>. Fondée en 1954, elle s'appelait à l'origine l'<strong>Université Catholique de Lovanium</strong> et elle est située dans la commune de <strong>Lemba</strong>, qui elle-même  se trouve dans le district du <strong>Mont-Amba</strong></str>.</br> </br>
                    Notre Université de Kinshasa <strong>"UNIKIN"</strong> est divisée en facultés ci-dessous : <strong>La Faculté de Droit , La Faculté de Lettres , La Faculté de Médecine , La Faculté de Médecine Vétérinaire , La Faculté de Pétrole et Gaz , La Faculté de Polytechnique , La Faculté de Psychologie , La Faculté d'Agronomie , La Faculté d'Economie , La Faculté de Pharmacie et La Faculté de Sciences</strong>.</br>
                </p>
            </div>
            <div class="col50">
                <div class="img">
                    <img src="Images/images.jpeg" width="350px" height="330px" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="menu" id="menu">
        <div class="titre">
            <h2 class="titre-texte">Faculté des <span>S</span>ciences</h2>
            <br>
            <p>La Faculté des <strong>Science</strong> de l'Université de Kinshasa existe depuis la création de l'Université Catholique Lovanium, en 1954. A ce titre, le bâtiment qui l'abrite est l'un des plus anciens de l'Université. Elle organise des enseignements de 1er, 2e et 3e cycles dans toutes les facultés. Les études du 1er cycle s’appellent graduats. Elles durent trois ans. Les étudiants parlent de « G1 », « G2 », « G3 ». Les études du 2e cycle s’appellent licences. Elles durent deux ans. Les étudiants parlent de « L1 » et de « L2 ». Les études du 3e cycle s’appellent comme partout ailleurs un doctorat. 
            </br> </br> Avant son arrimage au système LMD en 2019-2020, organise les enseignements et la recherche de huit filières regroupés dans les six départements ci-après : <strong>Biologie, Chimie, Environnement, Géosciences (géologie et géomatique), Mathématique et Informatique </strong> , et pour finir <strong>Physique</strong>.En plus de six départements, la Faculté comporte un Centre régional de formation doctorale en Mathématiques et Informatique, un programme de diplôme spécial en gestion de l’Environnement et une propédeutique en Physique et Mathématique. Etant une Faculté à laboratoire par excellence, la Faculté est dotée de plusieurs laboratoires didactiques et de recherche, qui constituent des supports importants pour l’enseignement et la recherche. Elle dispose aussi d’une revue scientifique publiée sous forme des annales. La Faculté des Sciences compte à ce jour 160 professeurs à thèse, 103 chefs de travaux, 77 assistants et 46 administratifs. </p>
        </div>
        <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="Images/Sciences.jpg" alt="">
            </div>
            <div class="text">
                <h3>Faculté des Sciences</h3>
            </div>
        </div>
        <div class="titre">
            <a href="Faculté.php" class="btn1">Voir Plus</a>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="titre noir">
            
        </div>
            <div class="contactform">
                <h3>Envoyer un message</h3>
                <form action="" method="post">
                <div class="inputboite">
                    <input type="text" required="required" name="nom" placeholder="Nom">
                </div>
                <div class="inputboite">
                    <input type="text" name="gmail" id="Email" type="email"  required="required" autocomplete="off" placeholder="Email">
                </div>
                <div class="inputboite">
                    <textarea placeholder="Message" required="required"  name="message"></textarea>
                </div>
                <div class="inputboite">
                    <input type="submit" name="envoi" autocomplet="off"  value="Envoyer">
                </div> 
                </form>  
            </div>
        </section>
    


    <div class="Copyright">
        <p>Copyright 2023 <a href="#">Sheria HANGI</a> ainsi que sa famille et ses amis disent Merci!!!</p>
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


    //* CHANGE NAVBAR STYLES ON SCROLL

window.addEventListener('scroll',()=>{
    document.querySelector('header').classList.toggle('window-scroll', window.scrollY > 0)
})

function activeFunnction(target){
let winMuker=document.getElementById('winMuker');
    if (target=='1') {
        winMuker.style.display='block'; 
    }else if(target=='2'){
        winMuker.style.display='none'; 
    }
}
</script>
</body>

</html>