<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Dashboard.css">
    <link rel="stylesheet" href="Js/main.Js">
    <link href="Sheria-icons/Sheria-icons.css" rel="stylesheet">
    <title>Dashboard</title>
    <style type="text/css">
        .btn2 {
            font-size: 1em;
            color: #fff;
            background: #2a2185;
            padding: 10px 20px;
            display: inline-block;
            margin-top: 20px;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px;
            transition: 0.5s;
            margin-left: 40%;
            border-radius: 2rem;
        }
    </style>
</head>
<body>
    <!--Navigation-->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon class="bi bi-layout-wtf"></ion-icon>
                        </span>
                        <span class="title">Dashboard Admin</span>
                    </a>
                </li>
                <li>
                    <a href="Dashboard.php">
                        <span class="icon">
                            <ion-icon class="bi bi-house"></ion-icon>
                        </span>
                        <span class="title">Accueil</span>
                    </a>
                </li>
                <li>
                    <a href="Professeur.php">
                        <span class="icon">
                            <ion-icon class="bi bi-person-bounding-box"></ion-icon>
                        </span>
                        <span class="title">Professeurs</span>
                    </a>
                </li>
                <li>
                    <a href="CT.php">
                        <span class="icon">
                            <ion-icon class="bi bi-person-lines-fill"></ion-icon>
                        </span>
                        <span class="title">Chef des travaux</span>
                    </a>
                </li>
                <li>
                    <a href="Ass.php">
                        <span class="icon">
                            <ion-icon class="bi bi-people"></ion-icon>
                        </span>
                        <span class="title">Assistants</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon class="bi bi-building"></ion-icon>
                        </span>
                        <span class="title">Départements</span>
                    </a>
                </li>
                <li>
                    <a href="Utilisateur.php">
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
            </ul>
        </div>
        <!----------------------------Main----------------------------->
        <div class="maine">
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
            
        <!----------------------------Order Details List----------------------------->
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Départements</h2>
                    <a href="#" class="btn">View All</a>
                </div>

                <table>
                    <thead>
                        <tr>
                            <td>Num</td>
                            <td>Nom</td>
                            <td>Descriptions</td>
                            <td>Action</td>
                        </tr>
                        <?php 
                            try{
                                $bd=new PDO('mysql:host=localhost;dbname=Publications','root','');
                            
                            }catch(ExceptionPDO $e){
                                echo 'Erreur' .$e;
                            }
                            $sql=$bd->query('SELECT* FROM Departement');
                            $index=1;
                            while($aff=$sql->fetch()){?>
                    </thead>

                    <tbody>
                    <tr>
                        <td> <?php echo $index; ?> </td>
                        <td> <?php echo $aff['Nom']; ?> </td>
                        <td> <?php echo $aff['Description']; ?> </td>
                        <td>
                            <a href="SupprimerDep.php?IdDep=<?php echo $aff['IdDep']; ?>" class="Sup">
                                <ion-icon class="bi bi-trash"></ion-icon>
                            </a>
                            <a href="ModifierDep.php?IdDep=<?php echo $aff['IdDep']; ?>" class="Mod">
                                <ion-icon class="bi bi-file-plus"></ion-icon>
                            </a>
                        </td>
                        <!--<td><span class="status delivered">Delivered</span></td>-->
                    </tr>

                    </tbody>

                  <?php $index++; } ?>
                </table>
                <div class="inputboite">
                    <a href="FormDepart.php" class="btn2"><ion-icon class="bi bi-person-plus"></ion-icon></a>
                </div> 
            </div>
        </div>
    </div>
</div>
    <script src="Js/maine.js"></script>
</body>
</html>