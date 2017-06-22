<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	$wish=M("log")->select();
    	//p($wish);
		$this->assign("data",$wish)->display("from");

    }
    public function handle(){
    	// echo $this->_post("use");
    	// echo $this->_post("pwd");
    	// echo I("use","","htmlspecialchars");
    	// echo I("pwd","","htmlspecialchars");
    	// p($_POST); //自定义函数  在common文件里面定义的函数



    	//M("log")->where(array("id"=>array("gt","0")))->delete();exit();
    	if(!IS_POST){
    		//$this->display('from');
    		header("Location:".U('index'));
    		//_404("", U('Index/index'));
    		//halt("页面不知道哪去了");
    	}else{
    		// echo "111";
    		$dat=array(
    			"use"=>I("use","","htmlspecialchars")
    			,"pwd"=>I("pwd","","htmlspecialchars")
    		);
    		if(M("log")->data($dat)->add()){
    			$this->success("注册成功",'index');
    		}else{
    			$this->error("注册失败");
    		}
    	} 
    }
}