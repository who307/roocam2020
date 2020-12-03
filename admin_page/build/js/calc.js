$(function () {
    $('input, #two, #one').on("click keyup", function calNow() {

        calc.estVAT1.value = calc_result(calc.size_horizon.value, calc.size_vertical.value, calc.frame.value);
        calc.estVAT2.value = calc_result(calc.size_horizon2.value, calc.size_vertical2.value, calc.frame2.value);
        calc.estVAT3.value = calc_result(calc.size_horizon3.value, calc.size_vertical3.value, calc.frame3.value);
        calc.estVAT4.value = calc_result(calc.size_horizon4.value, calc.size_vertical4.value, calc.frame4.value);
        calc.estVAT5.value = calc_result(calc.size_horizon5.value, calc.size_vertical5.value, calc.frame5.value);

        calc.est1.value = calc_result1(calc.size_horizon.value, calc.size_vertical.value, calc.frame.value);
        calc.est2.value = calc_result1(calc.size_horizon2.value, calc.size_vertical2.value, calc.frame2.value);
        calc.est3.value = calc_result1(calc.size_horizon3.value, calc.size_vertical3.value, calc.frame3.value);
        calc.est4.value = calc_result1(calc.size_horizon4.value, calc.size_vertical4.value, calc.frame4.value);
        calc.est5.value = calc_result1(calc.size_horizon5.value, calc.size_vertical5.value, calc.frame5.value);

        var sum1 = parseInt($("#est1").val() || 0);
        var sum2 = parseInt($("#est2").val() || 0);
        var sum3 = parseInt($("#est3").val() || 0);
        var sum4 = parseInt($("#est4").val() || 0);
        var sum5 = parseInt($("#est5").val() || 0);

        var sumVAT1 = parseInt($("#estVAT1").val() || 0);
        var sumVAT2 = parseInt($("#estVAT2").val() || 0);
        var sumVAT3 = parseInt($("#estVAT3").val() || 0);
        var sumVAT4 = parseInt($("#estVAT4").val() || 0);
        var sumVAT5 = parseInt($("#estVAT5").val() || 0);

        var sum = sum1 + sum2 + sum3 + sum4 + sum5;
        var sum1 = sumVAT1 + sumVAT2 + sumVAT3 + sumVAT4 + sumVAT5;
        $("#fn_total").val(sum);
		$("#fn_totalVTA").val(sum1);
				
				// 모바일 JS  START====================================================================

		calc.estVAT1M.value = calc_result(calc.size_horizonM.value, calc.size_verticalM.value, calc.frameM.value);
        calc.estVAT2M.value = calc_result(calc.size_horizon2M.value, calc.size_vertical2M.value, calc.frame2M.value);
        calc.estVAT3M.value = calc_result(calc.size_horizon3M.value, calc.size_vertical3M.value, calc.frame3M.value);
        calc.estVAT4M.value = calc_result(calc.size_horizon4M.value, calc.size_vertical4M.value, calc.frame4M.value);
        calc.estVAT5M.value = calc_result(calc.size_horizon5M.value, calc.size_vertical5M.value, calc.frame5M.value);

        calc.est1M.value = calc_result1(calc.size_horizonM.value, calc.size_verticalM.value, calc.frameM.value);
        calc.est2M.value = calc_result1(calc.size_horizon2M.value, calc.size_vertical2M.value, calc.frame2M.value);
        calc.est3M.value = calc_result1(calc.size_horizon3M.value, calc.size_vertical3M.value, calc.frame3M.value);
        calc.est4M.value = calc_result1(calc.size_horizon4M.value, calc.size_vertical4M.value, calc.frame4M.value);
        calc.est5M.value = calc_result1(calc.size_horizon5M.value, calc.size_vertical5M.value, calc.frame5M.value);

        var sum1M = parseInt($("#est1M").val() || 0);
        var sum2M = parseInt($("#est2M").val() || 0);
        var sum3M = parseInt($("#est3M").val() || 0);
        var sum4M = parseInt($("#est4M").val() || 0);
        var sum5M = parseInt($("#est5M").val() || 0);

        var sumVAT1M = parseInt($("#estVAT1M").val() || 0);
        var sumVAT2M = parseInt($("#estVAT2M").val() || 0);
        var sumVAT3M = parseInt($("#estVAT3M").val() || 0);
        var sumVAT4M = parseInt($("#estVAT4M").val() || 0);
        var sumVAT5M = parseInt($("#estVAT5M").val() || 0);

        var sumM = sum1M + sum2M + sum3M + sum4M + sum5M;
        var sum1M = sumVAT1M + sumVAT2M + sumVAT3M + sumVAT4M + sumVAT5M;
        $("#fn_totalM").val(sumM);
        $("#fn_totalVTAM").val(sum1M);

    });
});
function calc_result(size_horizon, size_vertical, frame) {
    return Number(size_horizon) * Number(size_vertical) * Number(frame) / 100000;
}
function calc_result1(size_horizon, size_vertical, frame) {
    return Number(size_horizon) * Number(size_vertical) * Number(frame) * 9 / 10 / 100000;
}
// 모바일 JS  START====================================================================
function calc_result(size_horizonM, size_verticalM, frameM) {
	return Number(size_horizonM) * Number(size_verticalM) * Number(frameM) / 100000;
}
function calc_result1(size_horizonM, size_verticalM, frameM) {
	return Number(size_horizonM) * Number(size_verticalM) * Number(frameM) * 9 / 10 / 100000;
}

// //문자 제거
// function removeChar(event) {
//     event = event || window.event;
//     var keyID = (event.which) ? event.which : event.keyCode;
//     if (keyID == 8 || keyID == 46 || keyID == 37 || keyID == 39)
//         return;
//     else
//         //숫자와 소수점만 입력가능
//         event.target.value = event.target.value.replace(/[^-\.0-9]/g, "");
// }
// //콤마 찍기
//     function comma(obj) {
//         var regx = new RegExp(/(-?\d+)(\d{3})/);
//         var bExists = obj.indexOf(".", 0);//0번째부터 .을 찾는다.
//         var strArr = obj.split('.');
//         while (regx.test(strArr[0])) {//문자열에 정규식 특수문자가 포함되어 있는지 체크
//             //정수 부분에만 콤마 달기 
//             strArr[0] = strArr[0].replace(regx, "$1,$2");//콤마추가하기
//         }
//         if (bExists > -1) {
//             //. 소수점 문자열이 발견되지 않을 경우 -1 반환
//             obj = strArr[0] + "." + strArr[1];
//         } else { //정수만 있을경우 //소수점 문자열 존재하면 양수 반환 
//             obj = strArr[0];
//         }
//         return obj;//문자열 반환
//     }
// //콤마 풀기
// function uncomma(str) {
//     str = "" + str.replace(/,/gi, ''); // 콤마 제거 
//     str = str.replace(/(^\s*)|(\s*$)/g, ""); // trim()공백,문자열 제거 
//     return (new Number(str));//문자열을 숫자로 반환
// }
// //input box 콤마달기
// function inputNumberFormat(obj) {
//     obj.value = comma(obj.value);
// }
// //input box 콤마풀기 호출
// function uncomma_call(){
//     var input_value = document.getElementById('input1');
//     input_value.value = uncomma(input_value.value);
// }

