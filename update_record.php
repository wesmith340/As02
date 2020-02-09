<?php
    error_reporting(E_ALL); ini_set('display_errors', 1);
    session_start();
    
    # connect
    include "pdo_connect.php";
    
    $id = $_SESSION['id'];
    $n = $_POST['msg'];
    echo $n;
    $sql = "UPDATE messages SET message='$n' WHERE id = '$id'";
    $query = $pdo->prepare($sql);
    $query->execute();
    echo "<p>Your info has been updated</p><br>";
    echo "<a href='display_list.php'>Back to list</a>"
?>