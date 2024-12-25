<?php
//echo "1";
if (!defined('ROOT_PATH'))
exit('server time out');
if (!defined('Copyright') || Copyright != 'TG: cp567.cc')
exit('TG: cp567.cc');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>welcome</title>
</head>
 <style>
 * {
	margin: 0px;
	padding: 0px;
	list-style-type: none;
}
body {
	background-color: #BBDFF7;
	width: 1034px;
	margin-top: 0px;
	margin-right: auto;
	margin-bottom: 0px;
	margin-left: auto;
}

.back1 {
	list-style-type: none;
	width: 1034px;
	background-image: url(/115_files/images/loginback1.jpg);
	background-repeat: no-repeat;
	background-position: center top;
	height: 665px;
	float: left;
}
.back2 {
	list-style-type: none;
	width: 1034px;
	background-image: url(/115_files/images/loginback2.jpg);
	background-repeat: no-repeat;
	background-position: center top;
	height: 665px;
	float: left;
}
.back3 {
	list-style-type: none;
	width: 1034px;
	background-image: url(/115_files/images/loginback3.jpg);
	background-repeat: no-repeat;
	background-position: center top;
	height: 665px;
	float: left;
}
.text {
	float: left;
	width: 1000px;
	padding-top: 278px;
	padding-left: 34px;
	color: #FFFFFF;
	font-size: 12px;
}
.textb {
	float: left;
	width: 1000px;
	padding-top: 344px;
	padding-left: 34px;
	color: #FFFFFF;
	font-size: 12px;
}
.textC {
	float: left;
	width: 1000px;
	padding-top: 240px;
	padding-left: 34px;
	color: #FFFFFF;
	font-size: 12px;
}
.login {
	float: left;
	width: 263px;
	padding-top: 235px;
	padding-left: 213px;
	padding-right: 558px;
}
.loginb {
	float: left;
	width: 263px;
	padding-top: 170px;
	padding-left: 430px;
}
.loginc {
	float: left;
	width: 350px;
	padding-top: 1px;
	padding-left: 663px;
}
.login1 {
	float: left;
	width: 263px;
	line-height: 30px;
}
.login1h {
	float: left;
	width: 238px;
	padding-top: 8px;
}
.login2 {
	float: left;
	width: 190px;
	padding-top: 8px;
	padding-left: 73px;
}
.login3{
	float: left;
	width: 263px;
	padding-top: 8px;
}
.blu18 {
	color: #1571B2;
	font-family: "黑体";
	font-size: 18px;
}
.white18 {
	color: #FFFFFF;
	font-family: "黑体";
	font-size: 18px;
}
.white19 {
	color: #EACA17;
    line-height:300px;
	font-weight:bold;
	font-family: "黑体";
	position: relative;  
	font-size: 100px;
	text-shadow: 3px 3px 1px #600; 
}


.logintext {
	float: left;
	width: 72px;
	padding-left: 2px;
	text-align: center;
}
.logintext1 {
	float: left;
	width: 672px;
	
	padding-left: 2px;
	text-align: center;
}
.login1c {
	float: left;
	width: 350px;
}

.loginC {
	float: left;
	padding-left: 4px;
	padding-top: 16px;
}

#textiup {
	height: 22px;
	width: 155px;
	border: 1px solid #007AC3;
}
.logintext input {
	height: 20px;
	width: 135px;
}

 </style>
<body>
<form name="form_login" method="post" action="">
<div class="back3"><div class="logintext1"><span class="white19 "><?php echo configModel('webname');?></span></div>
<div class="loginc">
<div class="login1c">
<div class="login1h">
<div class="login1h">
  <div class="logintext"><span class="white18 ">账 号：</span></div>
  <input name="user" type="text" id="user" style="width:135px"/> 
</div>
<div class="login1h">
  <div class="logintext"><span class="white18 ">密 碼：</span></div> 
  <input name="pass" type="password" id="pass" style="width:135px"/>
</div>
<div class="login1h">
  <div class="logintext"><span class="white18 ">验证码：</span></div> 
  <input name="code" type="text" class="inputBlock" style="width:80px;border: 1px solid;" tabindex="3">
					              <b class="code"><?php echo $_SESSION['code'];?></b>
</div>
</div>
<div class="loginC"><input  name="loginBtn" type="image" value="提交" src="/115_files/images/butter2.gif" width="65" height="51" tabindex="3"/>
</div>
</div>
</div>
<div class="textC">&nbsp;</div>
</div>
</form>
<script language="javascript"> 
document.getElementById('user').focus();
</script>
</body>
</html> 