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
	<script type="text/javascript" src="__PUBLIC__/admin/uploadify/jquery.uploadify.min.js"></script>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/uploadify/uploadify.css" />

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
			.message-input{
				display: block;
				float: left;
				width: 100%;
			}
			.message-input input{
				display: block;
    float: left;
    margin-bottom: 10px;
    margin-left: 5px;
    width: 100px;
			}
			
			
			
			
.personalLeft
{display: block;
float: left;
width: 100%;
height: 170px;
}			
			
.personalLeft .file-box{
	position:relative;
	width:140px;
}
.personalLeft .file{
	height: 24px;
    opacity: 0;
    position: absolute;
    right: 40px;
    top: 0;
    width: 100px;
    z-index: 1;
	cursor:pointer;
}
.personalLeft label{
	position: absolute;
	display: block;
	left: 20px;
	top: 0;
	font-size: 14px;
	color: #808080;
}

.SafeSetting-ouLeft .file-box{
	position:relative;
	width:140px;
}
.SafeSetting-ouLeft .file{
	height: 24px;
    opacity: 0;
    position: absolute;
    right: 40px;
    top: 0;
    width: 100px;
    z-index: 1; }
    
    .file-tit{
    	display: block;
    	float: left;
    }
    .photo
    {
    	position: relative;
    display: block;
    float: left;
    height: 100px;
    margin: 10px;
    width: 120px;
    }
    .clear
    {
    	clear:both;
    }
		</style>


		
	</head>

	<body>
	<form class="form-horizontal" role="form" method="post" action="__URL__/uprecord" enctype="multipart/form-data">
	<input type="hidden" name="Id" value="<?php echo ($res[0]['Id']); ?>"/>
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
								<a href='__APP__/Index/message' title='留言板'>留言板</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>

			<div class="clear"></div>

			<div class="message">
				<div class="message-content">
					<div class="title">
						<span>修改随笔</span>
					</div>
					<div class="message-input">
						<input class="form-control" name="title" id="title" type="test" value="<?php echo ($res[0]['title']); ?>" />
					</div>
					<div><span class="file-tit">添加图片</span></div>
					<div class="personalLeft">
						<!--<img src="/<?php echo ($user_data['userPic']); ?>" />-->
						
						<div class="file-box">
							<input id="file_upload" name="file_upload" type="file" multiple/>
						</div>
						<div id="image">
						<?php if(is_array($abab)): $k = 0; $__LIST__ = $abab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><div id="suijishu<?php echo ($k); ?>" class="photo"><img class="clas" clas="<?php echo ($vo); ?>" src="/<?php echo ($vo); ?>"    height='100px' width='120px' style="vertical-align: middle;text-align: center;"/><div class="del" style="height: 20px;position:absolute;right: 6px;top: 0;width: 20px;"><a href="javascript:void(0)" onclick=delfile("<?php echo ($vo); ?>","suijishu<?php echo ($k); ?>")><img src="__PUBLIC__/admin/photo/j1.png" width="27px" height="25px"/></a></div></div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<input type="hidden" id="obj" name="piclist" value="<?php echo ($res[0]['piclist']); ?>"/>
					<div class="clear"></div>
					<div id="content">
						<div id="post">
							<textarea class="transition" name="data" id="abc"><?php echo ($res[0]['data']); ?></textarea>
							<input class="btn btn-info" id="postBt" name="submit" type="submit" value="提交" />
							<input class="btn btn-danger" id="clearBt" type="button" value="清空内容" />
						</div>
						<div id="comment"></div>
					</div>

					<div class="clear"></div>

				</div>
				<!--<div class="message-wrap">
					<div class="message-reply">
						<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="message-reply-content">
							<span class="message-name">
								<?php echo ($vo["data"]); ?>
							</span>
							<br>
							<?php echo (date('Y-m-d H:i:s',$vo["time"])); ?>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>-->
<!-- 				<div id="top">
					<div id="top_div" onclick="scrollTo(0)"></div>
				</div> -->
			</div>
		</div>
		</form>
	</body>

</html>

<script type="text/javascript">
		$('#clearBt').click(function(){
			$('#abc').val('');
		});
			
		function newGuid()
		{
			var guid = "";
			for (var i = 1; i <= 32; i++){
			  var n = Math.floor(Math.random()*16.0).toString(16);
			  guid +=   n;
			  if((i==8)||(i==12)||(i==16)||(i==20))
				guid += "-";
			}
			return guid;
		}

 		Array.prototype.indexOf = function(val) {
            for (var i = 0; i < this.length; i++) {
                if (this[i] == val) return i;
            }
            return -1;
        };
        Array.prototype.remove = function(val) {
            var index = this.indexOf(val);
            if (index > -1) {
                this.splice(index, 1);
            }
        };
        $('#file_upload').uploadify({
				'formData'     : {
					'timestamp' : '<?php echo ($time); ?>',            //时间
					'token'     : '<?php echo (md5($time )); ?>',		//加密字段
					'url'		: '__URL__',	//url
					'imageUrl'	: '__ROOT__'			//root
				},
				'queueSizeLimit':30,
				//'simUploadLimit':5,
				'fileTypeDesc' : 'Image Files',					//类型描述
				//'removeCompleted' : false,    //是否自动消失
        		'fileTypeExts' : '*.gif; *.jpg; *.png',		//允许类型
        		'fileSizeLimit' : '3MB',					//允许上传最大值
				'swf'      : '__PUBLIC__/admin/uploadify/uploadify.swf',	//加载swf
				'uploader' : '__URL__/uploadify/',					//上传路径
				'buttonText' :'上传图片',									//按钮的文字
				'onUploadSuccess' : function(file, data, response) {			//成功上传返回
            		var n= newGuid();
					var dat = $.trim(data);
					if($('#obj').val()=="")
					{
						$('#obj').val(dat);
					}
					else
					{
						var v = $('#obj').val();
						var a = v+","+dat;
						$('#obj').val(a);
					}

            	//alert(dat);
            	//插入到image标签内，显示图片的缩略图
				$('#image').append('<div id="'+n+'" class="photo"><img class="clas" clas="'+dat+'" src="/'+dat+'"    height=100 width=120 style="vertical-align: middle;text-align: center;"/><div class="del" style="height: 20px;position:absolute;right: 6px;top: 0;width: 20px;"><a href="javascript:void(0)" onclick=delfile("'+dat+'","'+n+'")><img src="__PUBLIC__/admin/photo/j1.png" width="27px" height="25px"/></a></div></div>').show();

				 }

			});
		//删除本地文件
		function delfile(filename,delid){
			$.get("__URL__/delfile/",{filename:filename},function(data){
				if(data > 0){
					var d='#'+delid;
					$(d).remove();
					var str="";
					$(".clas").each(function(){
						str += $(this).attr('clas')+",";
					});
					str=str.substring(0,str.length-1);

					$('#obj').val(str);

				}else{
					alert("删除失败！");
				}
			});
		}
			
		</script>