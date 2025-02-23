<?php
// import $tasks variable which is the the file that has the datas
require 'imports/require.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <h2>PHP To-Do List</h2>

    <!-- Form to add a new task -->
    <form action="add.php" method="POST">
        <input type="text" name="task" required>
        <button type="submit">Add Task</button>
    </form>

    <!-- Display the task list -->
    <ul>
        <?php foreach ($tasks as $index => $task): ?>
            <li> 
                <!-- Strike-through if the task is completed -->
                <span style="<?php echo $task['completed'] ? 'text-decoration: line-through;' : ''; ?>">
                    <?php echo htmlspecialchars($task['name']); ?>
                </span> 
                <!-- Link to mark the task as completed -->
                <a href="complete.php?index=<?php echo $index; ?>">✔</a>
                <!-- Link to delete the task -->
                <a href="delete.php?index=<?php echo $index; ?>">❌</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
