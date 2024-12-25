<?php
//error_reporting(0); 
if (!defined('ROOT_PATH'))
	exit('server time out');
if (!defined('Copyright') && Copyright != 'TG: cp567.cc')
	exit('TG: cp567.cc');
if(is_mobile_request()=='pc'){
?>
<html>
<head>
	<title>��ӭ����</title>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
	<link href="common.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		body {
			width: 100%;
			background-color: #ffffff;
			border-top: 2px solid #00387e;
			text-align: center
		}

		.H10 {
			height: 10px;
			width: 100%;
			background-color: #ffffff
		}

		.main {
			width: 990px;
			padding: 0;
			margin: 0 auto;
			border-top: 20px solid #3076cc
		}

		.body {
			width: 988px;
			padding: 0;
			margin: 0 auto;
			color: #000;
			border-right: 1px solid #eeeeee;
			border-left: 1px solid #eeeeee;
			border-bottom: 1px solid #eeeeee
		}
		.body_resize {
			width: 955px;
			margin: 0 auto;
			background-color: #00459b
		}

		#rulesarea {
			text-align: left;
			margin: 0px auto;
			padding: 5px 0px;
			background-color: #fff;
			color: #444
		}

		#rulesarea h3.rules_title {
			margin: 0;
			padding: 5px 0 0 0px;
			font-size: 16px;
			text-align: center;
			color: #003576;
			background-color: #fafafa;
			border-bottom: 2px solid #eeeeee;
		}

		#rulesarea ul {
			position: relative;
			left: 20px
		}

		#rulesarea ul li {
			width: 95%;
			padding: 8px 0 3px 8px;
			font-size: 12px;
			border-bottom: 1px solid #ffffff;
			list-style-type: none
		}

		#rulesarea ul li span p {
			padding: 3px;
			line-height: 1.7em
		}

		#rulesarea div.regulations li {
			background: none;
			border: 0;
		}

		#noteArea {
			text-align: left;
			margin: 0px auto;
			padding: 10px 10px;
			background-color: #c4e5ff;
			color: #0d2946;
			border-top: 3px solid #3076cc;
			border-bottom: 3px solid #3076cc
		}

		#noteArea h3.rules_title {
			margin: 0px 0 2px 0;
			padding: 0;
			position: relative;
			left: 30px;
			font-size: 16px;
			color: #ff0000;
		}

		#noteArea ul {
			position: relative;
			left: 20px
		}

		#noteArea ul li {
			width: 95%;
			padding: 8px 0 3px 8px;
			font-size: 12px;
			list-style-type: none
		}

		#noteArea ul li span p {
			padding: 3px;
			line-height: 1.7em
		}

		div.btnArea {
			margin: 15px auto;
			padding: 10px 0 5px 0;
			text-align: center;
			background-color: #f1f1f1;
			border: 1px solid #cacaca;
			color: #ff0000
		}

		div.btnArea div {
			font-size: 13px;
		}

		div.btnArea .btn {
			margin: 5px 0 5px 10px;
			padding: 0 5px;
			height: 28px;
			font-size: 15px;
			font-weight: bold
		}
	</style>

