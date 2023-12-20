<?php
// Verbinding maken met de database
require('dbconnect.php');

// Query om alle recepten op te halen
$sql = "SELECT * FROM recepten";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output gegevens van elke rij
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Naam: " . $row["naam"] . "<br>";
        echo "Beschrijving: " . $row["beschrijving"] . "<br><br>";
    }
} else {
    echo "Geen recepten gevonden";
}

// Verbinding sluiten
$conn->close();
?>
