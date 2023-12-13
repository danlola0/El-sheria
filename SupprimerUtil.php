<?php
$bd=new PDO('mysql:host=localhost; dbname=Publications','root','');

if(isset($_GET['IdUtil'])){
    $Id=$_GET['IdUtil'];

    $sql=$bd->query("SELECT * FROM Utilisateur WHERE IdUtil=$Id");
    $result=$sql->fetch();

}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Sheria-icons/Sheria-icons.css" rel="stylesheet">
    <title>Suppression Utilisateurs</title>
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
        margin-left: 90px;
        background-color: red;
        font-size: 20px;
        cursor: pointer;
    }
    #cont {
        font-size: 35px;
    }
    h1 {
        margin-left: 50px;
        font-size: 30px;
        text-decoration: underline;
    }
    option {
        font-size: 20px;
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
        <section><strong><h1>Suppression des Utilisateurs</h1></strong> 
            <form id="monForm" action="" method="post">
                <fieldset>
                    <legend id="cont"><strong>Utilisateurs</strong></legend><br/>
                    <table>
                        <tbody>
                            <tr> 
                                <td><label for="Nom"><strong>Nom: </strong></label></td>
                                <td><input id="Nom" type="text" name="nom" value= "<?php echo $result['nom']; ?>" class="un" required="required" placeholder="Votre nom" autofocus oninput="validation_Element(this)" /></td>
                            </tr>
                            <tr> 
                                <td><label for="Postnom"><strong>Postnom: </strong></label></td>
                                <td><input id="Postnom" type="text" name="postnom" value= "<?php echo $result['postnom']; ?>" class="un" required="required" placeholder="Votre postnom" /></td>
                            </tr>
                            <tr>
                                <td><label for="Email"><strong>Email: </strong></label></td>
                                <td>
                                <input 
                                    type="email"
                                    class="un"
                                    name="gmail"
                                    value= "<?php echo $result['gmail']; ?>"
                                    autocomplete="off"
                                    placeholder="Votre Email"
                                    required
                                    />
                                </td>
                            </tr>
                            <tr> 
                                <td><label for="Fonction"><strong>Fonction: </strong></label></td>
                                <td><input id="Fonction" type="text" name="fonction" value= "<?php echo $result['fonction']; ?>" class="un" required="required" placeholder="Votre fonction" autofocus oninput="validation_Element(this)" /></td>
                            </tr>
                            <tr>
                                <td><label for="Password"><strong>Password: </strong></label></td>
                                <td>
                                    <input 
                                        type="password" 
                                        minlength="4" 
                                        name="password"
                                        value= "<?php echo $result['password']; ?>"
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
                <br/>
                <br/>
                <tr>
                    <td>
                        <input id="Submit1" class="sub" name="enregistrer" type="submit" value="Enregistrer" />
                        <a href="Utilisateur.php" class="lien"><ion-icon class="bi bi-reply-all"></ion-icon></a>
                        <input id="Reset1" class="res" name="effacer" type="submit" value="Effacer" />
                    </td>
                </tr>
            </form>
        </section>
    </section>
</body>
</html>

<?php

if(isset($_POST['effacer'])){
    $nom=$_POST['nom'];
    $postnom=$_POST['postnom'];
    $gmail=$_POST['gmail'];
    $fonction=$_POST['fonction'];
    $password=$_POST['password']; 
    
    $code=$sql=$bd->prepare("DELETE FROM Utilisateur WHERE IdUtil=? " ) ;
    $ex=$code->execute(array($Id)) ;

    if($result){
    echo 'suppression reussie' ;
    Header('locaton:Utilisateur.php') ;
    } else {
        echo 'pas de suppression' ;
   
   }
   
}
   
?>