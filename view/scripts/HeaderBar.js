document.getElementById("toto").onscroll = function() {
    myFunction()
};

function myFunction() {
    if (document.getElementById("toto").scrollTop > 60) {
        document.getElementById("headerbar").style.display = "block";
        document.getElementById("headertitle").style.display = "none";
    } else {
        document.getElementById("headerbar").style.display = "none";
        document.getElementById("headertitle").style.display = "block";
    }
}