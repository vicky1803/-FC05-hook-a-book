<?php
// Database configuration
$host = 'your_host';
$dbname = 'your_database_name';
$username = 'your_username';
$password = 'your_password';

// Establish database connection
$dsn = "mysql:host=$host;dbname=$dbname";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
];
try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Check if the message is provided
if (isset($_POST['message'])) {
    $message = $_POST['message'];

    // Insert the message into the database
    $sql = "INSERT INTO messages (message) VALUES (:message)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['message' => $message]);
}
?>
