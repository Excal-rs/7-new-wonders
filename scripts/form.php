<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $wonder = $_POST["wonder-option"];
    $story = $_POST["story"];

    $file = fopen("../database.csv", "a");

    fputcsv($file, [$name, $email, $wonder, $story]);

    fclose($file);

    echo "Data submitted successfully!";
}

?>