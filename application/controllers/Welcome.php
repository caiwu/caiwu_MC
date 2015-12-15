<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		echo 'Welcome控制器，index页面，需要修改为，默认的登录页面，并判断是否有session_id，是否直接跳转到后台首页，还是登录页面';exit;
		//$this->load->view('welcome_message');
		$data['title'] = '财务';
		$data['num'] = '123456789';
		//$this->cismarty->assign('data',$data); // 
		$this->assign('data',$data);
		$this->assign('tmp','hello');
		$this->assign('views_path',VIEWPATH);
		//$this->cismarty->display('test.html'); //
		$this->display('test.html');
	}
	
	
	
	public function test(){
		
		
		echo "aaaaaaa3333333333aaaaa";exit;
	}
	

	
}
