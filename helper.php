<?php
require "dbconnect.php";

function register($data){
    
    if (isset($_POST['submit'] )) {
        $Naam = $_POST['Naam'];
        $wachtwoord = $_POST['wachtwoord'];
        $role = 'student';
    
        if ($_POST['wachtwoord'] != $_POST['herhaal_wachtwoord']) {
            echo ('<script>alert("Wachtwoorden komen niet overeen, probeer het opnieuw.")</script>'); 
            return;
        }
    
        $sql = "INSERT INTO gebruiker (Naam, Wachtwoord, role) VALUES ('$Naam', '$wachtwoord', '$role')";
    
        try {
            if ($conn->query($sql)) {
                header("Location: login.php");
            }
        } catch (Exception $e) {
            echo "Account could not be added.";
        }
    }
}

function login ($data){
    
 
}


?>