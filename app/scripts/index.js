$(document).ready(function () {
    
    const Clock = () =>
    {
        var date = new Date();
        var hour = date.getHours();
        var minute = date.getMinutes();
        var total = hour + ":" + minute;
        $("#clock").text(total);
    }

    setInterval(Clock, 500);

    $("#bars").click(function(){
        $(".menu-slider").slideToggle();
    })
});