<?php
try {
    $conn = new mysqli("localhost", "root", "", "kamadoing");
} catch (Exception $e) {
    echo "connection niet goed";
}
?>
