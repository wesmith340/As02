<?php
    error_reporting(E_ALL); ini_set('display_errors', 1);

    # connect
    include "pdo_connect.php";

    # put the information for the chosen record into variable $results 
    $id = $_GET['id'];
    $sql = "SELECT * FROM messages WHERE id=" . $id;
    $query=$pdo->prepare($sql);
    $query->execute();
    $result = $query->fetch();
?>
<h1>Read/view existing message</h1>
<form method='post' action='display_list.php'>
    message: <input name='msg' type='text' value='<?php echo $result['message']; ?>' disabled><br />
    <input type="submit" value="Submit">
</form>
