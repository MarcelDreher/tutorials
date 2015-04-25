<?php
    $dbhost = 'localhost:3306';
    $dbuser = 'guest';
    $dbpass = 'guest123';
    $conn = new mysqli($dbhost, $dbuser, $dbpass, "test_db");
    if(! $conn )
    {
        die('Could not connect: ' . $conn->connect_error);
    }
    $sql = 'DROP TABLE employee';
    $retval = $conn->query($sql);
    if(! $retval )
    {
        echo 'Could not delete table employee: ' . "$conn->error";
    }
    else
    {
        echo "Deleted table successfully\n";
    }
    mysqli_close($conn);
?>