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

        function loginAdmin($data){
    
            try {
                $uname = $data['Naam'];
                $pass = $data['Wachtwoord'];
                $sql = "SELECT * FROM gebruiker WHERE Naam = '$uname' AND Wachtwoord = '$pass' AND role = '$roll'";

                    if (connect()->query($sql)) {
                        header("Location: receptenAdmin.php");
                    }
                }catch (Exception $e) {
                    echo "Account could not be added.";
                }
            }

            if (isset($data['submit'])) {
                $wachtwoord = $data['wachtwoord'];
                $role = 'admin';    
        }

    function receptenAdmin($data){
        require('dbconnect.php');

        $sql = "SELECT * FROM recepten";
        $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                echo "ID: " . $row["id"] . "<br>";
                echo "Naam: " . $row["naam"] . "<br>";
                echo "Beschrijving: " . $row["beschrijving"] . "<br><br>";
            }
        } else {
            echo "Geen recepten gevonden";
    }
}

    
function contact($data){

    if (isset($data['submit'])) {
        if (!empty($data['naam']) && !empty($data['achternaam']) && !empty($data['beschrijving'])) {
            $contact_naam = $data["naam"];
            $contact_achternaam = $data["achternaam"];
            $contact_beschrijving = $data["beschrijving"];
            
            $sql = "INSERT INTO `contactberichten` VALUES (NULL, '$contact_naam', '$contact_achternaam', '$contact_beschrijving')";
            try {
                connect()->query($sql);
                connect()->close();
                echo '<script>alert("Uw Bericht is verzonden.")</script>';
            } catch (Exception $e) {
                $error = "Niet Gelukt Probeer het opnieuw";
                die($error);
            }
        } else {
            echo "Vul alle velden in";
        }
    }
}
?>