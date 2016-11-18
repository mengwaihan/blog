<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="cn">

	<head>
		<meta charset="utf-8" />
		<meta name="keywords" content="个人网站">
		<meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>个人网站</title>

		<link rel="stylesheet" type="text/css" href="<?php echo C('Url');?>css/message/message.css"></link>
		<link rel="stylesheet" type="text/css" href="<?php echo C('Url');?>css/public/public.css"></link>
		<link rel="stylesheet" type="text/css" href="<?php echo C('Url');?>css/public/bootstrap.min.css"></link>
		<link rel="stylesheet" type="text/css" href="<?php echo C('Url');?>css/public/bootstrap-theme.min.css"></link>


	<script src="<?php echo C('Url');?>js/public/jquery-1.10.2.min.js"></script>
	<script src="<?php echo C('Url');?>js/public/bootstrap.min.js"></script>
	<script src="<?php echo C('Url');?>js/index/index.js"></script>

		<style type="text/css">
			* {
				margin: 0;
				padding: 0;
			}
			
			body,
			input {
				font-size: 14px;
				line-height: 24px;
				color: #333;
				font-family: Microsoft yahei, Song, Arial, Helvetica, Tahoma, Geneva;
			}
			
			h1 {
				margin-bottom: 15px;
				height: 100px;
				line-height: 100px;
				text-align: center;
				font-size: 24px;
				color: #fff;
				background: #0051a1;
			}
			
			#content #post,
			#comment p {
				zoom: 1;
			}
			
			#content #post:after,
			#comment p:after {
				display: block;
				height: 0;
				clear: both;
				visibility: hidden;
				overflow: hidden;
				content: '.';
			}
			
			.transition {
				-webkit-transition: all 0.5s linear;
				-moz-transition: all 0.5s linear;
				-o-transition: all 0.5s linear;
				-ms-transition: all 0.5s linear;
				transition: all 0.5s linear;
			}
			
			#content {
				margin: 0 auto;
				width: 960px;
				overflow: hidden;
			}
			
			#content #post {
				margin-bottom: 15px;
				padding-bottom: 15px;
				border-bottom: 1px #d4d4d4 dashed;
			}
			
			#content #post textarea {
				display: block;
				margin-bottom: 10px;
				padding: 5px;
				width: 948px;
				height: 390px;
				border: 1px #d1d1d1 solid;
				border-radius: 5px;
				resize: none;
				outline: none;
			}
			
			#content #post textarea:hover {
				border: 1px #9bdf70 solid;
				background: #f0fbeb;
			}
			
			#content #post #postBt,
			#content #post #clearBt {
				margin-left: 5px;
				padding: 3px;
				float: right;
			}
			
			#comment {
				overflow: hidden;
			}
			
			#comment p {
				margin-bottom: 10px;
				padding: 10px;
				border-radius: 5px;
			}
			
			#comment p:nth-child(odd) {
				border: 1px solid #e3e197;
				background: #ffd;
			}
			
			#comment p:nth-child(even) {
				border: 1px solid #adcd3c;
				background: #f2fddb;
			}
			
			#comment p span {
				display: inline;
				float: left;
			}
			
			#comment p .msg {
				width: 738px;
			}
			
			#comment p .datetime {
				width: 200px;
				color: #999;
				text-align: right;
			}
		</style>
		<script type="text/javascript">
			var Storage = {
				saveData: function() //保存数据 
					{
						var data = $(".transition").val();
						if (data != "") {
							$.post("__URL__/baocun", "data=" + data , function (data) {
									if(data == 0){
										alert("留言失败");
									}
                                    window.location.href="__APP__/Index/message";
                                });
                                         
							// var time = new Date().getTime() + Math.random() * 5; //getTime是Date对象中的方法，作用是返回 1970年01月01日至今的毫秒数 
							// localStorage.setItem(time, data.value + "|" + this.getDateTime()); //将毫秒数存入Key值中，可以降低Key值重复率 
							// data.value = "";
							// this.writeData();
						} else {
							alert("请填写您的留言！");
						}
					}
			}
			window.onload = function() {
				document.getElementById("postBt").onclick = function() {
						Storage.saveData();
					} //发表评论按钮添加点击事件，作用是将localStorage中的数据输出 
			}
		</script>
	</head>

	<body>
		<div class="ou-body">
			<div class="head">
				<div id='container'>
					<nav>
						<ul>
							<li>
								<a href='__APP__/Index/index' title='博客首页'>博客首页</a>
							</li>
							<li>
								<a href='__APP__/Index/article' title='精彩专题'>精彩专题</a>
							</li>
							<li>
								<a href='__APP__/Index/jotting' title='心情日志'>心情日志</a>
							</li>
							<li>
								<a href='#' title='留言板'>留言板</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>

			<div class="clear"></div>

			<div class="message">
				<div class="message-content">
					<div class="title">
						<span>留言板</span>
					</div>
					<div id="content">
						<div id="post">
							<textarea class="transition"></textarea>
							<input id="postBt" type="button" value="发表评论" />
							<input id="clearBt" type="reset" value="清空数据" />
						</div>
						<div id="comment"></div>
					</div>

					<div class="clear"></div>

				</div>
				<div class="message-wrap">
					<div class="message-reply">
						<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="message-reply-content">
							<span class="message-name">
								<?php echo ($vo["data"]); ?>
							</span>
							<br>
							<?php echo (date('Y-m-d H:i:s',$vo["time"])); ?>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
				<div id="top">
					<div id="top_div" onclick="scrollTo(0)"></div>
				</div>
			</div>
		</div>
	</body>

</html>