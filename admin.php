<?php
/**
 * Admin Panel - QuickPOS
 * Fetches and displays contact messages from the database.
 */

require_once 'includes/db.php';

// Fetch all messages, ordered by newest first
try {
    $stmt = $pdo->query("SELECT * FROM contact_messages ORDER BY created_at DESC");
    $messages = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Error fetching messages: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard — QuickPOS</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body { background-color: var(--color-bg-secondary); padding: 40px 20px; }
        .admin-container {
            max-width: 1000px;
            margin: 0 auto;
            background: var(--color-bg-card);
            border: 1px solid var(--color-border);
            border-radius: var(--radius-lg);
            padding: 30px;
        }
        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            border-bottom: 1px solid var(--color-border);
            padding-bottom: 20px;
        }
        .admin-title { font-size: 2rem; font-weight: 700; }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid var(--color-border);
        }
        th {
            color: var(--color-text-secondary);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
        }
        td { font-size: 0.95rem; }
        .msg-cell { max-width: 300px; }
        .empty-state { text-align: center; padding: 40px; color: var(--color-text-secondary); }
        .badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            background: rgba(108,92,231,0.2);
            color: var(--color-primary-light);
            font-size: 0.8rem;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <div class="admin-header">
            <h1 class="admin-title">Inbox <span class="text-gradient">Messages</span></h1>
            <a href="index.html" class="btn btn--outline">← Back to Site</a>
        </div>

        <?php if (empty($messages)): ?>
            <div class="empty-state">
                <h2>No messages yet</h2>
                <p>When users submit the contact form, their messages will appear here.</p>
            </div>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date & Time</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($messages as $msg): ?>
                        <tr>
                            <td><span class="badge">#<?= htmlspecialchars($msg['id']) ?></span></td>
                            <td><?= htmlspecialchars(date('M j, Y g:i A', strtotime($msg['created_at']))) ?></td>
                            <td><strong><?= htmlspecialchars($msg['name']) ?></strong></td>
                            <td><a href="mailto:<?= htmlspecialchars($msg['email']) ?>" style="color: var(--color-accent);"><?= htmlspecialchars($msg['email']) ?></a></td>
                            <td class="msg-cell"><?= nl2br(htmlspecialchars($msg['message'])) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>
