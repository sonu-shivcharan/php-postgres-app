<?php
$host = 'postgres_container';
$db   = 'postgres';
$user = 'postgres';
$pass = 'postgres';
$dsn = "pgsql:host=$host;dbname=$db";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h3>Connected to PostgreSQL!</h3>";

    $stmt = $pdo->query("SELECT * FROM users");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "User: " . $row['name'] . " - Email: " . $row['email'] . "<br>";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
