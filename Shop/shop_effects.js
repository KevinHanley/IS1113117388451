// When the user scrolls down the page then the button will appear
window.onscroll = function() {scroll()};

function scroll() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("btn_top").style.display = "block";
    } else {
        document.getElementById("btn_top").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function GoToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
