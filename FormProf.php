<?php

$bd=new PDO('mysql:host=localhost; dbname=publications','root','');
$sql1 = $bd->query("SELECT * FROM connecter"); 
$count1 = $sql1->rowCount(); 

if(isset($_POST['enregistrer'])){
$sql=$bd->prepare("INSERT INTO professeur (Nom, Postnom, Prenom, Email, Tel, Sexe, Article, Date, Pdf, FKIdDep) VALUES (:Nom, :Postnom, :Prenom, :Email, :Tel, :Sexe, :Article, :Date, :Pdf, :FKIdDep)");
    $sql->bindValue(':Nom',$_POST['Nom']);
    $sql->bindValue(':Postnom',$_POST['Postnom']);
    $sql->bindValue(':Prenom',$_POST['Prenom']);
    $sql->bindValue(':Email',$_POST['Email']);
    $sql->bindValue(':Tel',$_POST['Tel']);
    $sql->bindValue(':Sexe',$_POST['Sexe']);
    $sql->bindValue(':Article',$_POST['Article']);
    $sql->bindValue(':Date',$_POST['Date']);
    $sql->bindValue(':Pdf',$_POST['Pdf']);
    $sql->bindValue(':FKIdDep',$_POST['FKIdDep']);
    $re=$sql->execute();

    $selectProfPublication=$bd->query("SELECT * FROM professeur ORDER BY IdProf DESC");
    $result2=$selectProfPublication->fetch();
    while ($result=$sql1->fetch()) {
        //echo '<br/>'.$result['IdCon'];
        $insert_notification=$bd->prepare("INSERT INTO notification (idCon,id_target,type) VALUES (?,?,?)");
        $insert_notification->execute(array($result['IdCon'],$result2['IdProf'],'prof'));
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Sheria-icons/Sheria-icons.css" rel="stylesheet">
    <title>Formulaire Professeurs</title>
    <style type="text/css">
    .gray {
        width: 100%;
        min-height: 100vh; 
        display: flex; 
        align-items: center;
        justify-content: center;
        background-color: #eef5f5;
    }
    td {
        padding: 10px;
    }
    fieldset {
        border-radius: 2rem;
        background-color: rgba(0, 0, 10, 0);
        width: 100%;
    }
    .un {
        margin-left: 75px;
    }
    .sub {
        margin-left: 40px;
        background-color: green;
        font-size: 20px;
        cursor: pointer;
    }
    .res {
        margin-left: 150px;
        background-color: red;
        font-size: 20px;
        cursor: pointer;
    }
    #cont {
        font-size: 35px;
    }
    h1 {
        margin-left: 118px;
        font-size: 30px;
        text-decoration: underline;
    }
    option {
        font-size: 20px;
    }
    .lien {
        margin-left: 100px;
        color: black;
        font-size: 30px;
        cursor: pointer;
    }
    .lien:hover {
        color: blue;
        font-size: 35px;
        transition: .5s;
    }
    </style>
</head>
<body>
    <section class="gray">
        <section><strong><h1>Formulaire des Professeurs</h1></strong> 
            <form id="monForm" form action="" method="POST" >
                <fieldset>
                    <legend id="cont"><strong>Professeurs</strong></legend><br/>
                    <table>
                        <tbody>
                            <tr> 
                                <td><label for="Nom"><strong>Nom: </strong></label></td>
                                <td><input id="Nom" type="text" name="Nom" class="un" required="required" placeholder="Votre nom" autofocus oninput="validation_Element(this)" /></td>
                            </tr>
                            <tr> 
                                <td><label for="Postnom"><strong>Postnom: </strong></label></td>
                                <td><input id="Postnom" type="text" name="Postnom" class="un" required="required" placeholder="Votre postnom" /></td>
                            </tr>
                            <tr>
                                <td><label for="Prénom"><strong>Prenom: </strong></label></td>
                                <td><input id="Prénom" type="text" name="Prenom" class="un" required="required" placeholder="Votre prenom" /></td>
                            </tr>
                            <tr>
                                <td><label for="Email"><strong>Email: </strong></label></td>
                                <td>
                                    <input 
                                    type="email"
                                    class="un"
                                    name="Email" 
                                    autocomplete="off"
                                    placeholder="Votre Email"
                                    required
                                    />
                                </td>
                            </tr>
                            <tr> 
                                <td><label for="Tél"><strong>Tél: </strong></label></td>
                                <td> <input id="Tél" type="Tél" name="Tel" class="un" placeholder="+243" pattern="{13}" /></td>
                            </tr>
                            <tr> 
                                <td><label id="Sexe"><strong>Sexe: </strong></label></td>
                                <td>
                                    <input id="Radio1" type="radio" class="un"  value="M" required="required" name="Sexe" /><label>M</label>
                                    <input id="Radio2" type="radio" class="un" value="F" required="required" name="Sexe" /><label>F</label>
                                </td>
                            </tr>
                            <tr>
                                <td id="Article"><label for="Article"><strong>Titre: </strong></label></td>
                                <td><textarea id="TextArea1" class="un" name="Article" cols="20" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td id="DatePub"><label for="DatePub"><strong>Date Publication: </strong></label></td>
                                <td><input id="DatePub" class="un" name="Date" type="Date" /><br/><br/></td>
                            </tr>
                            <tr>
                                <td id="Pdf"><label for="Pdf"><strong>Pdf: </strong></label></td>
                                <td><input type="file" class="un" name="Pdf" id = "file"></td>
                            </tr>
                            <tr>
                                <td><label for="Formation"><strong>Departement: </strong></label></td>
                                <td><input id="Departement" class="un" name="FKIdDep" value="0" type="number" min="0" max="6" /></td>
                            </tr>
                        </tbody>
                    </table>
                </fieldset>
                </br>
                </br>
                <tr>
                    <td>
                        <input id="Submit1" class="sub" name="enregistrer" type="submit" value="Enregistrer" />
                        <a href="Professeur.php" class="lien"><ion-icon class="bi bi-reply-all"></ion-icon></a>
                        <input id="Reset1" class="res" name="Effacer" type="reset" value="Effacer" />
                    </td>
                </tr>
            </form>
        </section>
    </section>
</body>
</html>