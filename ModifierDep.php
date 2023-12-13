<?php
$bd=new PDO('mysql:host=localhost; dbname=Publications','root','');

if(isset($_GET['IdDep'])){
    $Id=$_GET['IdDep'];

    $sql=$bd->query("SELECT * FROM departement WHERE IdDep=$Id");
    $result=$sql->fetch();

}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Sheria-icons/Sheria-icons.css" rel="stylesheet">
    <title>Modification Departements</title>
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
        margin-left: 40px;
    }

    .deux {
        margin-left: 39px;
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
        margin-left: 40px;
        cursor: pointer;
    }
    .huit {
        margin-left: 80px;
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
        font-size: 20px;
    }
    h1 {
        margin-left: 45px;
        font-size: 28px;
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
        <section><strong><h1>Formulaire des Departements</h1></strong> 
            <form id="monForm" action="" method="post">
                <fieldset>
                    <legend id="cont"><strong>Departements</strong></legend><br/>
                        <table>
                            <tbody>
                                <!--<tr> 
                                    <td><label for="Numéro"><strong>Numéro: </strong></label></td>
                                    <td><input id="IdDep" class="un" name="IdDep" value="0" type="number" min="0" max="6" /></td>
                                </tr>-->
                                <tr> 
                                    <td><label for="Nom"><strong>Nom: </strong></label></td>
                                    <td><input id="Nom" type="text" name="Nom" value= "<?php echo $result['Nom']; ?>"  class="un" required="required" /></td>
                                </tr>
                                <tr>
                                    <td id="Description"><label for="Description" class="Description"><strong>Description: </strong></label></td>
                                    <td><input id="Description" type="text" name="Description" value= "<?php echo $result['Description']; ?>"  class="deux" required="required" /></td>
                                </tr>
                            </tbody>
                        </table>
                </fieldset>
                <br/>
                <br/>
                <tr>
                    <td>
                        <input id="Submit1" class="sub" type="submit" name="enregistrer" value="Enregistrer" />
                        <a href="Depart.php" class="lien"><ion-icon class="bi bi-reply-all"></ion-icon></a>
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
    $Description=$_POST['Description'];

$code=$bd->prepare("UPDATE departement SET Nom=? , Description=? WHERE IdDep=$Id");
$ex=$code->execute(array($Nom,$Description));
if($ex){
    header('location:Depart.php');
} else {
    echo 'erreur';
}
}

?>