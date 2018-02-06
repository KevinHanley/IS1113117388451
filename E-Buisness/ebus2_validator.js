/* global $ */

function validateDetails(){
    
    var email;
    
    email = document.getElementById("user_email").value;
    
    if (email == ""){
        alert("Please enter your Email ID");
    }
    else if (validateEmail(email) == false){
        alert("Please enter a valid Email ID");
    }
    else{
        enablebtnPurchase();
    }
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}