<body>
	<?php
	$db = new DB();
	$sql = "SELECT * FROM `cn_user` WHERE `kauser` = '{$loginName}' AND `pwd` = 1    LIMIT 1 ";
	$result = $db->query($sql, 1);
	if ($result) {
		//�ж��ʺ��Ƿ���Ҫ������������
		alert_href($loginName . '�����״ε�½�����ϼ��������룬��Ҫ�޸����룡', 'vip/change.php');
	} else {
	?>
		<form action="/vip/index.php" method="post" name="form1">
			<input type="hidden" name="sid" value="yes" />
			<div class="main">
				<div class="body">
					<div class="body_resize">
						<div id="rulesarea">
							<h3 class="rules_title">�û�Э�������</h3>
							<div class="spacer"></div>
							<div class="regulations">
								<ul>
									<li>( 1 ) ��������ע֮����ȴ���ע��ĳɹ���ʾ��Ϣ��</li>
									<li>( 2 ) Ϊ�˱���������飬���������ע֮���顰��ע״������</li>
									<li>( 3 ) �κε�Ͷ�߱����ڿ���֮ǰ���������˾���������κο���֮���Ͷ�ߡ�</li>
									<li>( 4 ) ����Ͷע��Ŀ����������ʱ���ֵ��κδ��ִ����ǹ�����Ϊʧ�󣬱���˾��������������Ͱ���ȷ���ʽ���Ͷע��Ȩ����</li>
									<li>( 5 ) ����֮��������Ϊ�������ʣ���עʱ��ȷ�ϵ�ǰ���ʼ�����עȷ�Ϻ�һ�Ų��ܸ��ġ�</li>
									<li>( 6 ) �������Ͷע��������Ϊ��Ч��</li>
									<li>( 7 ) ����ݲ�ͬ�Ļ�Ա�˺������õ�Ͷע��Χ������ͬ����Ͷע�����趨��Χ������˾��Ȩȡ���䳬��֮Ͷע��</li>
									<li>( 8 ) �ͻ�ÿ�ε�½ʱ��Ӧ�ú˶��Լ��˻��Ľ������Խ��������κ����ʣ����ڵ�һʱ����֪ͨ����˾��</li>
									<li>( 9 ) ���������뱾��˾����֮�ͻ���Ӧע�������ڵĹ��һ��ס�ؿ��ܹ涨���粩�ʲ��Ϸ������������ʵ������˾���������κοͻ���Υ�����ز��ʻ�Ĳ�����������֮�κ����Ρ�
									</li>
									<li>( 10 )
										���������⺧�������ƻ���Ϊ�򲻿ɿ���֮�ֺ����ص�����վ���ϻ������𻵡����϶�ʧ����������ǽ��Ա���˾���Ͻ���֮������Ϊ��������ݣ�Ϊ��ȷ��������ʵ���棬�����Ա���׺���ӡ���ϣ�����˾�Ž���Ͷ�߼�����
									</li>
									<li>( 11 ) �������˽���Ϸ����</li>
								</ul>
							</div>
						</div>
						<div class="H10"></div>
						<div id="noteArea">
							<h3 class="rules_title"></h3>
							<ul>
								<li><span class='rules_content'>
										<?php echo addslashes($config['a6']) ?>
									</span></li>
							</ul>
						</div>

						<div id="rulesarea">
							<div class="btnArea">
								<div>�˽� �Լ� ͬ�� ���� ������Э��͹���</div>
								<input onClick="top.location='vip/logout.php'" type="submit" value="��ͬ��" name="Submit"
									class="btn">
								<input type="submit" value="ͬ��" name="Submit2" onClick="document.form1.submit();"
									class="btn">
							</div>
						</div>
					</div><!-- body_resize End -->
				</div><!-- body  End -->
			</div><!-- main  End -->
		</form>
		<?php
		//if($loginName=="kk333"){
//alert('֪ͨ:150�����ڲ��ֶ�Ф�����ʴ���,���½������,�������½���,����������֪,���������Ĳ���,�����!');
//}
		$db = new DB();
		$text = $db->query("SELECT text FROM cn_news WHERE alert = 1   ORDER BY id DESC LIMIT 1 ", 0);
		if ($text) {
			$n = strip_tags($text[0][0]);
			alert(trim($n));
		}
		$sql = "SELECT * FROM `cn_user` WHERE `kauser` = '{$loginName}' AND `stat` = 2   LIMIT 1 ";
		$result = $db->query($sql, 1);
		if ($result) {
			//�ж��ʺ��Ƿ񶳽�
			alert("��Ǹ�������ʺ��ѱ����ᣨֻ�޲��ʹ��ܿ��ã����������������ϵ��");
		}
		$userstar = 0;
		if (guanuser("star", $user[0]['guan']) == 1) {
			$userstar = 1;
		}
		if (guanuser("star", $user[0]['zong']) == 1) {
			$userstar = 1;
		}
		if (guanuser("star", $user[0]['dan']) == 1) {
			$userstar = 1;
		}
		if (guanuser("star", $user[0]['ddan']) == 1) {
			$userstar = 1;
		}
		if ($user[0]['star'] == 1) {
			$userstar = 1;
		}
		if ($userstar == 1) {
			alert("��Ǹ�������ʺ��ѱ����ᣨֻ�޲��ʹ��ܿ��ã����������������ϵ��");
		}
    }?>
