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

// Check if the search query is provided
if (isset($_GET['query'])) {
    $query = $_GET['query'];

    // Prepare the SQL statement
    $sql = "SELECT * FROM books WHERE title LIKE :query";
    $statement = $pdo->prepare($sql);
    $statement->execute(['query' => '%' . $query . '%']);
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Share App - Search Results</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Book Share App</h2>
        
        <form class="search-form" method="get" action="search.php">
            <input type="text" name="query" placeholder="Search books" value="<?php echo isset($query) ? $query : ''; ?>">
            <button type="submit">Search</button>
        </form>
        
       
