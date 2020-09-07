<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=euc-kr">
</HEAD>
<BODY>

<h1> TEST 회원가입 </h1>
<FORM METHOD="post" ACTION="signUp1.php">
	이름 : <INPUT TYPE ="text" NAME="userName"> <br>
	비밀번호 : <INPUT TYPE ="password" id="userPassword1" NAME="userPassword1" required> <br>
	비밀번호 확인 : <INPUT TYPE ="password" id="userPassword2" > 
	<INPUT TYPE="button" onclick="PW_verify()" VALUE="비밀번호확인하기" required>
	<br>
	전화번호 : <INPUT TYPE = "text" NAME="userNumber"> <br>
	지역 : <INPUT TYPE ="text" NAME="userAddr"> <br>
	이메일 : <INPUT TYPE ="text" NAME="email"> <br>
	<BR><BR>
	<INPUT TYPE="submit" VALUE="회원 입력" >
</FORM>

<script type="text/javascript">

	function PW_verify(){
			if(document.getElementById('userPassword1').value == document.getElementById('userPassword2').value){
				alert("비밀번호가 확인 되었습니다.")
		}else{
			alert("비밀번호가 같지 않습니다.")
	}}
</script>

</BODY>
</HTML>