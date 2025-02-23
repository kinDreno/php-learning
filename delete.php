<?php
// Load existing tasks
require 'imports/require.php';

// Check if a valid index is passed
if (isset($_GET['index']) && is_numeric($_GET['index']) && isset($tasks[$_GET['index']])) {
    // Remove the task
    array_splice($tasks, $_GET['index'], 1);

    // Save updated tasks back to JSON file
    file_put_contents('tasks.json', json_encode($tasks, JSON_PRETTY_PRINT));
}

// Redirect back to the main page
header('Location: index.php');
exit;
