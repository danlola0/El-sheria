<?php 
session_start();

try{

    $bd=new PDO('mysql:host=localhost;dbname=Publications','root','');
      
    
    }
    catch(ExceptionPDO $e){
    echo 'Erreur ' .$e;
    }


if(isset($_POST['connecte'])){

if(!empty($_POST['nom'])  || !empty($_POST['password']) ){
$recevoir=$bd->prepare('SELECT * FROM connecter WHERE nom=? AND password=?');
$recevoir->execute(array($_POST['nom'],$_POST['password']));
$count=$recevoir->rowcount();
$count2=$recevoir->fetch();
if($count >0){
$_SESSION['nom']=$_POST['nom'];
$_SESSION['id']=$count2['IdCon'];
header('location:index.php');


}else{
    $errorPrime='<span style="color:red;">Name ou Password<br/>n\'est pas valide</span>';
    
}
}else{

$errorPrime='<span style="color:red;">Veuillez remplir tous les champs</span>';
} 

}

?>

<?php 
if(isset($_POST['enregistrer'])){
$sql1=$bd->prepare('INSERT INTO connecter values(null,:nom ,:gmail ,:password)');
    $sql1->bindValue(':nom',$_POST['nom']);
    $sql1->bindValue(':gmail',$_POST['gmail']);    
    $sql1->bindValue(':password',$_POST['password']);
    $re=$sql1->execute();

}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="SignSty/SignSty.css">
    <link rel="stylesheet" href="JVS/JVS.Js">
    <!--<link href="Sheria-icons/Sheria-icons.css" rel="stylesheet">-->
    <title>Sign In & Sign Up From</title>
</head>
<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="SignUp.php" method="post" autocomplete="off" class="sign-in-form">
                        <div class="logo">
                            <img src="Img/logo.png" alt="easyclass">
                            <h4>Université de Kinshasa</h4>
                        </div>

                        <div class="heading">
                            <h2>Content de vous revoir.</h2>
                            <h6>Pas encore inscrit ?</h6>
                            <a href="#" class="toggle">S'inscrire</a>
                        </div> 
                        <strong><?php if(isset($errorPrime)){echo $errorPrime;} ?></strong> 
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input 
                                type="text" 
                                minlength="4"
                                name="nom"
                                class="input-field" 
                                autocomplete="off"
                                required
                                />
                                <label>Name</label>
                            </div>

                            <div class="input-wrap">
                                <input 
                                type="password" 
                                name="password" 
                                minlength="4" 
                                class="input-field" 
                                autocomplete="off"
                                required
                                />
                                <label>Password</label>
                            </div>

                            <input type="submit" name="connecte" value="Sign In" class="sign-btn"/>

                            <p class="text">
                                Oublié votre mot de passe ou vos informations de connexion ?</br>
                                <a href="#">Obtenir l'aide</a> Connectez-vous !
                            </p>
                        </div> 
                    </form>

                    <form action="SignUp.php" method="post" autocomplete="off" class="sign-up-form">
                        <div class="logo">
                            <img src="Img/logo.png" alt="easyclass">
                            <h3>Université de Kinshasa</h3>
                        </div>

                        <div class="heading">
                            <h2>Commencer.</h2>
                            <h6>Vous avez déjà un ccompte ?</h6>
                            <a href="#" class="toggle">Se connecter</a>
                        </div> 

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input 
                                type="text" 
                                name="nom"
                                minlength="4" 
                                class="input-field" 
                                autocomplete="off"
                                required
                                />
                                <label>Name</label>
                            </div>

                            <div class="input-wrap">
                                <input 
                                type="email"
                                name="gmail"
                                class="input-field" 
                                autocomplete="off"
                                required
                                />
                                <label>Email</label>
                            </div>

                            <div class="input-wrap">
                                <input 
                                type="password" 
                                name="password"
                                minlength="4" 
                                class="input-field" 
                                autocomplete="off"
                                required
                                />
                                <label>Password</label>
                            </div>

                            <input type="submit"  name="enregistrer"  value="Sign Up" class="sign-btn"/>

                            <p class="text">
                                En m'inscrivant, j'accepte les : </br>
                                <a href="#">conditions d'utilisations</a> et 
                                <a href="#">politiques de confidentialité.</a>
                            </p>
                        </div> 
                    </form>
                </div>

                <div class="carousel">
                    <div class="images-wrapper">
                        <img src="Img/features-12.png" class="image img-1 show" alt=""/>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- Java Script-->
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="JVS/JVS.js"></script>
</body>
</html>