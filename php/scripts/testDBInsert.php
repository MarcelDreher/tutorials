<html>
    <head>
        <title>Add New Record in MySQL Database</title>
    </head>
    <body>
        <?php
            if(isset($_POST['add']))
            {
                $dbhost = 'localhost:3306';
                $dbuser = 'guest';
                $dbpass = 'guest123';
                $conn = new mysqli($dbhost, $dbuser, $dbpass, "test_db");
                if(! $conn )
                {
                    die('Could not connect: ' . $conn->error);
                }
                
                if(! get_magic_quotes_gpc() )
                {
                    $emp_name = addslashes ($_POST['emp_name']);
                    $emp_address = addslashes ($_POST['emp_address']);
                }
                else
                {
                    $emp_name = $_POST['emp_name'];
                    $emp_address = $_POST['emp_address'];
                }
                $emp_salary = $_POST['emp_salary'];
                
                #tailor sql query to delete or update entries
                $sql = "INSERT INTO employee ".
                "(emp_name,emp_address, emp_salary, join_date) ".
                "VALUES('$emp_name','$emp_address',$emp_salary, NOW())";
                
                $retval = $conn->query( $sql);
                if(! $retval )
                {
                    die('Could not enter data: ' . $conn->error);
                }
                echo "Entered data successfully\n";
                $conn->close();
            }
            else
            {
            ?>
            <form method="post" action="<?php $_PHP_SELF ?>">
                <table width="400" border="0" cellspacing="1" cellpadding="2">
                    <tr>
                        <td width="100">Employee Name</td>
                        <td><input name="emp_name" type="text" id="emp_name"></td>
                    </tr>
                    <tr>
                        <td width="100">Employee Address</td>
                        <td><input name="emp_address" type="text" id="emp_address"></td>
                    </tr>
                    <tr>
                        <td width="100">Employee Salary</td>
                        <td><input name="emp_salary" type="text" id="emp_salary"></td>
                    </tr>
                    <tr>
                        <td width="100"> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td width="100"> </td>
                        <td>
                            <input name="add" type="submit" id="add" value="Add Employee">
                        </td>
                    </tr>
                </table>
            </form>
            <?php
            }
        ?>
    </body>
</html>