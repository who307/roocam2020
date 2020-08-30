$(function () {
    $(".select1").click(function () {
        $(".select1").addClass("select");
        $(".select2").removeClass("select");
        $(".select3").removeClass("select");
        $(".btn_01").addClass("trans");

    });
    $(".select2").click(function () {
        $(".select2").addClass("select");
        $(".select1").removeClass("select");
        $(".select3").removeClass("select");
        $(".btn_01").addClass("trans");

    });
    $(".select3").click(function () {
        $(".select3").addClass("select");
        $(".select2").removeClass("select");
        $(".select1").removeClass("select");
        $(".btn_01").addClass("trans");
    });
});


var btnid = document.getElementById('btnid');

function goselect1() {
    btnid.addEventListener('click', function () {
        location.href = "https://www.naver.com/";
    })
    return Alert = false;
}
function goselect2() {
    btnid.addEventListener('click', function () {
        location.href = "https://www.google.com/";
    })
    return Alert = false;
}
function goselect3() {
    btnid.addEventListener('click', function () {
        location.href = "https://www.daum.net";

    })
    return Alert = false;
}
function Alert() {

    alert("원하시는 유형을 선택해주세요.")
}
