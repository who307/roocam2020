'use strict';

let count = 6;

//PC  (+,-)
function addForm() {
	let addedFormDiv = document.getElementById("addedFormDiv");
	let str = "<div class='est'><div>"
	let horizon = "size_horizon"
	let vertical = "size_vertical"
	let size_position = "size_position"
	let frame = "frame"
	let est = "est"
	let estVAT = "estVAT"

	str += count + " .가로<input id='horizon' style='font-size: 16px; margin:0 60px 0px 5px; width: 100px; height:30px; text-align: right; padding-right: 10px; outline: none; border : 1px solid #c9c7c7;' type='text' name='" + horizon + count + "' onKeyup='this.value=this.value.replace(/[^0-9]/g,'');' value='' Placeholder='cm' maxlength='4'> 세로<input id='vertical'style='font-size: 16px; margin:0 60px 0px 5px; width: 100px; height:30px; text-align: right; padding-right: 10px; outline: none; border : 1px solid #c9c7c7;' type='text' name='" + vertical + count + "' onKeyup='this.value=this.value.replace(/[^0-9]/g,'');' value='' Placeholder='cm' maxlength='4'> 위치<select style='font-size: 16px; margin:0 30px 0 5px; width: 130px; height:33px; outline: none; border : 1px solid #c9c7c7;'name='" + size_position + count + "'><option value='베란다'>베란다 <option value='거실'>거실<option value='방'>방<option value='화장실'>화장실<option value='기타'selected>기타</select></div><div class='est-2' style='display: flex; align-items: center;'> <div> 창호종류 <input id='two' type='radio' name='" + frame + count + "' value='2666667' /> 이중창 <input id='one' type='radio' name='" + frame + count + "' value='1666667' /> 단창</div><div class='est-3'>견적<span style='position : relative; left : 15px; top: -2px; font-weight : bold; color : #2699FB;'>&#8361;</span><input class='num_sum' type='text' id='" + est + count + "' name='" + est + count + "'style='width : 120px; height : 30px; padding : 0 10px 0 20px; margin-left : -5px; text-align : right; outline: none; border : 1px solid #c9c7c7; font-weight : bold; color : #2699FB;' onKeyup='this.value=this.value.replace(/[^0-9]/g,'');' maxlength='10' readonly /><span style='position : relative; left : 25px; top: -2px; font-weight : bold; color : #2699FB;'>&#8361;</span><input class='num_sum' type='text' id='" + estVAT + count + "' name='" + estVAT + count + "' style='width : 120px; height : 30px; padding : 0 10px 0 20px; margin-left : 5px; text-align : right; outline: none; border : 1px solid #c9c7c7; font-weight : bold; color : #2699FB;' onKeyup='this.value=this.value.replace(/[^0-9]/g,'');' maxlength='10' readonly /></div></div></div><br>";
	let addedDiv = document.createElement("div");

	addedDiv.id = "added_" + count;

	addedDiv.innerHTML = str;

	if (count < 11) {
		addedFormDiv.appendChild(addedDiv);
		count++;
		document.count = count;
	}
}

function delForm() {

	let addedFormDiv = document.getElementById("addedFormDiv");

	if (count > 6) {

		let addedDiv = document.getElementById("added_" + (--count));

		addedFormDiv.removeChild(addedDiv);

	}
}

