<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	$suibi = M('suibi');
    	$res = $suibi->order('time desc')->limit(5)->select();
    	$smallPicArray = explode(",",$res[0]['piclist']);
    	$this->assign('one',$smallPicArray[0]);
    	$this->assign('res',$res);
		$this->display();
	}

	public function baocun(){
		$liuyan_model = M('liuyan');
		$where['data'] = $_POST['data'];
		$where['time'] = time();
		if($liuyan_model->add($where)){
			echo 1;
		}else{
			echo 0;
		}
	}
	
	public function add(){
		$suibi_model = M('suibi');
		$where['data'] = $_POST['data'];
		$where['title'] = $_POST['title'];
		$where['time'] = time();
		if($suibi_model->add($where)){
			echo 1;
		}else{
			echo 0;
		}
	}

    public function jotting(){
    	$suibi_model = M('suibi');
		//dump($liuyan_model);
		$res = $suibi_model->order("time desc")->select();
		foreach ($res as $key => $value) {
			$smallPicArray = explode(",",  $value['piclist']);
			$res[$key]['piclists'] = $smallPicArray;
			$res[$key]['tiaoshu'] = count($smallPicArray);
		}
		$this->assign("res",$res);
		//dump($res);exit;
		$this->display();
	}

    public function message(){

		$liuyan_model = M('liuyan');
		//dump($liuyan_model);
		$res = $liuyan_model->order("time desc")->select();
		$this->assign("res",$res);
		$this->display();
	}

    public function animation(){

		$this->display();
	}

    public function article(){

		$this->display();
	}

    public function detailes(){

		$this->display();
	}

	public function record()
	{
		$time = date(DATE_RFC822);
		$this -> assign('time', $time);
		$this->display();
	}

	public function uprecord()
	{
		$suibi = M('suibi');
		if(isset($_POST['submit']))
		{
			$where['Id'] = $_POST['Id'];
			$where2['data'] = $_POST['data'];
			$where2['title'] = $_POST['title'];
			$where2['piclist'] = $_POST['piclist'];
			$res = $suibi->where($where)->save($where2);
			//dump($where2);exit;
			if($res)
			{
				$this->success('保存成功', 'jotting');
				exit;
			}
			else
			{
				$this->error('保存失败','uprecord');
			}
		}
		if(isset($_GET['id']))
		{
			$where['Id'] = $_GET['id'];
			$res = $suibi->where($where)->select();
			$smallPicArray = explode(",",  $res[0]['piclist']);
			$abab = $smallPicArray;
			$this->assign('res',$res);
			$this->assign('abab',$abab);
			$time = date(DATE_RFC822);
			$this -> assign('time', $time);		
		}
		$this->display();
	}

	//图片上传
	public function uploadify() {

		$targetFolder = $_POST['url'];
		$targetPath ="./Public/suibi/";
		$verifyToken = md5($_POST['timestamp']);
		if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
			import("ORG.Util.Image");
			import("ORG.Net.UploadFile");
			$name = time() . rand();
			//设置上传图片的规则
			$upload = new UploadFile();
			// 实例化上传类
			$upload -> maxSize = 10485760;//3145728;
			// 设置附件上传大小
			$upload -> allowExts = array('jpg','png','gif','jpeg');
			// 设置附件上传类型
			$upload -> savePath = "./Public/suibi/".date('Ymd')."/";
			// 设置附件上传目录
			$upload -> saveRule = 'uniqid';
			//设置上传图片的规则
			if (!$upload -> upload()) {// 上传错误提示错误信息
				//return false;
				echo $upload -> getErrorMsg();
				//echo $targetPath;
			} else {// 上传成功 获取上传文件信息
				$info = $upload -> getUploadFileInfo();
				echo "test/Public/suibi/".date('Ymd').'/'.$info[0]["savename"];
			}
		}
	}
	public function delfile()
	{
		$localfile = $_SERVER["DOCUMENT_ROOT"].$_REQUEST['filename'];     //$_SERVER["DOCUMENT_ROOT"] .
		if (unlink($localfile)) {
			echo 1;
		} else {
			echo 0;
		}
	}
	public function jiawan()
	{
		$suibi = M('suibi');
		$where['data'] = $_POST['data'];
		$where['title'] = $_POST['title'];
		$where['time'] = time();
		$where['piclist'] = $_POST['piclist'];
		$res = $suibi->add($where);
		if($res)
		{
			$this->success('保存成功', 'jotting');
		}
		else
		{
			$this->error('保存失败','record');
		}
	}
	public function ajaxdeletet()
	{
		$suibi = M('suibi');
		if(isset($_POST['vid']))
		{
			$where['Id'] = $_POST['vid'];
			$re = $suibi->where($where)->delete();
			if($re)
			{
				echo 1;
			}
			else
			{
				echo 0;
			}
		}

		
	}
}