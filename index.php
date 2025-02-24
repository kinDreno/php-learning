<?php require 'imports/require.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
    <style type="text/css">
        body {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="add.php" method="POST">
        <input type="text" name='task' required>
        <button type="submit">Add here</button>
        <?php if (empty($tasks)): ?>
            <p>No tasks</p>
            <?php else: ?>
                <ul> 
                    <?php foreach ($tasks as $index => $task): ?>
                        <li>
                            <span style="<?php echo $task['completed'] ? 'text-decoration: line-through;' : '' ?>">
                                <?php echo htmlspecialchars($task['name']) ?>
                            </span>
                            <a href="complete.php?index=<?php echo $index; ?>"></a>
                            <a href="delete.php?index=<?php echo $index; ?>"></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
        <?php endif ?>
        
    </form>
</body>
</html>