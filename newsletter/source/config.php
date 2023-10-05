<?php
$servername = "localhost"; // Database hostnaam
$username = "jouw_gebruikersnaam"; // Gebruikersnaam voor de database
$password = "jouw_wachtwoord"; // Wachtwoord voor de database
$dbname = "jouw_databasenaam"; // Databasenaam

// Maak een verbinding met de database
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
