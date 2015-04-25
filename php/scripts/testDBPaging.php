<?php 
    $rec_limit = 10;
    $conn = new mysqli("localhost:3306", "guest", "guest123", "test_db");
    if(!$conn)
    {
        die("Could not connect: " . $conn->connect_error);
    }
    else
    {
        echo "Connected successfully", "<br>";
    }
$sql = "SELECT count(emp_id) FROM employee ";

$retval = $conn->query($sql);
echo "$retval";
if(! $retval )
{
  die('Could not get data: ' . $conn->error);
}
$row = $retval->fetch_array(MYSQL_NUM);
$rec_count = $row[0];

if( isset($_GET{'page'} ) )
{
   $page = $_GET{'page'} + 1;
   $offset = $rec_limit * $page ;
}
else
{
   $page = 0;
   $offset = 0;
}
$left_rec = $rec_count - ($page * $rec_limit);

$sql = "SELECT emp_id, emp_name, emp_salary ".
       "FROM employee ".
       "LIMIT $offset, $rec_limit";

$retval = $conn->query($sql);
if(!$retval )
{
  die('Could not get data: ' . $conn->error);
}
while($row = $retval->fetch_array(MYSQL_ASSOC))
{
    echo "EMP ID :{$row['emp_id']}  <br> ".
         "EMP NAME : {$row['emp_name']} <br> ".
         "EMP SALARY : {$row['emp_salary']} <br> ".
         "--------------------------------<br>";
} 

if( $page > 0 )
{
   $last = $page - 2;
   echo "<a href=\"$_PHP_SELF?page=$last\">Last 10 Records</a> |";
   echo "<a href=\"$_PHP_SELF?page=$page\">Next 10 Records</a>";
}
else if( $page == 0 )
{
   echo "<a href=\"$_PHP_SELF?page=$page\">Next 10 Records</a>";
}
else if( $left_rec < $rec_limit )
{
   $last = $page - 2;
   echo "<a href=\"$_PHP_SELF?page=$last\">Last 10 Records</a>";
}
$conn->close();
?>