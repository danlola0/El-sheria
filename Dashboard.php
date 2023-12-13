<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Dashboard.css">
    <link rel="stylesheet" href="Js/main.Js">
    <link href="Sheria-icons/Sheria-icons.css" rel="stylesheet">
    <title>Dashboard Admin | UNIKIN</title>
</head>
<body>
    <!--Navigation-->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon class="bi bi-github"></ion-icon>
                        </span>
                        <span class="title">Dashboard Admin</span>
                    </a>
                </li>
                <?php 

$con = new PDO('mysql:host=localhost; dbname=Publications','root',''); 

 
$sql1 = $con->query("SELECT Professeur_Nom, Professeur_Postnom, Professeur_Prenom, Professeur_Email, Professeur_Article, Departement_Nom FROM prof"); 
$count1 = $sql1->rowCount(); 

$sql2 = $con->query("SELECT CT_Nom, CT_Postnom, CT_Prenom, CT_Email, CT_Article, Professeur_Nom, Departement_Nom FROM chef"); 
 $count2 = $sql2->rowCount(); 


$sql3 = $con->query("SELECT ASS_Nom, ASS_Postnom, ASS_Prenom, ASS_Email, ASS_Article, Professeur_Nom, Departement_Nom FROM assistant"); 
$count3 = $sql3->rowCount();

$sql4 = $con->query("SELECT Nom , Description FROM departement"); 
$count4 = $sql4->rowCount();
 
?> 
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon class="bi bi-house"></ion-icon>
                        </span>
                        <span class="title">Accueil</span>
                    </a>
                </li>
                <li>
                    <a href="Professeur.php">
                        <span class="icon">
                            <ion-icon class="bi bi-person-plus"></ion-icon>
                        </span>
                        <span class="title">Professeurs</span>
                    </a>
                </li>
                <li>
                    <a href="CT.php">
                        <span class="icon">
                            <ion-icon class="bi bi-person-plus"></ion-icon>
                        </span>
                        <span class="title">Chef des travaux</span>
                    </a>
                </li>
                <li>
                    <a href="Ass.php">
                        <span class="icon">
                            <ion-icon class="bi bi-person-plus"></ion-icon>
                        </span>
                        <span class="title">Assistants</span>
                    </a>
                </li>
                <li>
                    <a href="Depart.php">
                        <span class="icon">
                            <ion-icon class="bi bi-building"></ion-icon>
                        </span>
                        <span class="title">Départements</span>
                    </a>
                </li>
                <li>
                    <a href="utilisateur.php">
                        <span class="icon">
                            <ion-icon class="bi bi-clipboard-plus"></ion-icon>
                        </span>
                        <span class="title">Utilisateurs</span>
                    </a>
                </li>
                <li>
                    <a href="Login Admin.php">
                        <span class="icon">
                            <ion-icon class="bi bi-box-arrow-right"></ion-icon>
                        </span>
                        <span class="title">Déconnexion</span>
                    </a>
                </li>
                <p style="color: #fff; margin-left: 14px;">
                    <?php 
                        session_start();
                        if(isset($_SESSION['nom'])){
                            echo $_SESSION['nom'];
                        }
                    ?>
                </p> 
            </ul>
        </div>
        <!----------------------------Main----------------------------->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon class="bi bi-justify"></ion-icon>
                </div>

                <!--<div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon class="bi bi-search"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="Img/Hangi.JPG"  alt="">
                </div>-->
            </div>
            
            <!----------------------------cardBox----------------------------->
            <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers"><?php echo $count1; ?></div>
                    <div class="cardName">Professeurs</div>
                </div>
                <div class="iconBox">
                    <ion-icon class="bi bi-person-lines-fill"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers"><?php echo $count2; ?></div>
                    <div class="cardName">CT</div>
                </div>
                <div class="iconBox">
                    <ion-icon class="bi bi-person-lines-fill"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers"><?php echo $count3; ?></div>
                    <div class="cardName">Assistants</div>
                </div>
                <div class="iconBox">
                    <ion-icon class="bi bi-person-lines-fill"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers"><?php echo $count4; ?></div>
                    <div class="cardName">Départements</div>
                </div>

                <div class="iconBox">
                    <ion-icon class="bi bi-building"></ion-icon>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
    <script src="Js/main.js"></script>
</body>
</html>