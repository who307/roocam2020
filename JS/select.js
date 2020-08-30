
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

// $(function () {
//     var a = false;
//     var b = false;
//     var c = false;

//     $(".select1").click(function () {

//         if (a == false) {
//             $(".select1").addClass("select");
//             $(".btn_01").addClass("trans");
//             $(".select2").removeClass("select");
//             $(".select3").removeClass("select");
//             return a = true;

//         } else if (a === true) {
//             $(".select1").removeClass("select");
//             $(".btn_01").removeClass("trans");
//             return a = false;
//         }
//     });
//     $(".select2").click(function () {
//         if (b === false) {
//             $(".select2").addClass("select");
//             $(".btn_01").addClass("trans");
//             $(".select1").removeClass("select");
//             $(".select3").removeClass("select");
//             return b = true;

//         } else if (b === true) {
//             $(".select2").removeClass("select");
//             $(".btn_01").removeClass("trans");
//             return b = false;
//         }
//     });
//     $(".select3").click(function () {
//         if (c === false) {
//             $(".select3").addClass("select");
//             $(".btn_01").addClass("trans");
//             $(".select1").removeClass("select");
//             $(".select2").removeClass("select");
//             return c = true;

//         } else if (c === true) {
//             $(".select3").removeClass("select");
//             $(".btn_01").removeClass("trans");
//             return c = false;

//         }
//     });
// });



var btnid = document.getElementById('btnid');
var select1 = false;

function goselect1() {
    btnid.addEventListener('click', function () {
        location.href = "https://www.naver.com/";
    })
    return select1 = true;
}

function goselect2() {
    btnid.addEventListener('click', function () {
        location.href = "https://www.google.com/";
    })
    return select1 = true;
}

function goselect3() {
    btnid.addEventListener('click', function () {
        location.href = "https://www.daum.net";
    })
    return select1 = true;
}
function Alert() {
    if (select1 === false) {
        alert("원하시는 유형을 선택해주세요.")
    }
}
