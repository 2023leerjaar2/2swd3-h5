<?php
require "dbconnect.php";

function register($data){
    
    if (isset($data['submit'])) {
        if (isset($data['Naam'])) {
            $Naam = $data['Naam'];
        } else {
            echo ('<script>alert("Naam is niet ingesteld.")</script>');
            return;
        }
        $wachtwoord = $data['wachtwoord'];
        $role = 'student';
    
        if ($data['wachtwoord'] != $data['herhaal_wachtwoord']) {
            echo ('<script>alert("Wachtwoorden komen niet overeen, probeer het opnieuw.")</script>'); 
            return;
        }
    
        $sql = "INSERT INTO gebruiker (Naam, Wachtwoord, role) VALUES ('$Naam', '$wachtwoord', '$role')";
    
        try {
            if (connect()->query($sql)) {
                header("Location: login.php");
            }
        } catch (Exception $e) {
            echo "Account could not be added.";
        }
    }
}


function login($data){
    
    if(!empty($data['Naam']) && !empty($data['Wachtwoord'])) {
        try {
            $uname = $data['Naam'];
            $pass = $data['Wachtwoord'];
            $sql = "SELECT * FROM gebruiker WHERE Naam = '$uname' AND Wachtwoord = '$pass'";
            $result = connect()->query($sql);
    
            if($result->num_rows == 1) {
                session_start();
                $_SESSION['naam'] = $uname;
                $_SESSION['loggedIn'] = true;
                header("Location: index.php");
            } else {
                echo'<script>alert("Inloggegevens zijn onjuist, probeer het opnieuw.")</script>';
            }
        }catch(Exception $e) {
            echo '<script>alert("Verbiding met database is niet gelukt")</script>';
         }
      }
    }
?>