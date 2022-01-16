function Contact() {
    var div = document.getElementById("card").style.display;
    var el = document.getElementById("main");
    if(div == "none") {
        document.getElementById("card").style.display = "block";
        document.getElementById("main").style.color = "transparent";
    }
    else {
        document.getElementById("card").style.display = "none";
        document.getElementById("main").style.color = "white";
    }
}