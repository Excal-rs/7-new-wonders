<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $wonder = $_POST["wonder-option"];
    $story = $_POST["story"];
    // Brings in all the data from the HTML form and then stores it in the corresponding variables

    $file = fopen("../database.csv", "a");
    // Opens up a CSV file in the append mode, will create a file if it doesn't exist

    fputcsv($file, [$name, $email, $wonder, $story]);
    //  Writes to teh CSV file

    fclose($file);
    // Closes the file

    echo "Data submitted successfully!";
}<?php