//PC버전 계산
function calNow() {

	calc.estVAT1.value = calc_result(calc.size_horizon.value, calc.size_vertical.value, calc.frame.value);
	calc.est1.value = calc_result1(calc.size_horizon.value, calc.size_vertical.value, calc.frame.value);

	calc.estVAT2.value = calc_result(calc.size_horizon2.value, calc.size_vertical2.value, calc.frame2.value);
	calc.est2.value = calc_result1(calc.size_horizon2.value, calc.size_vertical2.value, calc.frame2.value);

	calc.estVAT3.value = calc_result(calc.size_horizon3.value, calc.size_vertical3.value, calc.frame3.value);
	calc.est3.value = calc_result1(calc.size_horizon3.value, calc.size_vertical3.value, calc.frame3.value);

	calc.estVAT4.value = calc_result(calc.size_horizon4.value, calc.size_vertical4.value, calc.frame4.value);
	calc.est4.value = calc_result1(calc.size_horizon4.value, calc.size_vertical4.value, calc.frame4.value);

	calc.estVAT5.value = calc_result(calc.size_horizon5.value, calc.size_vertical5.value, calc.frame5.value);
	calc.est5.value = calc_result1(calc.size_horizon5.value, calc.size_vertical5.value, calc.frame5.value);

	if (count >= 7) {
		calc.estVAT6.value = calc_result(calc.size_horizon6.value, calc.size_vertical6.value, calc.frame6.value);
		calc.est6.value = calc_result1(calc.size_horizon6.value, calc.size_vertical6.value, calc.frame6.value);
	}
	if (count >= 8) {
		calc.estVAT7.value = calc_result(calc.size_horizon7.value, calc.size_vertical7.value, calc.frame7.value);
		calc.est7.value = calc_result1(calc.size_horizon7.value, calc.size_vertical7.value, calc.frame7.value);
	}
	if (count >= 9) {
		calc.estVAT8.value = calc_result(calc.size_horizon8.value, calc.size_vertical8.value, calc.frame8.value);
		calc.est8.value = calc_result1(calc.size_horizon8.value, calc.size_vertical8.value, calc.frame8.value);
	}
	if (count >= 10) {
		calc.estVAT9.value = calc_result(calc.size_horizon9.value, calc.size_vertical9.value, calc.frame9.value);
		calc.est9.value = calc_result1(calc.size_horizon9.value, calc.size_vertical9.value, calc.frame9.value);
	}
	if (count >= 11) {
		calc.estVAT10.value = calc_result(calc.size_horizon10.value, calc.size_vertical10.value, calc.frame10.value);
		calc.est10.value = calc_result1(calc.size_horizon10.value, calc.size_vertical10.value, calc.frame10.value);
	}

	let sum1 = parseInt($("#est1").val() || 0);
	let sumVAT1 = parseInt($("#estVAT1").val() || 0);

	let sum2 = parseInt($("#est2").val() || 0);
	let sumVAT2 = parseInt($("#estVAT2").val() || 0);

	let sum3 = parseInt($("#est3").val() || 0);
	let sumVAT3 = parseInt($("#estVAT3").val() || 0);

	let sum4 = parseInt($("#est4").val() || 0);
	let sumVAT4 = parseInt($("#estVAT4").val() || 0);

	let sum5 = parseInt($("#est5").val() || 0);
	let sumVAT5 = parseInt($("#estVAT5").val() || 0);

	let sum6 = parseInt($("#est6").val() || 0);
	let sumVAT6 = parseInt($("#estVAT6").val() || 0);

	let sum7 = parseInt($("#est7").val() || 0);
	let sumVAT7 = parseInt($("#estVAT7").val() || 0);

	let sum8 = parseInt($("#est8").val() || 0);
	let sumVAT8 = parseInt($("#estVAT8").val() || 0);

	let sum9 = parseInt($("#est9").val() || 0);
	let sumVAT9 = parseInt($("#estVAT9").val() || 0);

	let sum10 = parseInt($("#est10").val() || 0);
	let sumVAT10 = parseInt($("#estVAT10").val() || 0);

	let sum = sum1 + sum2 + sum3 + sum4 + sum5 + sum6 + sum7 + sum8 + sum9 + sum10;
	let sumVAT = sumVAT1 + sumVAT2 + sumVAT3 + sumVAT4 + sumVAT5 + sumVAT6 + sumVAT7 + sumVAT8 + sumVAT9 + sumVAT10;
	$("#fn_total").val(sum);
	$("#fn_totalVTA").val(sumVAT);



};

function calc_result(size_horizon, size_vertical, frame) {
	return Number(size_horizon) * Number(size_vertical) * Number(frame) / 100000;
}
function calc_result1(size_horizon, size_vertical, frame) {
	return Number(size_horizon) * Number(size_vertical) * Number(frame) * 9 / 10 / 100000;
}


