<?php 


    try{

        $bd=new PDO('mysql:host=localhost;dbname=Publications','root','');
      
       
        }
        catch(ExceptionPDO $e){
        echo 'Erreur ' .$e;
        }


?>