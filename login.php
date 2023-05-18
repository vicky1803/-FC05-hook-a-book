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

// Check if the login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Retrieve user from the database
    $query = "SELECT * FROM users WHERE username = :username";
    $statement = $pdo->prepare($query);
    $statement->execute(['username' => $username]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    // Validate user credentials
    if ($user && password_verify($password, $user['password'])) {
        // Successful login
        session_start();
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        // Invalid credentials
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <form method="post" action="login.php">
            <h2>Login</h2>
            <?php if (isset($error)) : ?>
                <div class="error"><?php echo $error; ?></div>
            <?php endif; ?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <div class="input-group">
                <button type="submit" class="btn">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
