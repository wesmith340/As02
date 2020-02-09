<?php
    error_reporting(E_ALL); ini_set('display_errors', 1);

    # connect
    include "pdo_connect.php";

    $id = $_GET['id'];
    $sql1 = "SELECT * FROM messages WHERE id=" . $id;
    $sql2 = "DELETE FROM messages WHERE id=" . $id;

    $query = $pdo->prepare($sql1);
    $query->execute();
    $msg = $query->fetch();

    $query = $pdo->prepare($sql2);
    $query->execute();


    echo '<h1>One element has been removed</h1><br>';
    echo '<p>The message "'. $msg["message"] .'" has been removed</p><br>';
    echo "<a href='display_list.php'>Back to list</a>";
?>

