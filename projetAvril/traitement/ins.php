<?php
    require 'database.php';
    /*isset($_POST)= !empty($_POST)*/
    if(isset($_POST)){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $phone = $_POST['tel'];
        $pass1 = $_POST['mdp'];
        $pass2 =  $_POST['cmdp'];

        $db = Database::Connect();
        
        $insert = $db -> prepare("INSERT INTO user( `nom`, `prenom`, `email`, `tel`, `mdp`, `cmdp`) VALUES (?,?,?,?,?,?)");
        
        $insert -> execute(array($nom,$prenom,$email,$phone,$pass1,$pass2));
        header("location:../accueil.php");
}
?>