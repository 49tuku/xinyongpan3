<?php
//echo "1";
if (!defined('ROOT_PATH'))
exit('server time out');
if (!defined('Copyright') || Copyright != 'TG: cp567.cc')
exit('TG: cp567.cc');
if ($_GET['code']!=$qtCode&&$_GET['code']!=$htCode){
   	header('Location: indexdh.php'); // 未登录则跳转到登录页面
	exit(); // 结束当前脚本运行  
}

include_once ROOT_PATH.'cnclass/class.php';

//if ($_SESSION['abc'] != '202011')
//{
 //   header('location:abc/');
//}

if (configModel('opwww') == 1) exit(back($config['a6']));
		
if ($_SERVER["REQUEST_METHOD"] == 'POST')
{
	//验證码匹配
	//if ($_POST['code'] == $_SESSION['code'])
	if ($_POST['user'] !="")
	{
        if($_SESSION['code'] !=$_POST['code']){
            // alert1("验证码错误！！！");
        }
		//验證用户和密码是否存在
		$loginName = checkStr($_POST['user'])?checkStr($_POST['user']):alert1("账号错误！！！");
		if (empty($_POST['pass'])){alert1("密码不能为空！！！");}	
		$loginPwd = md5($_POST['pass']);
		$db=new DB();
		$sql = "SELECT * FROM `cn_user` WHERE `kauser` = '{$loginName}' AND `kapassword` = '{$loginPwd}'   LIMIT 1 ";
		$result = $db->query($sql, 1);
		if ($result)
		{
	
			//判斷帐号是否已被停用
			if ($result[0]['stat'] == 1) exit(back("抱歉！您的帐号已被禁止使用，请和您的上线联系。"));
			$useronline = $db->query("SELECT id FROM cn_user WHERE g_out = 1  ", 3);
			if ($useronline > configModel('ggpz')) exit(back("系统繁忙!请稍后重試。"));
			$loginIp = GetIP();
			$loginDate = date("Y-m-d H:i:s");
			$tjid=md5($loginDate);
			$sql = "UPDATE `cn_user` SET `zlogin` = '{$loginDate}', `zip` = '{$loginIp}',`tjid` = '{$tjid}',`look` =look+1, `g_out` =1  WHERE `kauser` = '{$loginName}' AND `kapassword` = '{$loginPwd}'   ";		
			$db->query($sql, 2);	
			$qqWryInfo = ROOT_PATH.'cnclass/QQWry.Dat';
			$ip_s = ipLocation($loginIp, $qqWryInfo);
			$sql = "INSERT INTO tjj (username, ip, tjid, adddate,ipname,zt) VALUES ('{$loginName}','{$loginIp}','{$ip_s}',now(),'用户登录','5')";
			$db->query($sql, 2);
			$_SESSION['username'] = $result[0]['kauser'];	
			//dump($_SESSION['username']);
			$_SESSION['tjid']= $tjid;

			//dump($_SESSION['username']);
			include_once ROOT_PATH.'vip.php';
			exit;
		}
		else 
		{
			back("帐号或密码错误!!!");
			exit;
		}
	} 
	else 
	{
		//back("验证码错误!");
		back("帐号或密码错误!");
		exit;
	}
} 
else
{
	$num = array();
	for ($i=0; $i<4; $i++) 
	{
		$num[$i] = rand(0,9);
	}
	$num = join('', $num);
	$_SESSION['code'] = $num;
}

// dump(ROOT_PATH.configModel('a1').'.php');
include_once ROOT_PATH.configModel('a1').'.php';
// include_once '666.php';
?>
