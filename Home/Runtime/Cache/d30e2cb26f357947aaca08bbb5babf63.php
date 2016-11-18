<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="cn">

	<head>
		<meta charset="utf-8" />
		<meta name="keywords" content="个人网站">
		<meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>个人网站</title>

		<link rel="stylesheet" type="text/css" href="<?php echo C('Url');?>css/jotting/jotting.css"></link>
		<link rel="stylesheet" type="text/css" href="<?php echo C('Url');?>css/public/public.css"></link>
		<link rel="stylesheet" type="text/css" href="<?php echo C('Url');?>css/public/bootstrap.min.css"></link>
		<link rel="stylesheet" type="text/css" href="<?php echo C('Url');?>css/public/bootstrap-theme.min.css"></link>

	</head>

	<body>
		<div class="ou-body">
			<!--<div class="head">-->
			<header id="header" class="head">
			<!--<header id="header" class="head header header--fixed hide-from-print animated swingInX" role="banner">-->	
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
								<a href='#' title='心情日志'>心情日志</a>
							</li>
							<li>
								<a href='__APP__/Index/message' title='留言板'>留言板</a>
							</li>
						</ul>
					</nav>
				</div>
			</header>
			
			<div class="clear"></div>
			
			<div class="content">
				 
				
				<!-- <div class="chapter">
					<div class="pic">
						
						<div id="myCarousel" class="carousel slide">
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="active item">
									<img src="<?php echo C('Url');?>images/jotting/4.png" />
								</div>
								<div class="item">
									<img src="<?php echo C('Url');?>images/jotting/3.png" />
								</div>
								<div class="item">
									<img src="<?php echo C('Url');?>images/jotting/2.png" />
								</div>
							</div>
							<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
							<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
						</div>
					</div>
					<div class="txt">
						<span>2015年10月26日</span>
						<a class="txt-title">最好的人生，是能自圆其说</a>
						<label>
							最好的人生也不过就是这样了吧，昂起头活出自己，然后努力把嘴里说过话都活成了真实。
							最好的人生是不被旁人所稀释，永远不灰心，不放弃，永远勇往直前。
							好姑娘，愿你一直如钻石般熠熠生辉。
							最好的人生是能自圆其说。
						</label>

					</div>
				</div> -->
				
				<!-- <div class="chapter">
					<div class="pic">
						<img src="<?php echo C('Url');?>images/jotting/5.png" />
					</div>
					<div class="txt">
						<span>2015年10月29日</span>
						<a class="txt-title">落叶</a>
						<label>
							我把落叶捧到树的旁边，深深地埋进了土壤，让它去完成自己的诺言和生命的涅槃。
						</label>

					</div>
				</div>
				<div class="chapter">
					<div class="pic">
						<img src="<?php echo C('Url');?>images/jotting/6.png" />
					</div>
					<div class="txt">
						<span>2015年10月31日</span>
						<a class="txt-title">华年轻盏，淡写悲伤</a>
						<label>
							梦的华裳褪落在秋之尽头，被寒冬悄然拾起，又被无情覆盖。指尖的不忍无奈辗转至
							这一季的怆凉。总叹长路漫漫，又何惜流光易逝，始终看不到终结的繁华！路自无尽
							头，从来都是来了又去,去了还来。等不来的，何曾想到，是经年那场烟雨的一别不复。
						</label>

					</div>
				</div>
				<div class="chapter">
					<div class="pic">
						<img src="<?php echo C('Url');?>images/jotting/7.png" />
					</div>
					<div class="txt">
						<span>2015年11月3日</span>
						<a class="txt-title">心海寻觅</a>
						<label>
							人的心真的很难懂，就像黑洞无法探索，就连自己也许都会迷惑。我不想睡，那秋风也
							不想我睡，那风吹得我刺骨也清醒，假如时间就这么匆匆过去，我该怎么办，以后自己该
							怎么活，也许我已经被现在这种活法所拘束了，心也被拘束了，意识中只想活的平凡，但
							现实的自己却让自己觉得连平凡都遥不可及，也许我该从现在，打开拘束，畅游心海，找
							寻自我，活出新的自己。
							愿寂寞孤单理我而去。
						</label>
					</div>
				</div> -->
				<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="chap-wrap">
				<div class="chapter">		
					<?php if($vo["tiaoshu"] == 1): if(is_array($vo["piclists"])): $k = 0; $__LIST__ = $vo["piclists"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><div class="pic">
							<img src="/<?php echo ($v); ?>" />				
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
					<?php else: ?>
					<div class="pic">
						<div id="myCarousel" class="carousel slide">
							<ol class="carousel-indicators">
								<?php if(is_array($vo["piclists"])): $k = 0; $__LIST__ = $vo["piclists"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><li data-target="#myCarousel" data-slide-to="<?php echo ($k-1); ?>" <?php if($k == 1): ?>class="active"<?php endif; ?>></li><?php endforeach; endif; else: echo "" ;endif; ?>
							</ol>
							<div class="carousel-inner">
							<?php if(is_array($vo["piclists"])): $k = 0; $__LIST__ = $vo["piclists"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><div class="<?php if($k == 1): ?>active<?php endif; ?> item">
									<img src="/<?php echo ($v); ?>" />
								</div><?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
							<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
							<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
						</div>
					</div><?php endif; ?>	
					<div class="txt">
						<span><?php echo (date('Y-m-d H:i:s',$vo["time"])); ?></span>
						<a class="txt-title"><?php echo ($vo["title"]); ?></a>
						<label>
							<?php echo ($vo["d"]); ?>
						</label>
					</div>
					<div class="acp">
						<a class="btn-sm btn btn-primary jotting-edit" href="__URL__/uprecord/id/<?php echo ($vo["Id"]); ?>">编辑</a>
						<a class="delele btn-sm btn btn-danger jotting-del" delete="<?php echo ($vo["Id"]); ?>">删除</a>
					</div>
					
				</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
				
				<div class="chapter">
					<div>
						<a style="color: #fff;margin-top: 90px;width: 100%;" 
							class="btn btn-sm btn-warning" href='__APP__/Index/record'
							 target="_blank">添加随笔</a>
					</div>
				</div>
				
				
			</div>
			
			<div class="clear"></div>
		
			<div class="foot">
				<img src="<?php echo C('Url');?>images/jotting/foot.png" />
				<span>
					About the author of this blog
				</span>
				<label>
					这个世界，总有你不喜欢的人，也总有人不喜欢你。这都很正常。而且，无论你有多好，也无论对方有多
					好，都苛求彼此不得。应为，好不好是一回事，喜不喜欢也另一回事。
				</label>
			</div>
			
			<div id="top">
				<div id="top_div" onclick="scrollTo(0)"></div>
			</div>
		</div>
		
		
	</body>

	<script src="<?php echo C('Url');?>js/public/jquery-1.10.2.min.js"></script>
	<script src="<?php echo C('Url');?>js/public/bootstrap.min.js"></script>
	<script  type="text/javascript"  src="https://rawgithub.com/WickyNilliams/headroom.js/master/dist/headroom.js"></script>
	<script  type="text/javascript"  src="https://rawgithub.com/WickyNilliams/headroom.js/master/src/jQuery.headroom.js"></script>
	<script src="<?php echo C('Url');?>js/index/index.js"></script>

</html>
<script type="text/javascript">
$('.delele').click(function(){
	var vid = $(this).attr('delete');
	if (confirm("是否确认要删除？"))  {  
		$.post("__URL__/ajaxdeletet/",{vid:vid},function(data){
			if(data == 1)
			{
				alert("删除成功~！");
			}
			else
			{
				alert("删除失败~！");
			}
			location = location;
		});
	}
})

</script>