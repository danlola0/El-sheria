<?php


$bd=new PDO('mysql:host=localhost; dbname=Publications','root','');

if(isset($_POST['enregistrer'])){


$sql=$bd->prepare("INSERT INTO utilisateur (nom, postnom, gmail, fonction, password) VALUES (:nom, :postnom, :gmail, :fonction, :password)");
$sql->bindValue(':nom',$_POST['nom']);
$sql->bindValue(':postnom',$_POST['postnom']);
$sql->bindValue(':gmail',$_POST['gmail']);
$sql->bindValue(':fonction',$_POST['fonction']);
$sql->bindValue(':password',$_POST['password']);
$re=$sql->execute();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Sheria-icons/Sheria-icons.css" rel="stylesheet">
    <title>Formulaire Utilisateurs</title>
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

    .deux {
        margin-left: 50px;
    }
    .trois {
        margin-left: 58px;
    }
    .quatre {
        margin-left: 70px;
    }
    .cinq {
        margin-left: 88px;
    }
    .six {
        margin-left: 80px;
        cursor: pointer;
    }
    .sept {
        margin-left: 80px;
        cursor: pointer;
    }
    .sub {
        margin-left: 40px;
        background-color: green;
        font-size: 20px;
        cursor: pointer;
    }
    .res {
        margin-left: 90px;
        background-color: red;
        font-size: 20px;
        cursor: pointer;
    }
    .input-field {
        margin-left: 40px;
    }
    #cont {
        font-size: 20px;
    }
    h1 {
        margin-left: 50px;
        font-size: 30px;
        text-decoration: underline;
    }
    .lien {
        margin-left: 70px;
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
        <section><strong><h1>Formulaire des Utilisateurs</h1></strong> 
            <form id="monForm" action="" method="post">
                <fieldset>
                    <legend id="cont"><strong>Utilisateurs</strong></legend><br/>
                    <table>
                        <tbody>
                            <tr> 
                                <td><label for="Nom"><strong>Nom: </strong></label></td>
                                <td><input id="Nom" type="text" name="nom" class="un" required="required" placeholder="Votre nom" autofocus oninput="validation_Element(this)" /></td>
                            </tr>
                            <tr> 
                                <td><label for="Postnom"><strong>Postnom: </strong></label></td>
                                <td><input id="Postnom" type="text" name="postnom" class="un" required="required" placeholder="Votre postnom" /></td>
                            </tr>        
                            <tr>
                                <td><label for="Email"><strong>Email: </strong></label></td>
                                <td>
                                    <input 
                                    type="email"
                                    class="un"
                                    name="gmail" 
                                    autocomplete="off"
                                    placeholder="Votre Email"
                                    required
                                    />
                                </td>
                            </tr>
                            <tr> 
                                <td><label for="Fonction"><strong>Fonction: </strong></label></td>
                                <td><input id="Fonction" type="text" name="fonction" class="un" required="required" placeholder="Votre fonction" autofocus oninput="validation_Element(this)" /></td>
                            </tr>
                            <tr>
                                <td><label for="Password"><strong>Password: </strong></label></td>
                                <td>
                                    <input 
                                        type="password" 
                                        minlength="4" 
                                        name="password"
                                        class="un" 
                                        placeholder="Mot de Passse"
                                        autocomplete="off"
                                        required
                                    />
                                </td>
                            </tr> 
                        </tbody>
                    </table>
                </fieldset>
                </br>
                </br>
                <tr>
                    <td>
                        <input id="Submit1" class="sub" name="enregistrer" type="submit" value="Enregistrer" />
                        <a href="Utilisateur.php" class="lien"><ion-icon class="bi bi-reply-all"></ion-icon></a>
                        <input id="Reset1" class="res" name="Effacer" type="reset" value="Effacer" />
                    </td>
                </tr>
            </form>
        </section>
    </section>
</body>
</html>