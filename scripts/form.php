<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $wonder = $_POST["wonder-option"];
    $date = $_POST["date"];
    $story = $_POST["story"];
    // Brings in all the data from the HTML form and then stores it in the corresponding variables

    $file = fopen("../database.csv", "a");
    // Opens up a CSV file in the append mode, will create a file if it doesn't exist

    fputcsv($file, [$fname, $lname, $email, $wonder, $date.$story]);
    //  Writes to teh CSV file

    fclose($file);
    // Closes the file

    echo "Data submitted successfully!";
}<?php