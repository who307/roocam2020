var count = 2;

function addForm(){
 
	var addedFormDiv = document.getElementById("addedFormDiv");
   
	var str = "";
   
	str+=""+count+" .가로<input id='horizon' style='font-size: 17px; margin:5px 5px;  width: 170px; height:30px'; type='text' name='horizon' onKeyup='this.value=this.value.replace(/[^0-9]/g,'')'; value=''> 세로<input id='vertical' style='font-size: 17px; margin:0 5px;  width: 170px; height:30px;' type='text' name='vertical' onKeyup='this.value=this.value.replace(/[^0-9]/g,'');' value=''>위치<input style='font-size: 17px; margin:0 5px;  width: 170px; height:30px;' type='text' name='' value=''>";
   
   
   
	var addedDiv = document.createElement("div"); 
   
	addedDiv.id = "added_"+count; 
   
	addedDiv.innerHTML = str; 
	
	if(count <6) {
	addedFormDiv.appendChild(addedDiv); 
   
   
   
	count++;
   
	document.baseForm.count.value=count;
}
	}
	function delForm(){
 
		var addedFormDiv = document.getElementById("addedFormDiv");
	   
		if(count >2){ 
	   
		var addedDiv = document.getElementById("added_"+(--count));
	   
		addedFormDiv.removeChild(addedDiv);
	   
		}
		}
	  
