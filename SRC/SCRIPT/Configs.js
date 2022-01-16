//Funções de exibição ->
function Edit_Name() {
    var show = document.getElementById("name").style.display;
    if(show == "none") {
        document.getElementById("name").style.display = "flex";
    }
    else {
        document.getElementById("name").style.display = "none";
    }
}
//Altera o nome;

function Alter_Theme() {
    var show2 = document.getElementById("theme").style.display;
    if(show2 == "none") {
        document.getElementById("theme").style.display = "flex";
    }
    else {
        document.getElementById("theme").style.display = "none";
    }
    var theme = document.getElementsByClassName("header");
    var input = document.getElementById("color");
    input.addEventListener("input", function(){
        var newcolor = input.value;
        theme[0].style.backgroundColor = newcolor;
    }, false);
}
//Altera cor do header;

function Confirm() {
    var confirm = document.getElementById("box").style.display;
    if(confirm == "none") {
        document.getElementById("box").style.display = 'block';
        document.getElementById("main").style.opacity = 0.5;
    }
    else {
        document.getElementById("box").style.display = 'none';
        document.getElementById("main").style.opacity = 1;
    }
}

function No() {
    document.getElementById("box").style.display = 'none';
    document.getElementById("main").style.opacity = 1;
}