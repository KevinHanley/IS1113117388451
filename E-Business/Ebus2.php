<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <h4>Please enter your payment details</h4>
        
        
            <form action="Ebus3.php" method="POST">

                    <label for="user_pin">PIN</label>
                    <input type="pin" id="user_pin" name="user_pin" placeholder="1234">

                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
        
        <?php  
          $_SESSION["total"] = $_POST["total"];
        ?>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </body>
</html>