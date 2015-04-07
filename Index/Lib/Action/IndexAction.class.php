<?php
Class IndexAction extends Action{
	Public function index(){
	$this->assign('wish',M('wish')->select())->display('wish');
	}
	public function handle(){
	      $data = array(
		      'username' => I('username'),
	              'content' => I('content'),
		      'time' => time()
	      );
		//p($data);
	      if(M('wish')->data($data)->add()){
	      $this->success('发布成功！！！','index');}
	}
}
?>
