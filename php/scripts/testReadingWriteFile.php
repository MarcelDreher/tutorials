<html>
    <head>
        <title>Reading a file using PHP</title>
    </head>
    <body>
        
        <?php
            require("menu.php"); 
            
            
            
            $filename = "files/tmp.txt";
            $file = fopen( $filename, "r" );
            if( $file == false )
            {
                echo ( "Error in opening file" );
                exit();
            }
            $filesize = filesize( $filename );
            $filetext = fread( $file, $filesize );
            
            fclose( $file );
            
            echo ( "File size : $filesize bytes" );
            echo ( "<pre>$filetext</pre>" );
            
            if($_REQUEST["textInput"] && $_REQUEST["file"])
            {   
                $fileName = "files/tmp.txt";
                $option = $_REQUEST["file"];
                $file = fopen($fileName, $option);
                if($file == false)
                {
                    echo ( "Error in opening file" );
                    exit();
                }
                fwrite($file, $_REQUEST["textInput"]."<br>");
                fclose($file);
            }
            
        ?>
        
        
        <br><br>
        <form action="<?php $_PHP_SELF ?>" method="POST" >
            
            <textarea type="text" name="textInput" rows="8" cols="28" name="textInput">
            </textarea>
            <br>
            <select name="file">
                <option value="w">
                    Override existing file
                </option>
                <option value="a">
                    Append to the end of the file
                </option>
            </select>
            <input type="submit"/>
        </form>
        
    </body>
</html>
