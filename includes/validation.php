<?php
/**
 * Contact Form Validation & Submission Handler
 * QuickPOS - Backend Processing
 */

require_once __DIR__ . '/db.php';

/**
 * Validate contact form input fields.
 *
 * @param string $name    The user's name.
 * @param string $email   The user's email.
 * @param string $message The user's message.
 * @return array Array of error messages (empty if valid).
 */
function validateContactForm(string $name, string $email, string $message): array
{
    $errors = [];

    if (empty(trim($name))) {
        $errors[] = 'Name is required.';
    }

    if (empty(trim($email))) {
        $errors[] = 'Email is required.';
    } elseif (!filter_var(trim($email), FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address.';
    }

    if (empty(trim($message))) {
        $errors[] = 'Message is required.';
    }

    return $errors;
}

/**
 * Insert a valid contact message into the database.
 *
 * @param PDO    $pdo     The database connection.
 * @param string $name    The user's name.
 * @param string $email   The user's email.
 * @param string $message The user's message.
 * @return bool True on success, false on failure.
 */
function insertContactMessage(PDO $pdo, string $name, string $email, string $message): bool
{
    $stmt = $pdo->prepare(
        "INSERT INTO contact_messages (name, email, message, created_at) VALUES (:name, :email, :message, NOW())"
    );
    return $stmt->execute([
        ':name'    => trim($name),
        ':email'   => trim($email),
        ':message' => trim($message),
    ]);
}

// Only process if this file is accessed directly (not included in tests)
if (php_sapi_name() !== 'cli' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    $errors = validateContactForm($name, $email, $message);

    if (!empty($errors)) {
        // Redirect back with errors
        session_start();
        $_SESSION['errors'] = $errors;
        $_SESSION['old'] = ['name' => $name, 'email' => $email, 'message' => $message];
        header('Location: ../index.php');
        exit;
    }

    // Insert into database
    global $pdo;
    /** @var PDO $pdo */
    $success = insertContactMessage($pdo, $name, $email, $message);

    if ($success) {
        header('Location: ../thankyou.php');
        exit;
    } else {
        die('An error occurred. Please try again.');
    }
}
