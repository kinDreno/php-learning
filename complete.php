<?php
// complete.php - Marks a task as completed

// Load existing tasks from tasks.json
require 'imports/require.php';

if (isset($_GET['index'])) {
    $index = (int)$_GET['index'];

    if (isset($tasks[$index])) {
        $tasks[$index]['completed'] = true; // Mark task as completed
        file_put_contents('tasks.json', json_encode($tasks, JSON_PRETTY_PRINT)); // Save changes
    }
}

header('Location: index.php'); // Redirect back to main page
exit;
?>
