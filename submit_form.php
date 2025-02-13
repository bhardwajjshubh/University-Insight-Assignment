<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $country = $_POST['country'];

    // Basic validation
    if (empty($name) || empty($email) || empty($phone) || empty($country)) {
        echo "All fields are required.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Process the form data (e.g., save to database, send email)
    // For demonstration, we'll just print the data
    echo "Form submitted successfully!<br>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Phone: " . htmlspecialchars($phone) . "<br>";
    echo "Country: " . htmlspecialchars($country) . "<br>";

    // Optionally, redirect the user to a thank you page
    // header("Location: thank_you.html");
}
?>
