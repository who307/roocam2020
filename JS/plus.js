var count = 2;

function addForm() {

	var addedFormDiv = document.getElementById("addedFormDiv");
	var str = "";
	var horizon = "size_horizon"
	var vertical = "size_vertical"
	var size_position = "size_position"





	str += "" + count + " .가로<input id='horizon' style='font-size: 17px; margin:5px 5px;  width: 170px; height:30px'; type='text' name='" + horizon + count + "'onKeyup=this.value=this.value.replace(/[^0-9]/g,''); value='' Placeholder='cm' required> 세로<input id='vertical' style='font-size: 17px; margin:0 5px;  width: 170px; height:30px;' type='text' name='" + vertical + count + "'onKeyup=this.value=this.value.replace(/[^0-9]/g,''); value='' Placeholder='cm' required> 위치<select style='font-size: 17px;  margin:0 5px; width: 178px; height:36px; outline:none;' name='" + size_position + count + "' required><option value='베란다'>베란다<option value='거실'>거실<option value='방'>방<option value='화장실'>화장실<option value='기타'>기타</select>";



	var addedDiv = document.createElement("div");

	addedDiv.id = "added_" + count;

	addedDiv.innerHTML = str;

	if (count < 4) {
		addedFormDiv.appendChild(addedDiv);

		count++;

		document.count = count;
	}
}
function delForm() {

	var addedFormDiv = document.getElementById("addedFormDiv");

	if (count > 2) {

		var addedDiv = document.getElementById("added_" + (--count));

		addedFormDiv.removeChild(addedDiv);

	}
}
// 모바일버전
function addForm1() {
	var addedFormDiv = document.getElementById("addedFormDiv1");
	var str = "";
	var horizon = "size_horizon"
	var vertical = "size_vertical"
	var size_position = "size_position"

	str += "" + count + " .가로<input id='horizon' style='font-size: 11px; margin:10px 0 0 5px; width: 87px; height:17px;'; type='text' name='" + horizon + count + "'onKeyup=this.value=this.value.replace(/[^0-9]/g,''); value='' required> &nbsp;세로<input id='vertical' style='font-size: 1px; margin:0 5px 0 5px; width: 87px; height:17px;' type='text' name='" + vertical + count + "'onKeyup=this.value=this.value.replace(/[^0-9]/g,''); value='' required><br> &nbsp;&nbsp;&nbsp; 위치<select style='font-size: 11px; margin:10px 0 0 5px; width: 95px; height:23px; outline: none;' name='" + size_position + count + "' required><option value='베란다'>베란다<option value='거실'>거실<option value='방'>방<option value='화장실'>화장실<option value='기타'>기타</select>";

	var addedDiv = document.createElement("div");
	addedDiv.id = "added_" + count;
	addedDiv.innerHTML = str;
	if (count < 4) {
		addedFormDiv.appendChild(addedDiv);
		count++;
		document.count = count;
	}
}

function delForm1() {

	var addedFormDiv = document.getElementById("addedFormDiv1");

	if (count > 2) {

		var addedDiv = document.getElementById("added_" + (--count));

		addedFormDiv.removeChild(addedDiv);

	}
}
