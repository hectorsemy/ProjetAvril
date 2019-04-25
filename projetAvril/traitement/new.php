<?php
    require 'database.php';
    /*isset($_POST)= !empty($_POST)*/
    if(isset($_POST)){
        $nom = $_POST['log'];
        
        $email = $_POST['email'];
        
        $mess = $_POST['message'];
        

        $db = Database::Connect();
        
        
        $insert = $db -> prepare("INSERT INTO new( `log`, `email`, `message`) VALUES (?,?,?)");
        
        $insert -> execute(array($nom,$email,$mess));
        header("location:../accueil.php");
}
?>