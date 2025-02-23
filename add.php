<?php
require 'imports/require.php'; // import $tasks variable
// Load existing tasks                                   // this second parameter converts the json object into an associative array
// Check if form is submitted and task is not empty
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['task'])) {
    // Add new task to the array
    $tasks[] = ['name' => $_POST['task'], 'completed' => false];

    // Save updated tasks back to JSON file
    file_put_contents('tasks.json', json_encode($tasks, JSON_PRETTY_PRINT));
}

// Redirect back to the main page
header('Location: index.php');
exit;