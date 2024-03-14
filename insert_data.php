<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "your_password";
$dbname = "kenko_system_database";

// Establishing a connection to the database
$conn = new mysqli('localhost', 'root', '', 'Kenko_system_database');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$name = $_POST['name'];
$category = $_POST['category'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];
$blk = $_POST['blk'];
$barangay = $_POST['barangay'];
$city = $_POST['city'];
$program = $_POST['program'];
$signUpDate = $_POST['sign-up'];
$chosenPackage = $_GET['program'];



// --- Member ---
//note(post)
//status(get)
//Category(get)[Student,Non-Student]


// --- Session ---
//time-in(post)
//time-out(post)
//session-date(post)


/// -- Package ---
//package-name(get)
//package-duration(post)
//package-rate(get)
//package-program(get)
//package-type(get)


// --- Transaction ---
//payment-type(get)
//payment-total(post)
//transaction-date(post)




// Prepare and bind SQL statement
$stmt = $conn->prepare("INSERT INTO your_table_name (name, category, gender, contact, blk, barangay, city, program, sign_up_date, chosen_package) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssss", $name, $category, $gender, $contact, $blk, $barangay, $city, $program, $signUpDate, $chosenPackage);

// Execute the statement
$stmt->execute();

// Close statement and database connection
$stmt->close();
$conn->close();

// Redirect back to the homepage after insertion
header("Location: Kenko_home.html");
exit();
?>