</body>
</html>
<?php }else{ ?>
<html class=" ios iphone mobile portrait">
    <head>
    <title>��ӭ����</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="/css/mCommon.css">
    <link rel="stylesheet" type="text/css" href="/css/mRule.css?t=0">
    <style type="text/css">
        div.btnArea .btn {
            margin: 5px 0 5px 10px;
            padding: 0 5px;
            width: 400px;
            height: 160px;
            font-size: 60px;
            font-weight: bold
        }
    </style>
    <script src="/js/jquery-1.4.1.min.js"></script>
</head>
<body>
<script>
$(document).ready(function(){		
	$(".chmob").click(function(){
		 self.location='/m' ;

	})
	$(".chpc").click(function(){
		 self.location='/vip' ;

	})
	$(".chout").click(function(){
         self.location='/vip/logout.php' ;
	})
})
</script>
<form action="/vip/index.php" method="post" id="myform" name="myform">
        <div class="main">
            <div class="body">
                <div class="body_resize">
                    <div id="rulesarea">
                        <h3 class="rules_title">�û�Э�������</h3>
                        <div class="rulesBorderDv">
                            <div class="spacer"></div>
                            <div class="regulations">
                                <ul>
                                    <li>( 1 ) Ϊ����������飬�����������ע֮��鿴��Ͷע��ϸ����</li>
                                    <li>( 2 ) �κ�Ͷ�߱����ڿ���֮ǰ����˾���������κο���֮���Ͷ�ߡ�</li>
                                    <li>( 3 ) ��������ʱ���ֵ��κδ��ִ����ǹ�����Ϊʧ�����У���أ�ע��һ�ɲ��㡣</li>
                                    <li>( 4 ) ����֮��������Ϊ�������ʣ���עʱ��ȷ�ϵ�ǰ���ʼ�����עȷ�Ϻ�һ�ɲ����޸ġ�</li>
                                    <li>( 5 ) ��������ܵ�Ͷע��һ����Ϊ��Ч��</li>
                                    <li>( 6 ) ������˾���ֿͻ��Բ��������ַ�Ͷע��Ͷעע������������˾����Ȩ��ȡ������Ӧ֮ע�����ͻ��������κ����顣</li>
                                    <li>( 7 ) �����������·���⵼�½������ݻ��������˺��趨�����ϵ����Σ����ڿ���ǰ�����뱾��˾���練ӳ���⣬���򱾹�˾�������Ͽ��е�����Ϊ׼��</li>
                                    <li>( 8 ) ����������ڿ������ƻ���Ϊ�򲻿ɿ���֮�ֺ�����վ���ϻ������𻵡����ݶ�ʧ���������˾�������Ͽ�����Ϊ���ݡ�</li>
                                    <li>( 9 ) ����������Ա���ͻ�����Ա�ϵͳ����ܽ����˽⼰��Ϥ���κ�Υ������ʹ�õĲ�������˾�Ų�����</li>
                                    <li>( 10 ) �������˽�������Ϸ����</li>
                                    <li>( 11 ) �����Ա���ö�ȳ������Ϊ������������飬һ���Թ�˾����Ϊ׼��</li>
                                    <li>( 12 ) �ͻ�������ȷ���Լ����˻������뱣�ܣ�����ͻ������Լ������ϱ����ã�Ӧ����֪ͨ����˾���������������ϸ���ϡ�</li>
                                    <li>( 13 ) ����ˮ�����ʵĹ��ܿ���ʱ��Ϊ����������飬�����������עǰȷ����ˮ�Ƿ�Ϊ����Ҫ����ˮ�趨ֵ��</li>
                                </ul>
                            </div>
                            <div>
                                <div>
                                    <h3 class="tip_title">��������ʾ��</h3>
                                    <div id="noteArea">
                                        <ul>
                                            <li>
                                                <span class="rules_content">�𾴵��û�ף����������죬�ϼ�ƽ����</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="rulesarea">
                                        <div class="btnArea">
                                            <div class="agreeDv">�˽� �Լ� ͬ�� ���� ������Э��͹���</div>
                                            <div class="btnDv">
                                                <input type="button" value="���԰�" name="Submit" class="btn chpc" onclick="self.location='/member/index'">
                                                <input type="button" value="�ֻ���" name="Submit2" class="btn chmob" onclick="self.location = '/mobile/index'">
                                                <input type="button" value="��ͬ��" name="Submit" class="btn chout" onclick="self.location='/logout'">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div></form>
</body></html>
<?php } ?>