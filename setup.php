<?php
/**
 * Setup Database Script for QuickPOS
 * Run this file in your browser to automatically create the database and table.
 */

$db_host = 'localhost';
$db_user = 'root';
$db_pass = ''; // Default XAMPP/MAMP password is often empty or 'root'

try {
    // Connect to MySQL server without selecting a database first
    $pdo = new PDO("mysql:host=$db_host", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create the database
    $pdo->exec("CREATE DATABASE IF NOT EXISTS quickpos_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    echo "✅ Database 'quickpos_db' created successfully (or already exists).<br>";

    // Connect to the specific database
    $pdo->exec("USE quickpos_db");

    // Create the contact_messages table
    $sql = "CREATE TABLE IF NOT EXISTS contact_messages (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        message TEXT NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )";
    $pdo->exec($sql);
    echo "✅ Table 'contact_messages' created successfully.<br>";

    echo "<br>🎉 <strong>Database setup is complete!</strong> You can now use the contact form.";

} catch (PDOException $e) {
    die("❌ Error setting up database: " . $e->getMessage());
}
?>