let countM = 6;

// 모바일 JS  START====================================================================
function addForm1() {
	let addedFormDiv = document.getElementById("addedFormDiv1");
	let str = ""
	let horizon = "size_horizon"
	let vertical = "size_vertical"
	let size_position = "size_position"
	let frame = "frame"
	let est = "est"
	let estVAT = "estVAT"

	str += countM + " .가로<input id='horizonM' style='font-size: 16px; margin:0 10px 5px 5px; width: 90px; height:30px; text-align: right; padding-right: 10px; outline: none; border : 1px solid #c9c7c7;'type='text' name='" + horizon + countM + "M' onKeyup='this.value=this.value.replace(/[^0-9]/g,'');' value='' Placeholder='cm' maxlength='4' required> 세로<input id='verticalM' style='font-size: 16px; margin:0 10px 5px 5px; width: 90px; height:30px; text-align: right; padding-right: 10px; outline: none; border : 1px solid #c9c7c7;'type='text' name='" + vertical + countM + "M' onKeyup='this.value=this.value.replace(/[^0-9]/g,'');' value='' Placeholder='cm' maxlength=' 4' required><br> &nbsp;&nbsp;&nbsp; 위치<select style='font-size: 16px; margin:0 10px 5px 6px; width: 104px; height:30px; outline: none; border : 1px solid #c9c7c7;' name='" + size_position + countM + "M' required><option value='베란다'>베란다<option value='거실'>거실<option value='방'>방 <option value='화장실'>화장실 <option value='기타' selected>기타 </select> 종류 <input id='two' type='radio'  name='" + frame + countM + "M' value='2666667' /> 이중창 <input id='one' type='radio' name='" + frame + countM + "M' value='1666667' /> 단창 <div style='width : 100%; margin-left: 13px; line-height : 36px;'>견적(VAT제외) <span style='position : relative; left : 16px; font-weight : bold; color : #2699FB;'>&#8361;</span><input class='num_sum' type='text' id='" + est + countM + "M' name='" + est + countM + "M' style='width : 155px; height : 30px; padding : 0 10px 0 20px;font-size: 16px; margin-left : -5px; text-align : right; outline: none; border : 1px solid #c9c7c7;font-weight : bold; color : #2699FB;'onKeyup='this.value=this.value.replace(/[^0-9]/g,'');' maxlength='10' readonly /><br>견적(VAT포함) <span style='position : relative; left : 16px; font-weight : bold; color : #2699FB;'>&#8361;</span><input class='num_sum' type='text' id='" + estVAT + countM + "M' name='" + estVAT + countM + "M'style='width : 155px; height : 30px; padding : 0 10px 0 20px;font-size: 16px; margin : 0 0 30px -5px; text-align : right; outline: none; border : 1px solid #c9c7c7;font-weight : bold; color : #2699FB;'onKeyup='this.value=this.value.replace(/[^0-9]/g,'');' maxlength='10' readonly /></div><br>";

	let addedDiv = document.createElement("div");
	addedDiv.id = "added_" + countM;
	addedDiv.innerHTML = str;
	if (countM < 11) {
		addedFormDiv.appendChild(addedDiv);
		countM++;
		document.countM = countM;
	}
}

