<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="cn">

	<head>
		<meta charset="utf-8" />
		<meta name="keywords" content="个人网站">
		<meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>个人网站</title>

		<link rel="stylesheet" type="text/css" href="<?php echo C('Url');?>css/index/head.css"></link>
		<link rel="stylesheet" type="text/css" href="<?php echo C('Url');?>css/public/public.css"></link>
		<link rel="stylesheet" type="text/css" href="<?php echo C('Url');?>css/public/bootstrap.min.css"></link>
		<link rel="stylesheet" type="text/css" href="<?php echo C('Url');?>css/public/bootstrap-theme.min.css"></link>

	</head>

	<body>
		<div class="head">
			<div class="banner-background">
				<img src="<?php echo C('Url');?>images/index/banner.png" />
			</div>
			<div class="banner">
				<div class="title">
					<div class="demo5">个人博客网站</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div id='container'>
			<nav>
				<ul>
					<li>
						<a href='#' title='博客首页'>博客首页</a>
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
		<div class="clear"></div>
		<div class="personal">
			<div class="personal-center">
				<div class="personal-center-left">
					<div class="new-one">
						<img src="<?php echo C('Url');?>images/index/new1.png" />
							<div class="newone-content">
								<img src="<?php echo C('Url');?>images/index/newback.png" />
								<a class="art-a" href="../Article/article.html" target="_blank">News</a>
								<a href="__APP__/Index/article" target="_blank"><span>2015年五大移动端设计趋势</span></a>
								<a href="__APP__/Index/article" target="_blank"><label> 移动端网络的增长比桌面网络增长更迅猛，而且我们相信在未来五年，会有比 PC 端更多的用户通过移动设备连接互联网 ...</label></a>
							</div>
					</div>

					<div class="new-two">
						<img src="<?php echo C('Url');?>images/index/new2.png" />

						<div class="newtwo-content">
							<a class="art-b" href="../Article/article.html" target="_blank"><b>New</b></a>
							<a href="__APP__/Index/article" target="_blank"><span>提升 Web开发性能的 10 个技巧</span></a>
							<a href="__APP__/Index/article" target="_blank"><label>随着网络的高速发展，网络性能的持续提高成为能否在芸芸App中脱颖而出的关键...</label></a>
						</div>
					</div>
					<div class="new-three">
						<img src="<?php echo C('Url');?>images/index/news3.png" />
						<div class="newthree-content">
							<a class="art-c" href="../Article/article.html" target="_blank"><b>随笔</b></a>
							<a href="__APP__/Index/article" target="_blank"><span>如血液代谢的找不见影踪，只留一个名字温暖如初,如我，动如暖阳，静便沧桑。</span></a>
						</div>
					</div>
					<div class="new-four">

						<div id="myCarousel" class="carousel slide">
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="active item">
									<img src="<?php echo C('Url');?>images/index/2.png" />
									<div class="carousel-caption">涨知识：11个炫酷的 Linux 终端命令</div>
								</div>
								<div class="item">
									<img src="<?php echo C('Url');?>images/index/1.png" />
									<div class="carousel-caption">简单明了的excel教程，教你做表格</div>
								</div>
								<div class="item">
									<img src="<?php echo C('Url');?>images/index/3.png" />
									<div class="carousel-caption">18 个最佳代码编辑器/IDE推荐</div>
								</div>
							</div>
							<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
							<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
						</div>

					</div>

					<div class="new-five">
						<img src="<?php echo C('Url');?>images/index/news.png" />
						<span>introduction</span>
						<img class="head-portrait" src="<?php echo C('Url');?>images/index/portrait.png" />
						<label>学着做你自己，并优雅的放手所有不属于你的东西</label>
					</div>
				</div>
				<div class="personal-center-right">
					<div class="new-six">
					<img class="siximg-logo" src="<?php echo C('Url');?>images/index/logo.png" />
						<span>TOP JOTTING</span>
