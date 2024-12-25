<?php
//echo "1";
if (!defined('ROOT_PATH'))
exit('server time out');
if (!defined('Copyright') || Copyright != 'TG: cp567.cc')
exit('TG: cp567.cc');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class=" desktop portrait"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Welcome</title>
<link rel="stylesheet" type="text/css" href="666_files/css/css.css">
<script type="text/javascript" src="/666_files/js/unicode.js"></script>
<script type="text/javascript" src="/666_files/js/device.js"></script>	
<style type="text/css">
h1 {
    margin: 0;
    text-align: center;
    font: normal 90px/1 "Microsoft YaHei", Helvetica, Arial, sans-serif;
    color: #e3d641;
    text-shadow: 0 1px 0 #cccccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbbbbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaaaaa, 0 6px 1px rgb(0 0 0 / 10%), 0 0 5px rgb(0 0 0 / 10%), 0 1px 3px rgb(0 0 0 / 30%), 0 3px 5px rgb(0 0 0 / 20%), 0 5px 10px rgb(0 0 0 / 25%), 0 10px 10px rgb(0 0 0 / 20%), 0 20px 20px rgb(0 0 0 / 15%); -webkit-transition: .2s all linear;
    filter: progid:DXImageTransform.Microsoft.MotionBlur(strength=3, direction=145);
}

</style>	
</head>
<body>
<form name="form_login" method="post" action="">
<input type="hidden" name="act" value="userlogin">
<div class="back3" style="background-image:url(666_files/images/bg.jpg)">
<div style="float:left;padding-top:60px;width:800px;"><h1 class="logoName" id="logoName"><?php echo configModel('webname');?></h1></div>
<div class="loginc" style="padding-top:150px;">
<div class="login1c">
<div class="login1h">
<div class="login1h">
<div class="logintext">
<span class="white18">账 号：</span>
</div>
<input name="user" type="text" id="user" style="width:135px" value="">
</div>
<div class="login1h">
<div class="logintext">
<span class="white18">密 码：</span>
</div>
<input name="pass" type="password" id="pwd" style="width:135px" value="">
</div>
</div>
<div class="loginC">
<input type="hidden" name="token" id="token" value="">
<input type="image" src="666_files/images/butter2.gif" width="65" height="51">
</div>
</div>
</div>
<div class="textC"> </div>
</div>
</form>
<script type="text/javascript">
			if(window.parent.length>0)window.parent.location=location;
			_t=Math.round((new Date).getTime()/1e3);
			function c(e){
				if(e.username.value==''||e.username.value.length<3){
					alert(e.username.value==''?"请输入账号！":"账号长度不少于3位！");
					e.username.focus();return false;
				}else if(e.pwd.value==''||e.pwd.value.length<3){
					alert(e.pwd.value==''?"请输入密码！":"密码长度不少于3位！");
					e.pwd.focus();return false;
				}g("f",_t);e.action="index.php/Login?t="+_t+"&token="+document.getElementById('token').value;
			}
			function g(e,n){t=document.createElement("input");t.type="hidden";t.name=e;t.value=n;document.getElementById("form1").appendChild(t)}
			document.oncontextmenu=function(){return false}
			document.getElementById('username').focus();
			function getUrlParms(name){
				var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
				var r = window.location.search.substr(1).match(reg);
				return r!=null?unescape(r[2]):'';
			}
			document.getElementById('token').value=getUrlParms('token');gn();
			function gn() {
				try {
					xhr = new XMLHttpRequest();
				} catch(e) {
					xhr = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xhr.open('post','index.php/Login?getname=4&token='+document.getElementById('token').value,true);
				xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
				xhr.send();
				xhr.onreadystatechange = function() {
					if (xhr.readyState == 4 && xhr.status == 200 && typeof(xhr.responseText) == 'string') {
						document.getElementById('logoName').innerText = eval("("+xhr.responseText+")");
					}
				};
			}
		</script>
<script type="text/javascript">
			//检查客户端
			function chk_pc() {
				var isMobile = device.mobile(),
				isIos = device.ios(),
				isAndroid = device.android();
				var width = window.screen.width;
				if ((isMobile || isIos || isAndroid) && width<=900) {
					//location.href = '/mindex.html?token='+document.getElementById('token').value;
				}
			}
			window.onresize = function () {
				chk_pc();
			}
			chk_pc();
			
</script>		


</body></html>