<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        
        <link rel="stylesheet" href="Ebus.css" type="text/css"/>
    </head>
    
    <body>
        <h4 class="ebus3_heading">Purchase Receipt</h4>
        
        <?php  
        // Set session variables
          $_SESSION["user_name"] = $_POST["user_name"];
          $_SESSION["user_email"] = $_POST["user_email"];
        ?>
        
        <p class="ebus3_name">
            <?php
            // Echo session variables that were set on the previous pages
            echo "Name: " . $_SESSION["user_name"] . ".";
            ?>
        </p>
        
        <p class="ebus3_email">
            <?php
            // Echo session variables that were set on the previous pages
            echo "Email: " . $_SESSION["user_email"] . ".";
            ?>
        </p>
        
        <p class="ebus3_total">
            <?php
            // Echo session variables that were set on the previous pages
            echo "Total: " . $_SESSION["total"] . ".";
            ?>
        </p>
    </body>
</html>

