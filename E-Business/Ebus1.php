<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

    </head>
    
    <body>
        
            <h4>Select a Product</h4>
            
            <br>
            
            <form method="POST" action="Ebus2.php">
              
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" onClick="disablebtnProceed(); calcSub()"/>
                SalesForce @ $300
              </label>
              
              <br>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed(); calcSub()"/>
                AWS @ $250
              </label>
              
              <br>
              
              <label for="akamai">
                <input type="radio" id="akamai" name="product" onClick="disablebtnProceed(); calcSub()"/>
                Akamai @ $200
              </label>
              
              
              <br>
              
              <label for="googleapps">
                <input type="radio" id="googleapps" name="product" onClick="disablebtnProceed(); calcSub()"/>
                Google Apps @ $150
              </label>
              
              <br>
              
              <label for="linkedin">
                <input type="radio" id="linkedin" name="product" onClick="disablebtnProceed(); calcSub()"/>
                LinkedIn @ $100
              </label>
              
              <br>
              <br>
              
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
              </label>
              
              <br>
              
              <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
              </label>
    
              <br>
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br>
            <a role="button" href="Ebus1.php">Clear Choice</a>
    
    </body>
</html>