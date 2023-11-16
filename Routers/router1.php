<?php 
require_once "../Controllers/AthentController.php";
include_once '../Modules/Connexion.php';
    $authentifant=new AthentControllers();
    $result=false;
    if(isset($_POST["email"],$_POST["pass"],$_POST["type"])){
           $result = $authentifant->store($_POST["email"],$_POST["pass"],$_POST["type"]);
    }
    if(!$result){
        header("Location:../Views/login.php?Invalide=false");
        exit();
    }
    header("location:../index.php");

    

?>