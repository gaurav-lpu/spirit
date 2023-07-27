<?php
// Check if the email is submitted through the form
if (isset($_POST['email'])) {
    // Get the email from the POST data
    $email = $_POST['email'];

    // Validate the email address (you can add more validation here if needed)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // Connect to your MySQL database (replace with your credentials)
    $servername = "localhost";
    $username = "root";
    $password = "root123";
    $dbname = "emailid";

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check if the connection is successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query to insert the email into the database
    $stmt = $conn->prepare("INSERT INTO user_emails (email) VALUES (?)");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    // Close the database connection
    $stmt->close();
    $conn->close();

    // Redirect the user back to the homepage or show a success message
    header("Location: index.php");
    exit();
}
?>
