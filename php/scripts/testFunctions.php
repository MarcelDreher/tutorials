<html>
    <head>
        <title>Writing PHP Function with Parameters</title>
    </head>
    <body>
        
        <?php
            function addFunction($num1, $num2)
            {
                $sum = $num1 + $num2;
                echo "Sum of the two numbers is : $sum";
            }
            addFunction(10, 20);
            echo "<br>";
            
            
            
            function addFunctionReturn($num1, $num2)
            {
                $sum = $num1 + $num2;
                return $sum;
            }
            
            $return_value = addFunctionReturn(10, 20);
            echo "Returned value from the function : $return_value", "<br>";
            
            function add($num1, $num2)
            {
                $sum = $num1 + $num2;
                return array($num1, $num2, $sum);
            }
            
            $return_value = add(12, 13);
            print_r($return_value);
            
            echo "<br>";
            
            function printMe($param = "No param")
            {
                print $param;
            }
            printMe("This is test");
            echo "<br>";
            printMe();
            echo "<br>";
            
            function sayHello()
            {
                echo "Hello<br />";
            }
            $function_holder = "sayHello";
            $function_holder();
        ?>
    </body>
</html>
