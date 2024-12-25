<?php
define('ROOT_PATH', $_SERVER["DOCUMENT_ROOT"].'/');
include_once ROOT_PATH.'cnclass/config.php';
global $qtCode,$htCode;
?>
<?php
if ($_GET['code'] != $qtCode&&$_GET['code'] != $htCode) {
    if ($_GET['code'] != "") {
        header("Location:http://www.baidu.com/s?wd=" . $_GET['code']);
    }
    ?>
    <!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html>
    <link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
    <link type="text/css" rel="stylesheet" id="dark-mode-general-link">
    <style lang="en" type="text/css" id="dark-mode-custom-style"></style>
    <style lang="en" type="text/css" id="dark-mode-native-style"></style>
    <style lang="en" type="text/css" id="dark-mode-native-sheet"></style>

    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
        <link href="/images/style.css?v=210729163912" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="/images/jquery.js"></script>
        <script type="text/javascript">
            var brand = 'HQ';
            var ie = 6;
        </script>
    </head>

    <body class="search">
        <div id="outer">
            <i class="spacer"></i>
            <div id="middle">
                <div id="wrap">
                    <div id="default" class="context" style="margin-top:-80px;">

                        <div class="png logo brand"></div>
                        <div class="inputs">
                            <div class="input-box safecode-box">
                                <i class="ico ico-search"></i>
                                <input type="password" id="SafeCode" name="SafeCode" value="" autocomplete="off" size="30"
                                    maxlength="30" placeholder="" onkeypress="if(event.keyCode==13){onSubmit()}">
                            </div>
                            <a id="btnSubmit" class="inlinebk mobile-pt14" href="javascript:void(0)" onclick="onSubmit()">
                                <img class="png" src="images/search_ico.png">
                                <span class="txt inlinebk">搜索 </span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="footer" style="">
            <div class="browserSupport">
                <a href="https://support.microsoft.com/zh-tw/help/17621/internet-explorer-downloads" class="invisbleBtn ie"
                    target="_blank"></a>
                <a href="https://www.mozilla.org/zh-TW/firefox/new/?utm_medium=referral&amp;utm_source=firefox-com"
                    class="invisbleBtn mz" target="_blank"></a>
                <a href="https://www.google.com/chrome/" class="invisbleBtn ch" target="_blank"></a>
                <a href="https://browser.qq.com/" class="invisbleBtn qq" target="_blank"></a>
                <a href="https://browser.360.cn/se/" class="invisbleBtn cn360" target="_blank"></a>
                <img class="png" src="images/btn_explorer.png">
            </div>
            <span class="inlinebk mobile-pt14 vm"></span>
        </div>
        <div class="landscape-mask">为了更好的浏览体验，请使用竖屏浏览！</div>
        <!--[if IE 6]>
            <script src="/Public/Dh/new/js/DD_belatedPNG.js?v=210729163912"></script>
            <script type="text/javascript">ie=6;</script>
            <![endif]-->
        <!--[if IE 7]>
                 <script type="text/javascript">ie=7;</script>
            <![endif]-->
        <!--[if IE 8]>
                 <script type="text/javascript">ie=8;</script>
            <![endif]-->
        <!--[if IE 9]>
                 <script type="text/javascript">ie=9;</script>
            <![endif]-->
        <script>
            function change_device() {
                if ((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i))) {
                    var num = 'HQ' == 'HY' ? 0 : 29;
                    document.getElementById("footer").style.top = (document.body.clientHeight - 80 - 29) + "px";
                    //document.body.style.height = document.body.clientHeight + "px";
                } else {
                    //document.getElementById("footer").style.bottom = "0px";
                    document.getElementById("footer").removeAttribute("style");
                }
            }
            change_device();
            window.onload = function () {
                window.DD_belatedPNG && DD_belatedPNG.fix('.png');
                var btnSubmit = document.getElementById('btnSubmit');
                var kw = document.getElementById('SafeCode');
                document.getElementById('SafeCode').focus();
                if (btnSubmit.addEventListener) {
                    btnSubmit.addEventListener("click", onSubmit);
                    kw.addEventListener("keyup", preventSubmit)
                } else {
                    btnSubmit.attachEvent("onclick", onSubmit);
                    kw.attachEvent("keyup", preventSubmit);
                }
                $(".menu").click(function (e) {
                    if (e.target !== this) return;
                    $(".menu .containber").addClass("active");
                });
                $(".menu .close").click(function (e) {
                    $(".menu .containber").removeClass("active");
                });
            }
            function onSubmit(e) {
                if (document.getElementById('SafeCode').value.length > 0) {
                    // form.submit();
                    //var u = "/index.php/index/index3/phone/0.html?SafeCode="+document.getElementById('SafeCode').value;
                    var u = "?code=" + document.getElementById('SafeCode').value;
                    location.href = u;
                } else {
                    return;
                }
            }
            function preventSubmit(e) {
                if (e.keyCode == 13) {
                    onSubmit(e);
                }
            }
            // 兼容IE9下的placeholder
            function placeholderSupport() {
                return 'placeholder' in document.createElement('input');
            }
            if (!placeholderSupport()) {   // 判断浏览器是否支持 placeholder
                $("[placeholder]").each(function () {
                    var _this = $(this);
                    var left = _this.css("padding-left");
                    _this.parent().append('<span class="placeholder" data-type="placeholder" style="left: ' + left + '">' + _this.attr("placeholder") + '</span>');
                    if (_this.val() != "") {
                        _this.parent().find("span.placeholder").hide();
                    } else {
                        _this.parent().find("span.placeholder").show();
                    }
                }).on("focus", function () {
                    $(this).parent().find("span.placeholder").hide();
                }).on("blur", function () {
                    var _this = $(this);
                    if (_this.val() != "") {
                        _this.parent().find("span.placeholder").hide();
                    } else {
                        _this.parent().find("span.placeholder").show();
                    }
                });
                // 点击表示placeholder的标签相当于触发input
                $("span.placeholder").on("click", function () {
                    $(this).hide();
                    $(this).siblings("[placeholder]").trigger("click");
                    $(this).siblings("[placeholder]").trigger("focus");
                });
            }
            window.addEventListener('resize', function () {
                change_device();
            });
        </script>



    </body>

    </html>
    <?php
} else {
    
    define('safeCode', $_GET['code']);
    ?>
    <!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html class=" desktop portrait">
    <link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
    <link type="text/css" rel="stylesheet" id="dark-mode-general-link">
    <style lang="en" type="text/css" id="dark-mode-custom-style"></style>
    <style lang="en" type="text/css" id="dark-mode-native-style"></style>
    <style lang="en" type="text/css" id="dark-mode-native-sheet"></style>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Welcome</title>
    </head>

    <body>
        <link href="/css/pc.css" rel="stylesheet" type="text/css">
        <title></title>
        <div class="top" style="background-color:#fff;margin:0 auto;">
            <div style="text-align:center;font-size:45px;color:red;font-weight:bold;padding:0 0 2px 0">导航</div>
            <div class="clear"></div>
        </div>
        <div class="top1" style="margin:0 auto;border:none;padding-top: 0px;">
            <div class="left1" style="margin:0 auto;float:none;width:820px;border:1px solid #c4d1cb;padding:20px;">
                <div class="title" style="clear:both;">会员</div>
                <div class="box">
                    <ul>
                        <li class="liWrap"
                            style="width:150px;border:1px solid #54b2e2;border-radius: 10px;background:#ebf7ff;"><a
                                id="siteName_0" target="_blank" href="http://user.xzy.com?code=<?php echo $_GET['code'];?>"
                                style="display:block;">线路1&nbsp;&nbsp;&nbsp;<b
                                    style="color:#ff9b9b;">10ms</b></a><span></span></li>
                        <li class="liWrap"
                            style="width:150px;border:1px solid #54b2e2;border-radius: 10px;background:#ebf7ff;"><a
                                id="siteName_0" target="_blank" href="http://user.xzy.com?code=<?php echo $_GET['code'];?>"
                                style="display:block;">线路2&nbsp;&nbsp;&nbsp;<b
                                    style="color:#ff9b9b;">10ms</b></a><span></span></li>
                        <li class="liWrap"
                            style="width:150px;border:1px solid #54b2e2;border-radius: 10px;background:#ebf7ff;"><a
                                id="siteName_0" target="_blank" href="http://user.xzy.com?code=<?php echo $_GET['code'];?>"
                                style="display:block;">线路3&nbsp;&nbsp;&nbsp;<b
                                    style="color:#ff9b9b;">10ms</b></a><span></span></li>
                        <li class="liWrap"
                            style="width:150px;border:1px solid #54b2e2;border-radius: 10px;background:#ebf7ff;"><a
                                id="siteName_0" target="_blank" href="http://user.xzy.com?code=<?php echo $_GET['code'];?>"
                                style="display:block;">线路4&nbsp;&nbsp;&nbsp;<b
                                    style="color:#ff9b9b;">10ms</b></a><span></span></li>
                        <li class="liWrap"
                            style="width:150px;border:1px solid #54b2e2;border-radius: 10px;background:#ebf7ff;"><a
                                id="siteName_0" target="_blank" href="http://user.xzy.com?code=<?php echo $_GET['code'];?>"
                                style="display:block;">线路5&nbsp;&nbsp;&nbsp;<b
                                    style="color:#ff9b9b;">10ms</b></a><span></span></li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="top1" style="margin:0 auto;border:none;">
            <div class="left1" style="margin:0 auto;float:none;width:820px;border:1px solid #c4d1cb;padding:20px;">
                <div class="title" style="clear:both;">代理</div>
                <div class="box">
                    <ul>
                        <li class="liWrap"
                            style="width:150px;border:1px solid #54b2e2;border-radius: 10px;background:#ebf7ff;"><a
                                id="siteName_5" target="_blank" href="http://dl.xzy.com?code=<?php echo $_GET['code'];?>"
                                style="display:block;">线路1&nbsp;&nbsp;&nbsp;<b
                                    style="color:#ff9b9b;">10ms</b></a><span></span></li>
                        <li class="liWrap"
                            style="width:150px;border:1px solid #54b2e2;border-radius: 10px;background:#ebf7ff;"><a
                                id="siteName_5" target="_blank" href="http://dl.xzy.com?code=<?php echo $_GET['code'];?>"
                                style="display:block;">线路2&nbsp;&nbsp;&nbsp;<b
                                    style="color:#ff9b9b;">10ms</b></a><span></span></li>
                        <li class="liWrap"
                            style="width:150px;border:1px solid #54b2e2;border-radius: 10px;background:#ebf7ff;"><a
                                id="siteName_5" target="_blank" href="http://dl.xzy.com?code=<?php echo $_GET['code'];?>"
                                style="display:block;">线路3&nbsp;&nbsp;&nbsp;<b
                                    style="color:#ff9b9b;">10ms</b></a><span></span></li>
                        <li class="liWrap"
                            style="width:150px;border:1px solid #54b2e2;border-radius: 10px;background:#ebf7ff;"><a
                                id="siteName_5" target="_blank" href="http://dl.xzy.com?code=<?php echo $_GET['code'];?>"
                                style="display:block;">线路4&nbsp;&nbsp;&nbsp;<b
                                    style="color:#ff9b9b;">10ms</b></a><span></span></li>
                        <li class="liWrap"
                            style="width:150px;border:1px solid #54b2e2;border-radius: 10px;background:#ebf7ff;"><a
                                id="siteName_5" target="_blank" href="http://dl.xzy.com?code=<?php echo $_GET['code'];?>"
                                style="display:block;">线路5&nbsp;&nbsp;&nbsp;<b
                                    style="color:#ff9b9b;">10ms</b></a><span></span></li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <?php if($htCode==$_GET['code']){ ?>
        <div class="top1" style="margin:0 auto;border:none;padding-top: 0px;">
            <div class="left1" style="margin:0 auto;float:none;width:820px;border:1px solid #c4d1cb;padding:20px;">
                <div class="title" style="clear:both;">后台</div>
                <div class="box">
                    <ul>
                        <li class="liWrap"
                            style="width:150px;border:1px solid #54b2e2;border-radius: 10px;background:#ebf7ff;"><a
                                id="siteName_0" target="_blank" href="http://admin.xzy.com?code=<?php echo $_GET['code'];?>"
                                style="display:block;">线路1&nbsp;&nbsp;&nbsp;<b
                                    style="color:#ff9b9b;">10ms</b></a><span></span></li>
                        <li class="liWrap"
                            style="width:150px;border:1px solid #54b2e2;border-radius: 10px;background:#ebf7ff;"><a
                                id="siteName_0" target="_blank" href="http://admin.xzy.com?code=<?php echo $_GET['code'];?>"
                                style="display:block;">线路2&nbsp;&nbsp;&nbsp;<b
                                    style="color:#ff9b9b;">10ms</b></a><span></span></li>
                        <li class="liWrap"
                            style="width:150px;border:1px solid #54b2e2;border-radius: 10px;background:#ebf7ff;"><a
                                id="siteName_0" target="_blank" href="http://admin.xzy.com?code=<?php echo $_GET['code'];?>"
                                style="display:block;">线路3&nbsp;&nbsp;&nbsp;<b
                                    style="color:#ff9b9b;">10ms</b></a><span></span></li>
                        <li class="liWrap"
                            style="width:150px;border:1px solid #54b2e2;border-radius: 10px;background:#ebf7ff;"><a
                                id="siteName_0" target="_blank" href="http://admin.xzy.com?code=<?php echo $_GET['code'];?>"
                                style="display:block;">线路4&nbsp;&nbsp;&nbsp;<b
                                    style="color:#ff9b9b;">10ms</b></a><span></span></li>
                        <li class="liWrap"
                            style="width:150px;border:1px solid #54b2e2;border-radius: 10px;background:#ebf7ff;"><a
                                id="siteName_0" target="_blank" href="http://admin.xzy.com?code=<?php echo $_GET['code'];?>"
                                style="display:block;">线路5&nbsp;&nbsp;&nbsp;<b
                                    style="color:#ff9b9b;">10ms</b></a><span></span></li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <?php } ?>
        <div class="top1" style="margin:0 auto;border:none;color:grey;">
        </div>
        <div id="speed" style="display:none"><img src="" width="1" height="1"
                onerror="auto(14)" style="display:none"></div>
        <script>
            var li0 = document.getElementsByTagName('li');
            var li = new Array();
            for (var i = 0; i < li0.length; i++) {
                if (li0[i].className == 'liWrap') li.push(li0[i]);
            }
            var st;
            var count = 1;
            var oSpeed = document.getElementById('speed');
            var timeout = null;
            var autourl = [];
            function auto(i) {
                var obj = li[i].getElementsByTagName("b")[0];
                if (count > 200) {
                    obj.innerHTML = "链接超时";
                } else {
                    obj.innerHTML = count * 10 + "ms";
                }
                count = 1;
            }
            // 新方法
            function newTest() {
                count = 1;
                clearInterval(timeout);
                timeout = null;
                timeout = setInterval("count++", 100);
                var src = '';
                var obj = null;
                for (var i = 0; i < li.length; i++) {
                    obj = li[i].getElementsByTagName("b")[0];
                    obj.innerHTML = "测速中";
                    src = location.href;
                    oSpeed.innerHTML = "<img src=" + src + " width=1 height=1 onerror=auto(" + i + ") style='display:none'>";
                };
            }
            newTest();
        </script>
        <iframe height="1" width="1"
            style="position: absolute; top: 0px; left: 0px; border: none; visibility: hidden;"></iframe>



    </body>

    </html>


<?php } ?>