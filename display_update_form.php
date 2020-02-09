<?php
    error_reporting(E_ALL); ini_set('display_errors', 1);
    session_start();

    # connect
    include "pdo_connect.php";

    # put the information for the chosen record into variable $results 
    $id = $_GET['id'];
    $_SESSION['id'] = $id;
    $sql = "SELECT * FROM messages WHERE id=" . $id;
    $query=$pdo->prepare($sql);
    $query->execute();
    $result = $query->fetch();
    
    $GLOBALS['id'] = $id;
        
    echo "<h1>Read/view existing message</h1>";
    echo "<form method='post' action='update_record.php'>";
    echo    "message: <input name='msg' type='text' value='". $result['message'] ."'><br />";
    echo    "<input type='submit' value='Submit' id='$id'>";
    echo "</form>";
?>
