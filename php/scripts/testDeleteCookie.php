<?php
    
    setcookie( "name", "", time()- 60, "/","", 0);
    setcookie( "age", "", time()- 60, "/","", 0);
  
  if( isset($_COOKIE["name"]))
    echo "Welcome " . $_COOKIE["name"] . "<br />";
  else
    echo "Sorry... Not recognized" . "<br />";

?>
<html>
<head>
<title>Deleting Cookies with PHP</title>
</head>
<body>
<?php echo "Deleted Cookies" ?>
</body>
</html>