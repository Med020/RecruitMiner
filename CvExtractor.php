<?php

// define database connection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recruitdb";

// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// retrieve resume file path
$resume_file = $_FILES['resume']['tmp_name'];

// extract text from resume file
$text = shell_exec("pdftotext $resume_file -");

// parse text and retrieve resume information
$name = $email = $phone = $address = $summary = $education = $experience = "";
$lines = explode("\n", $text);
foreach ($lines as $line) {
    if (strpos($line, "Name:") !== false) {
        $name = trim(str_replace("Name:", "", $line));
    } elseif (strpos($line, "Email:") !== false) {
        $email = trim(str_replace("Email:", "", $line));
    } elseif (strpos($line, "Phone:") !== false) {
        $phone = trim(str_replace("Phone:", "", $line));
    } elseif (strpos($line, "Address:") !== false) {
        $address = trim(str_replace("Address:", "", $line));
    } elseif (strpos($line, "Summary:") !== false) {
        $summary = trim(str_replace("Summary:", "", $line));
    } elseif (strpos($line, "Education:") !== false) {
        $education = trim(str_replace("Education:", "", $line));
    } elseif (strpos($line, "Experience:") !== false) {
        $experience = trim(str_replace("Experience:", "", $line));
    }
}

// insert data into database
$sql = "INSERT INTO resumes (name, email, phone, address, summary, education, experience) VALUES ('$name', '$email', '$phone', '$address', '$summary', '$education', '$experience')";

if (mysqli_query($conn, $sql)) {
    echo "Resume information has been successfully saved.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// close database connection
mysqli_close($conn);
?>
