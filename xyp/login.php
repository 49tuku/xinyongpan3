<?php
//echo "1";
if (!defined('ROOT_PATH'))
exit('server time out');
if (!defined('Copyright') || Copyright != 'TG: cp567.cc')
exit('TG: cp567.cc');
if ($_GET['code']!=$qtCode&&$_GET['code']!=$htCode){
   	header('Location: indexdh.php'); // δ��¼����ת����¼ҳ��
	exit(); // ������ǰ�ű�����  
}

include_once ROOT_PATH.'cnclass/class.php';

//if ($_SESSION['abc'] != '202011')
//{
 //   header('location:abc/');
//}

if (configModel('opwww') == 1) exit(back($config['a6']));
		
if ($_SERVER["REQUEST_METHOD"] == 'POST')
{
	//���C��ƥ��
	//if ($_POST['code'] == $_SESSION['code'])
	if ($_POST['user'] !="")
	{
        if($_SESSION['code'] !=$_POST['code']){
            // alert1("��֤����󣡣���");
        }
		//���C�û��������Ƿ����
		$loginName = checkStr($_POST['user'])?checkStr($_POST['user']):alert1("�˺Ŵ��󣡣���");
		if (empty($_POST['pass'])){alert1("���벻��Ϊ�գ�����");}	
		$loginPwd = md5($_POST['pass']);
		$db=new DB();
		$sql = "SELECT * FROM `cn_user` WHERE `kauser` = '{$loginName}' AND `kapassword` = '{$loginPwd}'   LIMIT 1 ";
		$result = $db->query($sql, 1);
		if ($result)
		{
	
			//�Д��ʺ��Ƿ��ѱ�ͣ��
			if ($result[0]['stat'] == 1) exit(back("��Ǹ�������ʺ��ѱ���ֹʹ�ã��������������ϵ��"));
			$useronline = $db->query("SELECT id FROM cn_user WHERE g_out = 1  ", 3);
			if ($useronline > configModel('ggpz')) exit(back("ϵͳ��æ!���Ժ���ԇ��"));
			$loginIp = GetIP();
			$loginDate = date("Y-m-d H:i:s");
			$tjid=md5($loginDate);
			$sql = "UPDATE `cn_user` SET `zlogin` = '{$loginDate}', `zip` = '{$loginIp}',`tjid` = '{$tjid}',`look` =look+1, `g_out` =1  WHERE `kauser` = '{$loginName}' AND `kapassword` = '{$loginPwd}'   ";		
			$db->query($sql, 2);	
			$qqWryInfo = ROOT_PATH.'cnclass/QQWry.Dat';
			$ip_s = ipLocation($loginIp, $qqWryInfo);
			$sql = "INSERT INTO tjj (username, ip, tjid, adddate,ipname,zt) VALUES ('{$loginName}','{$loginIp}','{$ip_s}',now(),'�û���¼','5')";
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
			back("�ʺŻ��������!!!");
			exit;
		}
	} 
	else 
	{
		//back("��֤�����!");
		back("�ʺŻ��������!");
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
