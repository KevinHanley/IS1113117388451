<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Receipt</title>
        
        <!--Stylesheets -->
        <link rel="stylesheet" href="shop_navbar.css" type="text/css"/>
        <link rel="stylesheet" href="Ebus.css" type="text/css"/>
        
        <!-- Setting the webpage font -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        
        <!-- setting webpage favicon -->
        <link rel="shortcut icon" type="image/ico" href="Images/favicon.ico">
    </head>
    
    <body>
        <!-- Adding navigation bar to the page -->
        <header>
            <div class="container">
                
                <img class="logo" src="../Images/company_logo_trans.png">
                
                <nav>
                    <ul>
                        <li><a href="shophome.html">Shop Home</a></li>
                        <li><a href="about_cloud.html">About Cloud</a></li>
                        <li><a href="products.html">Products</a></li>
                        <li><a href="../homepage.html">Personal Website</a></li>
                    </ul>
                </nav>
                
            </div>
        </header>
        
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

