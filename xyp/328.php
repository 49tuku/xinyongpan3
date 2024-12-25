<?php
//echo "1";
if (!defined('ROOT_PATH'))
exit('server time out');
if (!defined('Copyright') || Copyright != 'TG: cp567.cc')
exit('TG: cp567.cc');

?>
<html>
  <head>
    <title>Welcome</title>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
    <style type="text/css">
      body,table{font-family: "新細明體";color: #000000;}
      .shadow{background-image:url(/328_files/shadow.gif);background-position:center;background-repeat: no-repeat;height:610px;}  
      .style1 {font-size: 16px;font-weight:bold;margin-right:10px;}
      .style2 {font-size: 16px;font-weight:bold;margin-left:10px;}
      .style6 {text-align:right;font-size: 13px; font-weight: 800;}	
      .btnTd p{height:40px;padding:5px 0 0 0;text-align:left}
      .btnTd p input{margin:0 0 0 8px;}
      .inputBlock{margin:0 0 0 8px;height:20px;width:160px;border:1px solid #000000;color:#000000;filter=progid:dximagetransform.microsoft.gradient(gradienttype=0,startcolorstr=#f9f9f9, endcolorstr=#cfcfcf)}
      .titleTd{font-size:20px;font-weight:bold;padding:0 0 0 60px;}
      .code {font-family:Georgia, "Times New Roman", Times, serif;color:#3333FF;font-size: 18px;}
    </style>
  </head>
  <body bgcolor="#2884b2" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form name="form1" method="post" action="">
    <input type="hidden" name="login" value="yes">
      <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" height="100%"> 
        <tr> 
          <td valign="middle" align="center">      
            <div class="shadow" align="center" >
              <table id="Table_01" width="1005" height="600" border="0" cellpadding="0" cellspacing="0">
                <tr><td colspan="2"><img src="/328_files/328_01.jpg" width="1005" height="416" alt=""></td></tr>
                <tr>
                  <td><img src="/328_files/328_02.jpg" width="400" height="220" alt=""></td>
                  <td width="605" height="220">
                    <table width="100%" height="220" cellspacing="0" cellpadding="0" border="0" background="/328_files/328_03.jpg">
                      <tr>
                        <td width="605" align="left" valign="top">
                          <table width="384" height="113" cellspacing="0" cellpadding="0" border="0" >
                            <tr><td height="30" colspan="3" class="titleTd"><div id="showLg"></div></td></tr>		   
                            <tr>
                              <td width="5"></td>
                              <td width="36" height="26" class="style6" align="center"><div id="showAcc"></div></td>
                              <td width="305"><div align="left"><input name="user" type="text" class="inputBlock" tabindex="1"></div></td>
                            </tr>

                            <tr>
                              <td height="1" class="style6" align="center"></td>
                              <td></td>
                              <td></td>
                            </tr> 
                            <tr>
                              <td></td>
                              <td height="26" width="36" class="style6" align="center"><div id="showPw"></div></td> 
                              <td><div align="left"><input name="pass" type="password" class="inputBlock" tabindex="2"></div></td>					      
                            </tr>
                            
                            <tr>
                              <td></td>
                              <td height="26" width="36" class="style6" align="center"><div id="showYzm"></div></td> 
                              <td><div align="left"><input name="code" type="text" class="inputBlock" style="width:60px" tabindex="3"><b class="code"><?php echo $_SESSION['code'];?></b></div></td>	
                              
                            </tr> 
                            
                                                        <tr>   
                              <td></td>
                              <td></td>
                              <td align="center" valign="bottom" class="btnTd">
                                <p><input name="loginBtn" type="image" value="提交" src="/328_files/button.gif" tabindex="3"></p>
                              </td>
                            </tr>				     
                          </table>
                        </td>
                      </tr>		     
                    </table> 
                  </td>
                </tr>
              </table>
            </div>    
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
<script type="text/javascript">
  lgName = new Array("登入","Login");
  accName = new Array("帐号:","Account:");
  pwName = new Array("密码:","Password:");
  Yzm = new Array("验证:","code:");
  function chgLang(tv){
    showLg.innerHTML = lgName[tv];
    showAcc.innerHTML = accName[tv];
    showPw.innerHTML = pwName[tv];
    showYzm.innerHTML = Yzm[tv];
  }
  showLg.innerHTML = lgName[0];
  showAcc.innerHTML = accName[0];
  showPw.innerHTML = pwName[0];
  showYzm.innerHTML = Yzm[0];
  form1.user.focus();
</script>
