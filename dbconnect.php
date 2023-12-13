<?php

function connect(){
    try {
        $conn = new mysqli("localhost", "root", "", "kamadoing");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    } catch (Exception $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
?>
