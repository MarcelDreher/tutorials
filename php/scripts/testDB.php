<?php
    $dbhost = 'localhost:3306';
    $dbuser = 'guest';
    $dbpass = 'guest123';
    $conn = new mysqli($dbhost, $dbuser, $dbpass);
    if(! $conn )
    {
        die('Could not connect: ' . mysqli_error());
    }
    echo 'Connected successfully', "<br>";
    
    if(!$conn->select_db('test_db' ))
    {
        $sql = "CREATE Database test_db";
        $retval = mysqli_query($conn, $sql);
        
        if(!$retval)
        {
            die('Could not create database: ' . mysql_error());
        }
        echo "Database test_db created successfully \n";
    }
    else 
    {
        $sql = 'CREATE TABLE employee( '.
        'emp_id INT NOT NULL AUTO_INCREMENT, '.
        'emp_name VARCHAR(20) NOT NULL, '.
        'emp_address  VARCHAR(20) NOT NULL, '.
        'emp_salary   INT NOT NULL, '.
        'join_date    TIMESTAMP(6) NOT NULL, '.
        'primary key ( emp_id ))';
        $retval = $conn->multi_query($sql);
        if(!$retval)
        {
    
            echo 'Could not create table: '. "$conn->error" ;
        }
        else
        {
            echo "Table employee created successfully\n";
            }
    }
    mysqli_close($conn);
?>