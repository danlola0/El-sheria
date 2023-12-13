<?php
$bd=new PDO('mysql:host=localhost; dbname=Publications','root','');

if(isset($_GET['IdCt'])){
    $Id=$_GET['IdCt'];

    $sql=$bd->query("SELECT * FROM ct WHERE IdCt=$Id");
    $result=$sql->fetch();

}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Sheria-icons/Sheria-icons.css" rel="stylesheet">
    <title>Modification Chefs des Travaux</title>
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
        margin-left: 58px;
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
        <section><strong><h1>Modification des Chef de Travaux</h1></strong> 
            <form id="monForm" action=" " method="post">
                <fieldset>
                    <legend id="cont"><strong>Chef de Travaux</strong></legend><br/>
                        <table>
                            <tbody>
                                <tr> 
                                    <td><label for="Nom"><strong>Nom: </strong></label></td>
                                    <td><input id="Nom" type="text" name="Nom" value= "<?php echo $result['Nom']; ?>"  class="un" required="required" placeholder="Votre nom" autofocus oninput="validation_Element(this)" /></td>
                                </tr>
                                <tr> 
                                    <td><label for="Postnom"><strong>Postnom: </strong></label></td>
                                    <td><input id="Postnom" name="Postnom" value= "<?php echo $result['Postnom']; ?>"  type="text" class="un" required="required" placeholder="Votre postnom" /></td>
                                </tr>
                                <tr>
                                    <td><label for="Prénom"><strong>Prenom: </strong></label></td>
                                    <td><input id="Prénom" name="Prenom" value= "<?php echo $result['Prenom']; ?>"  type="text" class="un" required="required" placeholder="Votre prenom" /></td>
                                </tr>
                                <tr>
                                    <td><label for="Email"><strong>Email: </strong></label></td>
                                    <td>
                                        <input 
                                        type="email"
                                        class="un" 
                                        value= "<?php echo $result['Email']; ?>" 
                                        name="Email"
                                        autocomplete="off"
                                        placeholder="Votre Email"
                                        required
                                        />
                                    </td>
                                </tr>
                                <tr> 
                                    <td><label for="Tél"><strong>Tél: </strong></label></td>
                                    <td> <input id="Tél"  name="Tel" value= "<?php echo $result['Tel']; ?>"  type="Tel" class="un" placeholder="+243" pattern="{13}" /></td>
                                </tr>
                                <tr> 
                                    <td><label id="Sexe"><strong>Sexe: </strong></label></td>

                                    <td>
                                        <input id="Radio1" type="radio" class="un" value="M" required="required" name="Sexe" /><label>M</label>
                                        <input id="Radio2" type="radio" class="un" value="F" required="required" name="Sexe" /><label>F</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="Article"><label for="Article"><strong>Titre: </strong></label></td>
                                    <td><input id="Article" name="Article" value= "<?php echo $result['Article']; ?>"  type="text" class="un" required="required"/></td>
                                </tr>
                                <tr>
                                    <td id="DatePub"><label for="DatePub"><strong>Date Publication: </strong></label></td>
                                    <td><input id="DatePub" class="un" name="Date" value= "<?php echo $result['Date']; ?>" type="Date" /><br/><br/></td>
                                </tr>
                                <tr>
                                    <td id="Pdf"><label for="Pdf"><strong>Pdf: </strong></label></td>
                                    <td><input type="file" name="Pdf" class="un" value= "<?php echo $result['Pdf']; ?>"></td>
                                </tr>
                                <tr>
                                    <td><label for="Professeur"><strong>Professeur: </strong></label></td>
                                    <td><input id="Professeur" class="un" value= "<?php echo $result['FKIdProf']; ?>"  value="0" name="FKIdProf" type="number" min="0" max="10" /></td>
                                </tr>
                                <tr>
                                    <td><label for="Formation"><strong>Departement: </strong></label></td>
                                    <td><input id="Departement" class="un" value= "<?php echo $result['FKIdDep']; ?>"  value="0" name="FKIdDep" type="number" min="0" max="6" /></td>
                                </tr>
                            </tbody>
                        </table>
                </fieldset>
                <br/>
                <br/>
                <tr>
                    <td>
                        <input id="Submit1" class="sub" type="submit" name="enregistrer" value="Enregistrer" />
                        <a href="CT.php" class="lien"><ion-icon class="bi bi-reply-all"></ion-icon></a>
                        <input id="Reset1" class="res" type="reset" value="Effacer" />
                    </td>
                </tr>
            </form>
        </section>
    </section>
</body>
</html>

<?php

if(isset($_POST['enregistrer'])){
    $Nom=$_POST['Nom'];
    $Postnom=$_POST['Postnom'];
    $Prenom=$_POST['Prenom'];
    $Tel=$_POST['Tel'];
    $Email=$_POST['Email'];
    $Sexe=$_POST['Sexe'];
    $Article=$_POST['Article'];
    $Date=$_POST['Date'];
    $Pdf=$_POST['Pdf'];
    $FKIdProf=$_POST['FKIdProf'];
    $FKIdDep=$_POST['FKIdDep'];

$code=$bd->prepare("UPDATE ct SET Nom=? , Postnom=? , Prenom=? ,Tel=? , Email=? , Sexe=? , Article=?, Date=?, Pdf=?, FKIdProf=? , FKIdDep=? WHERE IdCt=$Id");
$ex=$code->execute(array($Nom,$Postnom,$Prenom,$Tel,$Email,$Sexe,$Article,$Date,$Pdf,$FKIdProf,$FKIdDep));
if($ex){
    header('location:Dashboard.php');
} else {
    echo 'erreur';
}
}

?>