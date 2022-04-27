$(document).ready(function () {


    $("a.link").click(function(){
        $(".fa-circle-notch").css(
            "animation", "spinLogo 1s infinite"
        );
    });

    $(".small").click(function(){
        $(".fa-circle-notch").css(
            "animation", "spinLogo 1s normal"
        )
    });

    $("#criar").click(function(){
        $(".fa-circle-notch").css(
            "animation", "spinLogo 1s linear"
        )
    })

});