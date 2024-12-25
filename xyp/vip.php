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
	<title>欢迎光临</title>
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
		//判断帐号是否需要重新设置密码
		alert_href($loginName . '你是首次登陆或者上级更改密码，需要修改密码！', 'vip/change.php');
	} else {
	?>
		<form action="/vip/index.php" method="post" name="form1">
			<input type="hidden" name="sid" value="yes" />
			<div class="main">
				<div class="body">
					<div class="body_resize">
						<div id="rulesarea">
							<h3 class="rules_title">用户协议与规则</h3>
							<div class="spacer"></div>
							<div class="regulations">
								<ul>
									<li>( 1 ) 当你在下注之后，请等待下注后的成功提示信息。</li>
									<li>( 2 ) 为了避免出现争议，你必须在下注之后检查“下注状况”。</li>
									<li>( 3 ) 任何的投诉必须在开奖之前提出，本公司不会受理任何开奖之后的投诉。</li>
									<li>( 4 ) 所有投注项目，公布赔率时出现的任何打字错误或非故意人为失误，本公司将保留改正错误和按正确赔率结算投注的权利。</li>
									<li>( 5 ) 公布之所有赔率为浮动赔率，下注时请确认当前赔率及金额，下注确认后一概不能更改。</li>
									<li>( 6 ) 开奖后的投注，将被视为无效。</li>
									<li>( 7 ) 因根据不同的会员账号所设置的投注金额范围有所不同，如投注金额超出设定范围，本公司有权取消其超出之投注金额。</li>
									<li>( 8 ) 客户每次登陆时都应该核对自己账户的结算金额。如对结算金额有任何疑问，请在第一时间内通知本公司。</li>
									<li>( 9 ) 敬告有意与本公司博彩之客户，应注意您所在的国家或居住地可能规定网络博彩不合法，若此情况属实，本公司将不接受任何客户因违反当地博彩或赌博法令所引起之任何责任。
									</li>
									<li>( 10 )
										倘若发生遭骇客入侵破坏行为或不可抗拒之灾害因素导致网站故障或资料损坏、资料丢失等情况，我们将以本公司线上交易之后备资料为最后处理依据；为了确保各方真实利益，请各会员交易后列印资料，本公司才接受投诉及处理。
									</li>
									<li>( 11 ) 请认真了解游戏规则。</li>
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
								<div>了解 以及 同意 以上 列明的协议和规则</div>
								<input onClick="top.location='vip/logout.php'" type="submit" value="不同意" name="Submit"
									class="btn">
								<input type="submit" value="同意" name="Submit2" onClick="document.form1.submit();"
									class="btn">
							</div>
						</div>
					</div><!-- body_resize End -->
				</div><!-- body  End -->
			</div><!-- main  End -->
		</form>
		<?php
		//if($loginName=="kk333"){
//alert('通知:150期由于部分二肖连赔率错误,导致结算错误,现已重新结算,请各级别互相告知,给您带来的不便,请见谅!');
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
			//判断帐号是否冻结
			alert("抱歉！您的帐号已被冻结（只限查帐功能可用），请和您的上线联系。");
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
			alert("抱歉！您的帐号已被冻结（只限查帐功能可用），请和您的上线联系。");
		}
    }?>
</body>
</html>
<?php }else{ ?>
<html class=" ios iphone mobile portrait">
    <head>
    <title>欢迎光临</title>
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
                        <h3 class="rules_title">用户协议与规则</h3>
                        <div class="rulesBorderDv">
                            <div class="spacer"></div>
                            <div class="regulations">
                                <ul>
                                    <li>( 1 ) 为避免出现争议，请您务必在下注之后查看“投注明细”。</li>
                                    <li>( 2 ) 任何投诉必须在开奖之前，公司将不接受任何开奖之后的投诉。</li>
                                    <li>( 3 ) 公布赔率时出现的任何打字错误或非故意人为失误，所有（相关）注单一律不算。</li>
                                    <li>( 4 ) 公布之所有赔率为浮动赔率，下注时请确认当前赔率及金额，下注确认后一律不能修改。</li>
                                    <li>( 5 ) 开奖后接受的投注，一律视为无效。</li>
                                    <li>( 6 ) 若本公司发现客户以不正当的手法投注或投注注单不正常，公司将有权“取消”相应之注单，客户不得有任何异议。</li>
                                    <li>( 7 ) 如因软件或线路问题导致交易内容或其他与账号设定不符合的情形，请在开奖前立即与本公司联络反映问题，否则本公司将以资料库中的数据为准。</li>
                                    <li>( 8 ) 倘若发生遭黑客入侵破坏行为或不可抗拒之灾害致网站故障或资料损坏、数据丢失等情况，公司将以资料库数据为依据。</li>
                                    <li>( 9 ) 各级管理人员及客户必须对本系统各项功能进行了解及熟悉，任何违反正常使用的操作，公司概不负责。</li>
                                    <li>( 10 ) 请认真了解以下游戏规则。</li>
                                    <li>( 11 ) 如果会员信用额度超额或者为负数引起的争议，一律以公司处理为准。</li>
                                    <li>( 12 ) 客户有责任确保自己的账户及密码保密，如果客户怀疑自己的资料被盗用，应立即通知本公司，并更改其个人详细资料。</li>
                                    <li>( 13 ) 当退水换赔率的功能开启时，为避免出现争议，请您务必在下注前确认退水是否为您所要的退水设定值。</li>
                                </ul>
                            </div>
                            <div>
                                <div>
                                    <h3 class="tip_title">【亲切提示】</h3>
                                    <div id="noteArea">
                                        <ul>
                                            <li>
                                                <span class="rules_content">尊敬的用户祝您：生活愉快，合家平安！</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="rulesarea">
                                        <div class="btnArea">
                                            <div class="agreeDv">了解 以及 同意 以上 列明的协议和规则</div>
                                            <div class="btnDv">
                                                <input type="button" value="电脑版" name="Submit" class="btn chpc" onclick="self.location='/member/index'">
                                                <input type="button" value="手机版" name="Submit2" class="btn chmob" onclick="self.location = '/mobile/index'">
                                                <input type="button" value="不同意" name="Submit" class="btn chout" onclick="self.location='/logout'">
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