function plus() {
	$(function () {
		// function form_btn(n) {
		// 	var num = document.getElementById("num"); // 폼 선택
		// 	num_val = parseInt(num.value); // 폼 값을 숫자열로 변환
		// 	num_val += n; // 계산
		// 	num.value = num_val; // 계산된 값을 바꾼다
		// 	if (num_val <= 0) {
		// 		num.value = 1;   // 만약 값이 0 이하면 1로 되돌려준다, 1보다 작은 수는 나타나지 않게하기 위해   
		// 	}
		// }
		// var asd ='<input type="text" id="num" style="border:none;border-right:0px; border-top:0px; boder-left:0px; boder-bottom:0px;"value="1" />'

		var hor = '&nbsp;&nbsp;가로<input id="horizon" style="font-size: 25px; margin:0 20px 80px 20px; width: 200px; height:40px"; type="text" name="horizon" onKeyup="this.value=this.value.replace(/[^0-9]/g,"")"; value=""> 세로<input id="vertical" style="font-size: 25px; margin:0 20px; width: 200px; height:40px;" type="text" name="vertical" onKeyup="this.value=this.value.replace(/[^0-9]/g,"");" value="">위치<input style="font-size: 25px; margin:0 20px; width: 200px; height:40px;" type="text" name="" value="">'

		$(".JS_list").append( "<br>" + hor);
	});
}

