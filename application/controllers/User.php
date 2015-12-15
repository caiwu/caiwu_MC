<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
	public $error =  array();
	public function __construct(){
		parent::__construct();
		$this->load->model('Usermodel');
		$this->load->model('Projectmodel');
		$this->error['code'] = 0;
		$this->error['massage'] = NULL;
	}
	
	
	public function index(){
		
	}
	
	public function userAdd(){
		
		
// 		print_r($_POST);exit;
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('bank_card','bank_card','required');
		$this->form_validation->set_rules('sector','sector','required');
		$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('email','email','required');
// 		$this->form_validation->set_rules('name','name','required');
// 		$this->form_validation->set_rules('name','name','required');

		if($this->form_validation->run() != FALSE){
			unset($_POST['submit']);
			$pass = $this->encrypt_password('100000');
			$_POST['password'] = $pass['password'];
			$_POST['salt'] = $pass['salt'];
			$_POST['priv'] = '2,3,4,5,6';
			$bool = $this->Usermodel->insert_inall($_POST);
			if($bool){
				echo "<script>window.location.href='".site_url('User/userList')."'</script>";
			}
			
			
			
		
		}
		
		$data = $this->system_config('bumengleixing');
		$da = $this->system_config('zhigong');
		$this->assign('da',$da);
		$this->assign('data',$data);
		$this->assign('menu','User/userAdd');
		$this->display('userAdd.php');
	}
	
	public function userList(){
		
		$dd = array();
		$dd = $this->Usermodel->select_info();
		foreach ($dd as $k=>$v){
			$dd[$k]['sector'] = $this->getSector($v['sector']);
			$dd[$k]['title'] = $this->getSector($v['title']);
		}
		
		$this->assign('data',$dd);
		$this->assign('menu','User/userList');
		$this->display('userList.php');
	}
	
	public function getSector($id){
		$data = $this->system_config_info($id);
		return $data['s_name'];
	}
	
	/**
	 * 
	 * 登录
	 */
	
	public function login(){
		
		
		
/* 		$_POST = array(
				'email'=>'zhaohang1108@sina.com',
				'password'=>'123',
				'submit'=>'submit',
		); */
		
		$pro_data = $this->Projectmodel->select_info();
		if(isset($_POST['submit'])){
			if(!empty($_POST['email']) && !empty($_POST['password'])){
				//管理员登录
				if($_POST['pro_id'] == 'admin'){
					$data['email'] = $_POST['email'];
					$user_info = $this->Usermodel->select_login_info($data);
					
					if($user_info['password'] === sha1($_POST['password'].$user_info['salt'])){
						$_SESSION['type'] = 'admin';
						$_SESSION['user_name'] = $user_info['name'];
						$_SESSION['user_id'] = $user_info['id'];
						$this->skip('/Finance/index');
					}else{
						$this->error['code'] = 2;
						$this->error['massage'] = '密码不正确';
					}
				}else{//项目登录
				
					$data['pro_email'] = $_POST['email'];
					$user_info = $this->Projectmodel->select_login_info($data);
						
					if($user_info['pro_password'] === sha1($_POST['password'].$user_info['pro_salt'])){
						$_SESSION['type'] = 'project';
						$_SESSION['user_name'] = $user_info['pro_name'];
						$_SESSION['user_id'] = $user_info['id'];
						$this->skip('/Finance/index');
					}else{
						$this->error['code'] = 2;
						$this->error['massage'] = '密码不正确';
					}
				}
			}else{
				$this->error['code'] = 3;
				$this->error['massage'] = '登录信息不能为空';
			}
		}else{
			$this->error['code'] = 4;
			$this->error['massage'] = '';
		}
// 		print_r($pro_data);exit;
		$this->assign('pro_data',$pro_data);
		$this->assign('data',$this->error);
		$this->display('login.php');
		
	}
	
	public function userDel($id=NULL){
		
		if(!empty($id)){
			
			$bool = $this->Usermodel->del_info($id);
			if($bool){
				$this->skip('/User/userList','删除成功');
			}else{
				$this->skip('/User/userList','删除失败');
			}
		}else{
			$this->skip('/User/userList','没有请求Id');
		}
		
	}
	
	public function userEdit($id=NULL){
		
		$this->upload = $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/upload/';
		$data = array();
		if(isset($_POST) && !empty($_POST)){
			unset($_POST['submit']);
			
			if(isset($_FILES)){
				
				$img_info = $this->img_upload($_FILES,$_POST['id'],$_POST['title']);
				if(!empty($img_info['i_img'])){
					$_POST['i_img'] = $img_info['i_img'];
				}
				if(!empty($img_info['t_img'])){
					$_POST['t_img'] = $img_info['t_img'];
				}
			}
			$id = $_POST['id'];
			unset($_POST['id']);
			$this->Usermodel->update_info($_POST,$id);
			$this->skip('/User/userList','修改成功');
		}else{
			$data = $this->Usermodel->Select_info_One($id);
			// 			echo "<script>alert('详细信息为空');window.location.href='".site_url('User/UserList')."'</script>";
		}

		$dat = $this->system_config('bumengleixing');
		$da = $this->system_config('zhigong');
		$this->assign('da',$da);
		$this->assign('dat',$dat);
		$this->assign('menu','User/userList');
		$this->assign('id',$id);
		$this->assign('data',$data);
		$this->assign('upload',$this->upload);
		$this->display('userEdit.php');
		
	}
	
	public function img_upload($file,$id,$title){
		$this->upload = $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/upload/';
		$data = array();
		
			if ((($file["file"]["type"] == "image/gif") || ($file["file"]["type"] == "image/jpeg") || ($file["file"]["type"] == "image/png")) && ($file["file"]["size"] < 20000) && $file["file"]["error"] == 0){
				if (!file_exists($this->upload.$title)){
					mkdir($this->upload.$title);
				}
				move_uploaded_file($file["file"]["tmp_name"],$this->upload.$title.'/'.$file["file"]["name"]);
				$data['i_img'] = $title.'/'.$file['file']['name'];
			}
			if ((($file["file1"]["type"] == "image/gif") || ($file["file1"]["type"] == "image/jpeg") || ($file["file1"]["type"] == "image/png")) && ($file["file1"]["size"] < 20000) && $file["file1"]["error"] == 0){
				if (!file_exists($this->upload.$title)){
					mkdir($this->upload.$title);
				}
				move_uploaded_file($file["file1"]["tmp_name"],$this->upload.$title.'/'.$file["file1"]["name"]);
				$data['i_img'] = $title.'/'.$file['file1']['name'];
			}
		return $data;
	}
	
	public function userSel($id=NULL){
		$this->upload = $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/upload/';
		if(!empty($id)){
			
			$data = $this->Usermodel->Select_info_One($id);
// 			print_r($data);exit;
		}else{
			$data = $this->Usermodel->Select_info_One($_SESSION['user_id']);
// 			echo "<script>alert('详细信息为空');window.location.href='".site_url('User/UserList')."'</script>";
		}
		$data['sector'] = $this->getSector($data['sector']);
		$data['title'] = $this->getSector($data['title']);
		
		$this->assign('upload',$this->upload);
		$this->assign('data',$data);
		$this->assign('menu','User/userSel');
		$this->display('userinfo.php');
	}
	
	/**
	 * 退出
	 */
	
	public function quit(){
	$pro_data = $this->Projectmodel->select_info();
		$this->assign('pro_data',$pro_data);
		session_start();
		session_unset(); 
		session_destroy();
		$this->display('login.php');
	}
	
	public function reg()
	{
/* 		$_POST = array(
				'reg' => 'reg',
				'email'=>'zhaohang1108@sina.com',
				'name'=>'赵航',
				'password'=>'123',
				'password_sure'=>'123',
				); */
		if(!empty($_POST['email'])){
				
			$data['email'] = $_POST['email'];	
			$bool = $this->Usermodel->select_name($data);

			if($bool){

				if(!empty($_POST['reg']) && isset($_POST['reg'])){
						
					if(!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['password'])){
						if($_POST['password'] === $_POST['password_sure']){
				
								
							$_POST['password_salt'] = $this->encrypt_password($_POST['password']);
							$_POST['priv'] = '3,34,2,35,36';
							$bool = $this->Usermodel->insert_info($_POST);
							if($bool){
								$this->error['code'] = 1;
								$this->error['massage'] = '注册成功';
								$this->skip('/Finance/index','修改成功');
							}else{
								$this->error['code'] = 2;
								$this->error['massage'] = '注册失败';
							}
						}else{
							$this->error['code'] = 3;
							$this->error['massage'] = '密码不一致';
						}
					}else{
						$this->error['code'] = 4;
						$this->error['massage'] = '注册的必要信息不能为空';
					}
				}else{
					$this->error['code'] = 5;
					$this->error['massage'] = '非法注册';
				}
			}else{
				$this->error['code'] = 6;
				$this->error['massage'] = '已注册';
			}
		}else{
			$this->error['code'] = 4;
			$this->error['massage'] = '注册的必要信息不能为空';
		}
		
		$this->assign('data',$this->error);
		$this->display('reg.php');
	}
	
	
	
	public function test(){
		
		
		echo "aaaaaaa3333333333aaaaa";exit;
	}
	

	
}