function delForm1() {

	let addedFormDiv = document.getElementById("addedFormDiv1");

	if (countM > 6) {

		let addedDiv = document.getElementById("added_" + (--countM));

		addedFormDiv.removeChild(addedDiv);

	}
}
// 모바일버전
function calNowM() {
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

	if (countM >= 7) {
		calc.estVAT6M.value = calc_result(calc.size_horizon6M.value, calc.size_vertical6M.value, calc.frame6M.value);
		calc.est6M.value = calc_result1(calc.size_horizon6M.value, calc.size_vertical6M.value, calc.frame6M.value);
	}
	if (countM >= 8) {
		calc.estVAT7M.value = calc_result(calc.size_horizon7M.value, calc.size_vertical7M.value, calc.frame7M.value);
		calc.est7M.value = calc_result1(calc.size_horizon7M.value, calc.size_vertical7M.value, calc.frame7M.value);
	}
	if (countM >= 9) {
		calc.estVAT8M.value = calc_result(calc.size_horizon8M.value, calc.size_vertical8M.value, calc.frame8M.value);
		calc.est8M.value = calc_result1(calc.size_horizon8M.value, calc.size_vertical8M.value, calc.frame8M.value);
	}
	if (countM >= 10) {
		calc.estVAT9M.value = calc_result(calc.size_horizon9M.value, calc.size_vertical9M.value, calc.frame9M.value);
		calc.est9M.value = calc_result1(calc.size_horizon9M.value, calc.size_vertical9M.value, calc.frame9M.value);
	}
	if (countM >= 11) {
		calc.estVAT10M.value = calc_result(calc.size_horizon10M.value, calc.size_vertical10M.value, calc.frame10M.value);
		calc.est10M.value = calc_result1(calc.size_horizon10M.value, calc.size_vertical10M.value, calc.frame10M.value);
	}


	let sum1M = parseInt($("#est1M").val() || 0);
	let sum2M = parseInt($("#est2M").val() || 0);
	let sum3M = parseInt($("#est3M").val() || 0);
	let sum4M = parseInt($("#est4M").val() || 0);
	let sum5M = parseInt($("#est5M").val() || 0);
	let sum6M = parseInt($("#est6M").val() || 0);
	let sum7M = parseInt($("#est7M").val() || 0);
	let sum8M = parseInt($("#est8M").val() || 0);
	let sum9M = parseInt($("#est9M").val() || 0);
	let sum10M = parseInt($("#est10M").val() || 0);

	let sumVAT1M = parseInt($("#estVAT1M").val() || 0);
	let sumVAT2M = parseInt($("#estVAT2M").val() || 0);
	let sumVAT3M = parseInt($("#estVAT3M").val() || 0);
	let sumVAT4M = parseInt($("#estVAT4M").val() || 0);
	let sumVAT5M = parseInt($("#estVAT5M").val() || 0);
	let sumVAT6M = parseInt($("#estVAT6M").val() || 0);
	let sumVAT7M = parseInt($("#estVAT7M").val() || 0);
	let sumVAT8M = parseInt($("#estVAT8M").val() || 0);
	let sumVAT9M = parseInt($("#estVAT9M").val() || 0);
	let sumVAT10M = parseInt($("#estVAT10M").val() || 0);


	let sumM = sum1M + sum2M + sum3M + sum4M + sum5M + sum6M + sum7M + sum8M + sum9M + sum10M;
	let sumVATM = sumVAT1M + sumVAT2M + sumVAT3M + sumVAT4M + sumVAT5M + sumVAT6M + sumVAT7M + sumVAT8M + sumVAT9M + sumVAT10M;
	$("#fn_totalM").val(sumM);
	$("#fn_totalVTAM").val(sumVATM);
};
function calc_result(size_horizonM, size_verticalM, frameM) {
	return Number(size_horizonM) * Number(size_verticalM) * Number(frameM) / 100000;
}
function calc_result1(size_horizonM, size_verticalM, frameM) {
	return Number(size_horizonM) * Number(size_verticalM) * Number(frameM) * 9 / 10 / 100000;
}



// 모바일 JS  START====================================================================


// //문자 제거
// function removeChar(event) {
//     event = event || window.event;
//     let keyID = (event.which) ? event.which : event.keyCode;
//     if (keyID == 8 || keyID == 46 || keyID == 37 || keyID == 39)
//         return;
//     else
//         //숫자와 소수점만 입력가능
//         event.target.value = event.target.value.replace(/[^-\.0-9]/g, "");
// }
// //콤마 찍기
//     function comma(obj) {
//         let regx = new RegExp(/(-?\d+)(\d{3})/);
//         let bExists = obj.indexOf(".", 0);//0번째부터 .을 찾는다.
//         let strArr = obj.split('.');
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
//     let input_value = document.getElementById('input1');
//     input_value.value = uncomma(input_value.value);
// }

