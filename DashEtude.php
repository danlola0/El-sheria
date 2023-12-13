<?php
session_start();
//exit($_SESSION['id']);
if (!isset($_SESSION['id'])) {
    header('Location:/');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="EtuStyle/EtuStyle.css">
    <link rel="stylesheet" href="JavEtude/JavEtude.js">
    <link href="Sheria-icons/Sheria-icons.css" rel="stylesheet">
    <title>Dashboard Academia | UNIKIN</title>
</head>
<body>
    <nav>
        <div class="logo-name">
           <div class="logo-image">
            <img src="images_E/images.JPG" alt=""> 
           </div>

           <span class="logo_name">Dashboard Academia</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li>
                    <a href="#" id="messages-notification">
                        <i class="bi bi-house"></i>
                        <span class="link-name"><strong>Dashboard</strong></span>
                    </a>
                </li>
                <?php 

    $con = new PDO('mysql:host=localhost; dbname=Publications','root',''); 
   
     
$sql1 = $con->query("SELECT * FROM notification WHERE state='on' AND type='prof' AND idCon='".$_SESSION['id']."'"); 
$count1 = $sql1->rowCount(); 
$sql0 = $con->query("SELECT * FROM professeur"); 
$count0 = $sql0->rowCount(); 

$sql2Fast = $con->query("SELECT * FROM notification WHERE state='on' AND type='ct' AND idCon='".$_SESSION['id']."'"); 
$count2Fast = $sql2Fast->rowCount();
$sql2 = $con->query("SELECT CT_Nom, CT_Email, CT_Article, Departement_Nom FROM chef"); 
$count2 = $sql2->rowCount(); 

$sql3Fast = $con->query("SELECT * FROM notification WHERE state='on' AND type='ass' AND idCon='".$_SESSION['id']."'"); 
$count3Fast = $sql3Fast->rowCount();
$sql3 = $con->query("SELECT ASS_Nom, ASS_Email, ASS_Article, Departement_Nom FROM assistant"); 
$count3 = $sql3->rowCount(); 
     
?> 
              <li> 
                    <a href="DashProf.php"> 
                        <i class="bi bi-person-bounding-box"></i> 
                        <span class="link-name"><strong>Professeurs</strong></span> 
                        <i style="color: blue;" class="bi bi-bell-fill"></i><span class="badge text-bg-danger"><strong><?php echo $count1; ?></strong></span> 
                    </a> 
                </li> 
                <li> 
                    <a href="DashCT.php"> 
                        <i class="bi bi-person-lines-fill"></i> 
                        <span class="link-name"><strong>CT</strong></span> 
                        <i style="color: blue;" class="bi bi-bell-fill"></i><span class="badge text-bg-danger"><strong> <?php echo $count2Fast; ?>   </strong></span> 
                    </a> 
                </li> 
                <li> 
                    <a href="DashAss.php"> 
                        <i class="bi bi-people"></i> 
                        <span class="link-name"><strong>Assistants</strong></span> 
                        <i style="color: blue;" class="bi bi-bell-fill"></i><span class="badge text-bg-danger"><strong> <?php echo $count3Fast;?>   </strong></span> 
                    </a> 
            </ul>
            <ul class="logout-mode">
                <li>
                    <a href="Index.php">
                        <i class="bi bi-box-arrow-right"></i>
                        <span class="link-name"><strong>Déconnexion</strong></span>
                    </a>
                </li>

                <li class="mode">
                    <a href="#">
                        <div class="moon-sun">
                            <i class="bi bi-brightness-high icon sun"></i>
                            <i class="bi bi-moon icon moon"></i>
                        </div>
                        <span class="link-name"><strong>Sun/Moon</strong></span>
                    </a>

                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="messages">
            <div class="top">
            <i class="bi bi-justify sidebar-toggle"></i>

            <div class="search-box">
                <i class="bi bi-search"></i>
                <input type="search" placeholder="Search here..." id="message-search">
            </div>
            </div>

            <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="bi bi-reddit"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="bi bi-chat-square-text"></i>
                        <span class="text"><strong>PROFESSEURS</strong></span>
                        <span class="number"><?php echo $count0; ?></span>
                    </div>

                    <div class="box box2">
                        <i class="bi bi-chat-square-dots"></i>
                        <span class="text"><strong>CHEF DES TRAVAUX</strong></span>
                        <span class="number"><?php echo $count2; ?></span>
                    </div>

                    <div class="box box3">
                        <i class="bi bi-chat-square-quote"></i>
                        <span class="text"><strong>ASSISTANT(E)S</strong></span>
                        <span class="number"><?php echo $count3; ?></span>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <script src="JavEtude/JavEtude.js"></script>
</body>
</html>