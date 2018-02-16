<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        <link rel="stylesheet" href="../navbar.css" type="text/css"/>
        <link rel="stylesheet" href="Ebus.css" type="text/css"/>

    </head>
    
    <body>
        <header>
                <div class="container">
                    
                    <p class="logo"><strong>Kevin Hanley</strong></p>
                    
                    <nav>
                        <ul>
                            <li><a href="../homepage.html">Home</a></li>
                            <li><a href="../CV/cv_page1.html">CV</a></li>
                            <li><a href="../Interests/sports.html">Interests</a></li>
                            <li><a href="Shop/shophome.html">Shop</a></li>
                        </ul>
                    </nav>
                    
                </div>
        </header>
        
        <div class="ebus_content">
          <h1>Select a Product</h1>
              
          <br>
              
          <form method="POST" action="Ebus2.php">
            
              <label for="salesforce" class="label1">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
                
            <br>
            
            <label for="cloud9" class="label2">
              <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
               Cloud9 @ $200
            </label>
                
            <br>
                
            <label for="aws" class="label3">
              <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
              AWS @ $300
            </label>
                
            <br>
                
            <label for="gmail" class="label4">
              <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
              Gmail @ $400
            </label>
            
                
            <button onClick="calcSub()" class="cal_btn">Calculate Cost</button>
            
                
            <label for="subtotal" class="label5">
              Sub Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
                
            <br>
            
            <label for="discount" class="label6">
              Discount @ 5% &nbsp;&nbsp;&nbsp; <input type="text" id="discount" value="0.00" readonly/>
              <br>
              (- Discount)
            </label>
                
            <br>
            
            <label for="vat" class="label7">
              VAT @ 23% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="vat" value="0.00" readonly/>
            </label>
                
            <br>
                
            <label for="total" class="label8">
              Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
      
            <br>
            
            <div class="add_btn">   
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            </div>  
              
            </form>
              
            <br>
            <a role="button" href="Ebus1.php">Clear Choice</a>
        </div>
    </body>
</html>