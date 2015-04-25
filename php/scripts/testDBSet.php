<?php
    $dbhost = 'localhost:3306';
    $dbuser = 'guest';
    $dbpass = 'guest123';
    $conn = new mysqli($dbhost, $dbuser, $dbpass, "test_db");
    if(! $conn )
    {
        die('Could not connect: ' . $conn->connect_error);
    }
    $sql = 'INSERT INTO employee '.
    '(emp_name,emp_address, emp_salary, join_date) '.
    'VALUES ( "guest", "XYZ", 2000, NOW() )';
    'VALUES ( "guest2", "XYZ", 2000, NOW() )';
    'VALUES ( "guest3", "XYZ", 2000, NOW() )';
    'VALUES ( "guest4", "XYZ", 2000, NOW() )';
    'VALUES ( "guest5", "XYZ", 2000, NOW() )';
    'VALUES ( "guest6", "XYZ", 2000, NOW() )';
    'VALUES ( "guest7", "XYZ", 2000, NOW() )';
    'VALUES ( "guest8", "XYZ", 2000, NOW() )';
    'VALUES ( "guest9", "XYZ", 2000, NOW() )';
    'VALUES ( "guest10", "XYZ", 2000, NOW() )';
    'VALUES ( "guest"11, "XYZ", 2000, NOW() )';
    'VALUES ( "guest12", "XYZ", 2000, NOW() )';
    'VALUES ( "guest"24, "XYZ", 2000, NOW() )';
    
    
    $retval = $conn->query($sql);
    if(! $retval )
    {
        echo 'Could not insert into table employee: ' . "$conn->error";
    }
    else
    {
        echo "Insert successfully into table employee \n";
    }
    mysqli_close($conn);
?>