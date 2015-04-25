<?php
    $target_path = "uploads/". basename( $_FILES['file']['name']);
    echo $target_path;
    if(copy($_FILES['file']['tmp_name'], $target_path)) {
        echo "The file ".  basename( $_FILES['file']['name']). 
        " has been uploaded";
        } 
    else
    {
        echo "There was an error uploading the file, please try again!";
    }
?>
<html>
    <head>
        <title>Uploading Complete</title>
    </head>
    <body>
        <h2>Uploaded File Info:</h2>
        <ul>
            <li>Sent file: <?php echo $_FILES['file']['name'];  ?>
                <li>File size: <?php echo $_FILES['file']['size'];  ?> bytes
                    <li>File type: <?php echo $_FILES['file']['type'];  ?>
                    </ul>
                </body>
            </html>                        