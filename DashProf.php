<?php
session_start();
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

$sql = "SELECT *FROM prof";
$result = $conn->query($sql);

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
                    <a href="DashEtude.php">
                        <i class="bi bi-house"></i>
                        <span class="link-name"><strong>Dashboard</strong></span>
                    </a>
                </li>

            <?php 

$con = new PDO('mysql:host=localhost; dbname=publications','root',''); 

 
$sql1 = $con->query("SELECT * FROM notification WHERE state='on' AND type='prof' AND idCon='".$_SESSION['id']."'"); 
$count2 = $sql1->rowCount();
$count1 = $sql1->rowCount();
if($count2>0){
    while($take_notification=$sql1->fetch()){
        $update= $con->prepare("UPDATE notification SET state ='off' WHERE type='prof' AND idCon='".$_SESSION['id']."'");
        $update->execute();
    }
    $count1=0;
}

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
                    <a href="#" id="messages-notification">
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
                </li>
            </ul>
            <ul class="logout-mode">
                <li>
                    <a href="index.php">
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
                <div class="activity">
                    <div class="title">
                        <i class="bi bi-stopwatch-fill"></i>
                        <span class="text">Récentes Publications des Professeurs</span>
                    </div>
                    <div class="activity-data">
                        <table>
                            <thead>
                                <tr>
                                    <td><span class="data-title"><strong>Num</strong></span></td>
                                    <td><span class="data-title"><strong>Nom</strong></span></td>
                                    <td><span class="data-title"><strong>Email</strong></span></td>
                                    <td><span class="data-title"><strong>Titre</strong></span></td>
                                    <td><span class="data-title"><strong>Date Publications</strong></span></td>
                                    <td><span class="data-title"><strong>Pdf</strong></span></td>
                                    <td><span class="data-title"><strong>Départements</strong></span></td>
                                </tr>
                            </thead>
                            <?php
                                // Display the uploaded files and download links
                                $index=1;
                                if ($result->num_rows > 0) {
                                 while ($row = $result->fetch_assoc()) {
                                $file_path = "uploads/" . $row['Professeur_Pdf'];
                            ?>
                            <tbody>
                                <tr class="message">
                                    <td><span class="data-list"><?php echo $index; ?></span></td>
                                    <td><span class="data-list"><e><?php echo $row ['Professeur_Nom']; ?></e></span></td>
                                    <td><span class="data-list"><?php echo $row ['Professeur_Email']; ?></span></td>
                                    <td><span class="data-list"><?php echo $row ['Professeur_Article']; ?></span></td>
                                    <td><span class="data-list"><?php echo $row ['Professeur_Date']; ?></span></td>
                                    <td><span class="data-list"><a href="<?php echo $file_path; ?>" download>Telecharger.</a></span></td>
                                    <td><span class="data-list"><?php echo $row ['Departement_Nom']; ?></span></td>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="JavEtude/JavEtude.js"></script>
</body>
</html>