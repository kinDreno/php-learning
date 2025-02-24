<?php 
    // variable that holds the datas
    $tasks = file_exists('tasks.json') ? json_decode(file_get_contents('tasks.json'), true) : []

?>