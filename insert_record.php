<?php
error_reporting(E_ALL); ini_set('display_errors', 1);

    # connect
    include "pdo_connect.php";

    $n = $_POST['msg'];
    $sql = "INSERT INTO messages (message) VALUES ('$n')";
    $pdo->query($sql);
    echo "<p>Your info has been added</p><br>";
    echo "<a href='display_list.php'>Back to list</a>"
?>