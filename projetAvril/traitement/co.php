<?php
    require 'database.php';
    
    if(isset($_POST)){
        $email = $_POST['email'];
        $pass1 = $_POST['mdp'];
    
        $db = Database::Connect();
    $verify = $db -> prepare("SELECT * FROM user WHERE email=? AND mdp=?");
    
    $verify -> execute(array($email, $pass1));
     if($test = $verify -> fetch()){ 
        session_start();
        $_SESSION['ID'] = $test['ID'];
        header("location:../dash.php");
        }
        else{
            header("location:../accueil.php");
     }
}

?>