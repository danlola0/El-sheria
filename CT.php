<?php
//database connection details

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "publications";

 $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);


 if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

//Fetch the uploaded files from the database

$sql = "SELECT *FROM ct";
$result = $conn->query($sql);

?>


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
            margin-left: 47%;
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
                    <a href="#">
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
                    <a href="Depart.php">
                        <span class="icon">
                            <ion-icon class="bi bi-building"></ion-icon>
                        </span>
                        <span class="title">Departements</span>
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
            
        <!----------------------------Order Details List----------------------------->
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Chef des travaux</h2>
                    <a href="#" class="btn">View All</a>
                </div>

                <table>
                    <thead>
                        <tr>
                            <td>Num</td>
                            <td>Nom</td>
                            <td>Postnom</td>
                            <td>Prenom</td>
                            <td>Email</td>
                            <td>Titre</td>
                            <td>Date Publiations</td>
                            <td>PDF</td>
                            <td>Prof</td>
                            <td>Département</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        // Display the uploaded files and download links
                        $index=1;
                        if ($result->num_rows > 0) {
                         while ($row = $result->fetch_assoc()) {
                        $file_path = "uploads/" . $row['Pdf'];
                    ?>
                        <tr>
                            <td> <?php echo $index; ?> </td>
                            <td><?php echo $row['Nom']; ?></td>
                            <td><?php echo $row['Postnom']; ?></td>
                            <td><?php echo $row['Prenom']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['Article']; ?></td>
                            <td><?php echo $row['Date']; ?></td>
                            <td><a href="<?php echo $file_path; ?>" download>Telecharger.</a></td>
                            <td><?php echo $row['FKIdProf']; ?></td>
                            <td><?php echo $row['FKIdDep']; ?></td>
                            <td>
                                <a href="SupprimerCT.php?IdCt=<?php echo $row['IdCt']; ?>" class="Sup">
                                    <ion-icon class="bi bi-trash"></ion-icon>
                                </a>
                                <a href="ModifierCT.php?IdCt=<?php echo $row['IdCt']; ?>" class="Mod">
                                    <ion-icon class="bi bi-file-plus"></ion-icon>
                                </a>
                            </td>
                            <!--<td><span class="status delivered">Delivered</span></td>-->
                        </tr>
                        <?php 
                        $index++;
                            }
                        } else {
                        ?>
                    <?php
                    }
                    ?>
                    </tbody>
                </table>
                <div class="inputboite">
                    <a href="FormCT.php" class="btn2"><ion-icon class="bi bi-person-plus"></ion-icon></a>
                </div> 
            </div>
        </div>
    </div>
</div>
    <script src="Js/main.js"></script>
</body>
</html>