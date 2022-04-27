$(document).ready(function () {

    $("#bars").click(function(){
        $(".menu-content").slideToggle();
    });
    
    var whiteBackg = "#F5F5F5";
    var darkBackg = "rgba(156, 156, 156, 0.65)";
    var colorDark = "#010409";
    var colorWhite = "#FFF";
    var whiteIcon = '<i class="fa fa-solid fa-sun" id="white"></i>';
    var darkIcon = '<i class="fa fa-solid fa-moon" id="dark"></i>';

    //DarkMode->
    $("#dark").click(function(){
        $("header").add(".nav-menu").add(".menu-content").add(".menu-link").css({
            'background': darkBackg,
            'color': colorWhite
        });

        $(".fluid-line").css({
            'background': colorWhite,
            'color': colorDark
        })

        $("main").css({
            'background': '#2F4F4F',
            'color': colorDark
        });

        $(".card").css({
            'background': whiteBackg
        });

        $(".card-link").css({
            'outline': 'groove 2px #000',
            'color': colorDark
        })

        $("footer").add(".footer-icon").css({
            'background': whiteBackg,
            'color': colorDark
        })

        $(".footer-icon").addClass("active");
        
        $("#dark").replaceWith(whiteIcon);
    });

    //WhiteMode->
    $("#white").click(function(){
        $("header").add(".nav-menu").add(".menu-content").add(".menu-link").css({
            'background': darkBackg,
            'color': colorWhite
        });

        $(".fluid-line").css({
            'background': colorDark,
            'color': colorWhite
        })

        $("main").css({
            'background': '#000207',
            'color': colorWhite
        });

        $(".card").css({
            'background': darkBackg
        });

        $(".teory").css({
            'color': '#FFFF00',
            'outline': "groove 2px #FFFF00",
            'trasition': 'background 1s, color 1s'
        });

        $("footer").add(".footer-icon").css({
            'background': whiteBackg,
            'color': colorDark
        })

        $(".footer-icon").addClass("active");
        
        $("#dark").replaceWith(darkIcon);

    });

   const getTime = () => {
       var date = new Date();
       var hour = date.getHours();
       var minutes = date.getMinutes();
       var seconds = date.getSeconds();
       var total = hour+':'+minutes+':'+seconds;
       $("#hour").text(total);
   }
   setInterval(getTime, 1000);
});