<!-- 						<img class="siximg-img" src="<?php echo C('Url');?>images/index/4.jpg" />
						<a href="__APP__/Index/jotting" class="sixlabel">时光如一弯细长细长的溪流，时光又
							如手中沙，总是不注地穿梭而过。直到一切都找不回最初
							的样子
						</a>
						<label>Oct 29, 2015</label>
						<a href="__APP__/Index/jotting" class="sixlabel">我把落叶捧到树的旁边，深深地埋进
							了土壤，让它去完成自己的诺言和生命的涅槃。
						</a>
						<label>Nov 3, 2015</label>
						<a href="__APP__/Index/jotting" class="sixlabel">人的心真的很难懂，就像黑洞无法探索
							，就连自己也许都会迷惑。我不想睡，那秋风也
							不想我睡，那风吹得我刺骨也清醒
						</a>
						<label>Oct 31, 2015</label>
						<a href="__APP__/Index/jotting" class="sixlabel">梦的华裳褪落在秋之尽头，被寒冬悄然
							拾起，又被无情覆盖。指尖的不忍无奈辗转至
							这一季的怆凉。
						</a>
						<label>Otc 26, 2015</label>
						<a href="__APP__/Index/jotting" class="sixlabel">最好的人生也不过就是这样了吧，昂起头
							活出自己
						</a>
						<label>Apr 25, 2015</label> -->
						<?php if(is_array($res)): $k = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if($k == 1): ?><img class="siximg-img" src="/<?php echo ($one); ?>" width="230px" height="120px"/><?php endif; ?>
						<a href="__APP__/Index/jotting" class="sixlabel" style="overflow: hidden;text-overflow: ellipsis;height:62px"><?php echo ($vo['data']); ?></a>
						<label><?php echo (date('Y-m-d H:i:s',$vo['time'])); ?></label><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="tok">
			<img src="<?php echo C('Url');?>images/index/tree.png" />
		</div>
		<div class="clear"></div>
		<div class="tog-pg">
			<h4>With Cameron immediately renewing his pledge to hold a referendum on British membership 
				of the European Union, the result throws up questions about Britain’s constitutional
				 future. For now, the surprise victory was welcomed by markets, with stocks and the 
				 pound rallying as it became clear Cameron had defied forecasts of a hung parliament 
				 to easily defeat Ed Miliband’s Labour Party and govern alone.</h4>

			<h3>Buckingham Palace</h3>

			<h4>The premier was meeting with Queen Elizabeth II at Buckingham Palace as the Conservatives
				 reached the 326-seat threshold that allows them to ditch their Liberal Democrat coalition
				  partners and govern alone in the 650-seat Parliament.</h4>
			</span>
		</div>
		<div class="clear"></div>
		<div class="footer-col">
			<div class="footer-col-content">
				<div class="footer-col-left">
					<div class="content">
						<a>
							<img src="<?php echo C('Url');?>images/index/foot.png" />

						</a>
						<div class="media-body">
							<p>1946年2月14日，在美国宾夕法尼亚大学，世界上第一台电子数字计算机ENIAC。
							</p>
						</div>
					</div>
				</div>
				<div class="footer-col-middle">
					<a>
						<img src="<?php echo C('Url');?>images/index/foot2.png" />

					</a>
					<div class="media-body">
						<p>电脑设计分电脑艺术设计，电脑平面设计，电脑美术设计，电脑动画设计，电脑广告设计，电脑网页设计 ，等是 艺术设计里的一个门类。
						</p>
					</div>
				</div>
				<div class="footer-col-add">
					<a>
						<img src="<?php echo C('Url');?>images/index/foot3.png" />

					</a>
					<div class="media-body">
						<p>所谓的网页代码，就是指在网页制作过程中用到的一些“语言”，设计人员通过对这些“语言”进行组织 编排制作出网页，然后由浏览器对代码进行“翻译”后才是我们最终看到的效果
						</p>
					</div>
				</div>
				<div class="footer-col-right">
					<a>
						<img src="<?php echo C('Url');?>images/index/foot4.png" />

					</a>
					<div class="media-body">
						<p>软件开发是根据用户要求建造出软件系统或者系统中的软件部分的过程。软件开发是一项包括需求捕捉、需 求 分析、设计、实现和测试的系统工程
						</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="clear"></div>
		
		<div id="top">
			<div id="top_div" onclick="scrollTo(0)"></div>
		</div>
		
	</body>

	<script src="<?php echo C('Url');?>js/public/jquery-1.10.2.min.js"></script>
	<script src="<?php echo C('Url');?>js/public/bootstrap.min.js"></script>
	<script src="<?php echo C('Url');?>js/index/index.js"></script>

</html>