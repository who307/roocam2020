$(function () {

    $(".literms1").click(function () {
        $(".literms1").removeClass("text_black");
        $(".literms2").removeClass("text_color");
        $(".literms3").removeClass("text_color");
        $(".literms4").removeClass("text_color");
        $(".terms1").removeClass("offdisplay");
        $(".terms2").removeClass("ondisplay");
        $(".terms3").removeClass("ondisplay");
        $(".terms4").removeClass("ondisplay");
        $(".terms1").addClass("ondisplay");
    });
    
    $(".literms2").click(function () {
        $(".literms2").addClass("text_color");
        $(".literms1").removeClass("text_color");
        $(".literms3").removeClass("text_color");
        $(".literms4").removeClass("text_color");
        $(".literms1").addClass("text_black");

        $(".terms2").addClass("ondisplay");
        $(".terms1").addClass("offdisplay");
        $(".terms3").removeClass("ondisplay");
        $(".terms4").removeClass("ondisplay");
    });
    $(".literms3").click(function () {
        $(".literms3").addClass("text_color");
        $(".literms1").removeClass("text_color");
        $(".literms2").removeClass("text_color");
        $(".literms4").removeClass("text_color");
        $(".literms1").addClass("text_black");

        $(".terms3").addClass("ondisplay");
        $(".terms1").addClass("offdisplay");
        $(".terms2").removeClass("ondisplay");
        $(".terms4").removeClass("ondisplay");
    });
    $(".literms4").click(function () {
        $(".literms4").addClass("text_color");
        $(".literms1").removeClass("text_color");
        $(".literms2").removeClass("text_color");
        $(".literms3").removeClass("text_color");
        $(".literms1").addClass("text_black");

        $(".terms4").addClass("ondisplay");
        $(".terms1").addClass("offdisplay");
        $(".terms3").removeClass("ondisplay");
        $(".terms2").removeClass("ondisplay");
       
    });   
    
});