/* global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked) {
      argSubTotal = 300;
    }
    else if (document.getElementById('aws').checked){
      argSubTotal = 250;
    }
    else if (document.getElementById('akamai').checked){
      argSubTotal = 200;
    }
    else if (document.getElementById('googleapps').checked){
      argSubTotal = 150;
    }
    else{
      argSubTotal = 100;
    }
    
    display(argSubTotal);
}

function display(parm1){
  
  document.getElementById("subtotal").value = parm1;
  document.getElementById("total").value = parm1;
        
  enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}