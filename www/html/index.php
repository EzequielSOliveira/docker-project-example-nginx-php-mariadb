<?php

    //phpinfo();
    
//     var_dump();
    
// exit();

    $host = getenv('IP_HOST');
    $dbname = getenv('MARIADB_DATABASE');
    $user = 'root'/*getenv('MARIADB_USER')*/;
    $password = getenv('MARIADB_ROOT_PASSWORD')/*getenv('MARIADB_PASSWORD')*/;
    $port = getenv('PORT_MARIADB');

    try {
        $dbh = new PDO('mysql:host=' . $host . ';', $user, $password);
        foreach($dbh->query('SHOW DATABASES;') as $row) {
            print_r($row);
        }
        $dbh = null;
    } catch (PDOException $e) {
//         print "Error!: " . $e->getMessage() . "<br/>";
var_dump($e);
        die();
    }
    
