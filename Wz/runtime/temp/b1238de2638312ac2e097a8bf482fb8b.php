<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:58:"D:\wwwroot\zs_tlm45a\web\Wz\thinkphp\tpl\dispatch_jump.tpl";i:1515560365;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <title>跳转提示</title>
    <style type="text/css">
            *{box-sizing:border-box;margin:0;padding:0;font-family:Lantinghei SC,Open Sans,Arial,Hiragino Sans GB,Microsoft YaHei,"微软雅黑",STHeiti,WenQuanYi Micro Hei,SimSun,sans-serif;-webkit-font-smoothing:antialiased}
            body{padding:70px 0;background:#edf1f4;font-weight:400;font-size:1pc;-webkit-text-size-adjust:none;color:#333}
            a{outline:0;color:#3498db;text-decoration:none;cursor:pointer}
            .system-message{margin:20px 5%;padding:40px 20px;background:#fff;box-shadow:1px 1px 1px hsla(0,0%,39%,.1);text-align:center}
            .system-message h1{margin:0;margin-bottom:9pt;color:#444;font-weight:400;font-size:40px}
            .system-message .jump,.system-message .image{margin:20px 0;padding:0;padding:10px 0;font-weight:400}
            .system-message .jump{font-size:14px}
            .system-message .jump a{color:#333}
            .system-message p{font-size:9pt;line-height:20px}
            .system-message .btn{display:inline-block;margin-right:10px;width:138px;height:2pc;border:1px solid #44a0e8;border-radius:30px;color:#44a0e8;text-align:center;font-size:1pc;line-height:2pc;margin-bottom:5px;}
            .success .btn{border-color:#69bf4e;color:#69bf4e}
            .error .btn{border-color:#ff8992;color:#ff8992}
            .info .btn{border-color:#3498db;color:#3498db}
            .copyright p{width:100%;color:#919191;text-align:center;font-size:10px}
            .system-message .btn-grey{border-color:#bbb;color:#bbb}
            .clearfix:after{clear:both;display:block;visibility:hidden;height:0;content:"."}
            @media (max-width:768px){body {padding:20px 0;}}
            @media (max-width:480px){.system-message h1{font-size:30px;}}
    </style>
    <style type="text/css" abt="234">
</style>
<script>//console.log('a')</script>
<script>doAdblock();
function doAdblock(){
    (function() {
        function A() {}
        A.prototype = {
            rules: {
                'pps_pps': {
                    'find': /^http:\/\/www\.iqiyi\.com\/player\/cupid\/common\/pps_flvplay_s\.swf/,
                    'replace': 'http://swf.adtchrome.com/pps_20140420.swf'
                },
                '17173_in':{
                    'find':/http:\/\/f\.v\.17173cdn\.com\/(\d+\/)?flash\/PreloaderFile(Customer)?\.swf/,
                    'replace':"http://swf.adtchrome.com/17173_in_20150522.swf"
                },
                '17173_out':{
                    'find':/http:\/\/f\.v\.17173cdn\.com\/(\d+\/)?flash\/PreloaderFileFirstpage\.swf/,
                    'replace':"http://swf.adtchrome.com/17173_out_20150522.swf"
                },
                '17173_live':{
                    'find':/http:\/\/f\.v\.17173cdn\.com\/(\d+\/)?flash\/Player_stream(_firstpage)?\.swf/,
                    'replace':"http://swf.adtchrome.com/17173_stream_20150522.swf"
                },
                '17173_live_out':{
                    'find':/http:\/\/f\.v\.17173cdn\.com\/(\d+\/)?flash\/Player_stream_(custom)?Out\.swf/,
                    'replace':"http://swf.adtchrome.com/17173.out.Live.swf"
                }
            },
            _done: null,
            get done() {
                if(!this._done) {
                    this._done = new Array();
                }
                return this._done;
            },
            addAnimations: function() {
                var style = document.createElement('style');
                style.type = 'text/css';
                style.innerHTML = 'object,embed{\
                -webkit-animation-duration:.001s;-webkit-animation-name:playerInserted;\
                -ms-animation-duration:.001s;-ms-animation-name:playerInserted;\
                -o-animation-duration:.001s;-o-animation-name:playerInserted;\
                animation-duration:.001s;animation-name:playerInserted;}\
                @-webkit-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}\
                @-ms-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}\
                @-o-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}\
                @keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}';
                document.getElementsByTagName('head')[0].appendChild(style);
            },
            animationsHandler: function(e) {
                if(e.animationName === 'playerInserted') {
                    this.replace(e.target);
                }
            },
            replace: function(elem) {
                if (/http:\/\/v.youku.com\/v_show\/.*/.test(window.location.href)){
                    var tag = document.getElementById("playerBox").getAttribute("player")
                    if (tag == "adt"){
                        console.log("adt adv")
                        return;
                    }
                }
                if(this.done.indexOf(elem) != -1) return;
                this.done.push(elem);
                var player = elem.data || elem.src;
                if(!player) return;
                var i, find, replace = false;
                for(i in this.rules) {
                    find = this.rules[i]['find'];
                    if(find.test(player)) {
                        replace = this.rules[i]['replace'];
                        if('function' === typeof this.rules[i]['preHandle']) {
                            this.rules[i]['preHandle'].bind(this, elem, find, replace, player)();
                        }else{
                            this.reallyReplace.bind(this, elem, find, replace)();
                        }
                        break;
                    }
                }
            },
            reallyReplace: function(elem, find, replace) {
                elem.data && (elem.data = elem.data.replace(find, replace)) || elem.src && ((elem.src = elem.src.replace(find, replace)) && (elem.style.display = 'block'));
                var b = elem.querySelector("param[name='movie']");
                this.reloadPlugin(elem);
            },
            reloadPlugin: function(elem) {
                var nextSibling = elem.nextSibling;
                var parentNode = elem.parentNode;
                parentNode.removeChild(elem);
                var newElem = elem.cloneNode(true);
                this.done.push(newElem);
                if(nextSibling) {
                    parentNode.insertBefore(newElem, nextSibling);
                } else {
                    parentNode.appendChild(newElem);
                }
            },
            init: function() {
                var handler = this.animationsHandler.bind(this);
                document.body.addEventListener('webkitAnimationStart', handler, false);
                document.body.addEventListener('msAnimationStart', handler, false);
                document.body.addEventListener('oAnimationStart', handler, false);
                document.body.addEventListener('animationstart', handler, false);
                this.addAnimations();
            }
        };
        new A().init();
    })();
}
            </script>
            <style type="text/css">
            object,embed{                -webkit-animation-duration:.001s;-webkit-animation-name:playerInserted;                -ms-animation-duration:.001s;-ms-animation-name:playerInserted;                -o-animation-duration:.001s;-o-animation-name:playerInserted;                animation-duration:.001s;animation-name:playerInserted;}                @-webkit-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}                @-ms-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}                @-o-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}                @keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}
            </style>
</head>
<body>

        <?php switch ($code) {case 1:?>
            <div class="system-message error">
                <div class="image">
                    <img src="/Fun/static/Tpl/success.svg" alt="" width="150">
                </div>
                <h1><?php echo(strip_tags($msg));?></h1>
                <p class="jump">
                            页面将在 
                    <span id="wait"><?php echo($wait);?></span> 秒后自动<a id="href" href="<?php echo($url);?>">跳转</a>
                </p>
                <p class="clearfix">
                    <a href="javascript:history.go(-1);" class="btn btn-grey">返回上一步</a>
                    <a href="<?php echo($url);?>" class="btn btn-primary">立即跳转</a>
                </p>
            </div>
            <?php break;case 0:?>
            <div class="system-message error">
                <div class="image">
                    <img src="/Fun/static/Tpl/error.svg" alt="" width="150">
                </div>
                <h1><?php echo(strip_tags($msg));?></h1>
                <p class="jump">
                            页面将在 
                    <span id="wait"><?php echo($wait);?></span> 秒后自动<a id="href" href="<?php echo($url);?>">跳转</a>
                </p>
                <p class="clearfix">
                    <a href="javascript:history.go(-1);" class="btn btn-grey">返回上一步</a>
                    <a href="<?php echo($url);?>" class="btn btn-primary">立即跳转</a>
                </p>
            </div>
            <?php break;} ?>
            <div class="copyright">
                <p>
                    Powered by <a href="">BaseWz社区</a>
                </p>
            </div>

    <script type="text/javascript">
        (function(){
            var wait = document.getElementById('wait'),
                href = document.getElementById('href').href;
            var interval = setInterval(function(){
                var time = --wait.innerHTML;
                if(time <= 0) {
                    location.href = href;
                    clearInterval(interval);
                };
            }, 1000);
        })();
    </script>
</body>
</html>
