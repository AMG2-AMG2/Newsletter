<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $newsletterTypes = isset($_POST["newsletter-type"]) ? $_POST["newsletter-type"] : [];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Ongeldig e-mailadres.";
    } else {
        $servername = "jouw_servernaam";
        $username = "jouw_gebruikersnaam";
        $password = "jouw_wachtwoord";
        $dbname = "jouw_databasenaam";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connectie mislukt: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO subscribers (email, newsletter_type) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $newsletterType);

        foreach ($newsletterTypes as $newsletterType) {
            $stmt->execute();
        }

        $stmt->close();
        $conn->close();

        echo "Bedankt voor het abonneren!";
    }
}
