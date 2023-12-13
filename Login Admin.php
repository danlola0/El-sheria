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

$sql=('SELECT nom , password FROM Utilisateur where nom=:nom and password=:password');
$recevoir=$bd->prepare($sql);
$recevoir->execute(array('nom'=>$_POST['nom'] ,'password'=>$_POST['password'] ));
$count=$recevoir->rowCount();

if($count >0){
$_SESSION['nom']=$_POST['nom'];
header('location:Dashboard.php');


}else {
    header('location:Login Admin.php');
}
}

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Stylog/LoginStyle.css">
    <link rel="stylesheet" href="Java/Siso.js">
    <link href="Sheria-icons/Sheria-icons.css" rel="stylesheet">
    <title>Login Admin UNIKIN</title>
</head>
<body>
    <img class="wave" src="Img/hero-bg.png" alt="">
    <div class="container">
        <div class="img">
            <img src="Img/hero-img.png" alt="">
        </div>
        <div class="login-container">
            <form action="" method="post">
                <img class="avatar" src="Img/user.png" alt="">
                <h2>Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <div>
                        <h5>Username</h5>
                        <input class="input" name="nom" type="text">
                    </div>
                </div>

                <div class="input-div two">
                    <div class="i">
                        <i class="bi bi-lock-fill"></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input class="input" name="password" type="password">
                    </div>
                </div>
                <a href="#">Forget Password ?</a>
                <input type="submit" name="connecte" class="btn" value="Se connecter">
            </form>
        </div>
    </div>
    <script src="Java/JavLog.js"></script>
</body>
</html>