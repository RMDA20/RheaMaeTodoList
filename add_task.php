<?php
include 'indexs.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task = $_POST['task'];
    $sql = "INSERT INTO tasks (task) VALUES ('$task')";
    $conn->query($sql);
    header("Location: indexs.php");
}
?>