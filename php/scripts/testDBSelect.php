<?php 
    $conn = new mysqli("localhost:3306", "guest", "guest123", "test_db");
    if(!$conn)
    {
        die("Could not connect: " . $conn->connect_error);
    }
    else
    {
        echo "Connected successfully", "<br>";
    }
    $sql = "SELECT emp_id, emp_name, emp_salary FROM employee";
    
    $retval = $conn->query($sql);
    if(!$retval)
    {
        die( "Could not get data: " . $conn->erorr);
    }
    
    /*
        You can also use the constant MYSQL_NUM instead, as argument to
        fetch_array(). This will cause the function to return an array 
        with numeric index.
    */
    while($row = $retval->fetch_array(MYSQL_ASSOC))
    {
        echo "EMP ID : {$row['emp_id']} <br>" .
        "EMP ID : {$row['emp_name']} <br>" .
        "EMP ID : {$row['emp_salary']} <br>" .
        "--------------------------------<br>";
    }
    $retval->free();
    echo "Fetched data successfully\n";
    $conn->close();
?>