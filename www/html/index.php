<?php

    //phpinfo();
    
//     var_dump();
    
// exit();

    $host = getenv('MARIADB_HOST');
    $port = getenv('MARIADB_PORT');
    $dbname = getenv('MARIADB_DATABASE');
    $user = getenv('MARIADB_USER');
    $password = getenv('MARIADB_PASSWORD');

    try {
        $dbh = new PDO('mysql:host=' . $host . ';port=' . $port . ';', $user, $password);
        foreach($dbh->query('SHOW DATABASES;') as $row) {
            print_r($row);
        }
        $dbh = null;
    } catch (PDOException $e) {
//         print "Error!: " . $e->getMessage() . "<br/>";
var_dump($e);
        die();
    }
    
