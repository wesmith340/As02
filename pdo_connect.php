<?php
    error_reporting(E_ALL); ini_set('display_errors', 1);

    # connect
    $pdo = new PDO( 
        "mysql:host=".'localhost'.";"."dbname=".'smith_database', 
        'root', 
        'AJE#@Bz7ivht#VD'
    );
?>
