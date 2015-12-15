<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends MY_Controller {
	public $error =  array();
	public function __construct(){
		parent::__construct();
		$this->load->model('Projectmodel');
		$this->load->model('Wagemodel');
		$this->error['code'] = 0;
		$this->error['massage'] = NULL;

	}
	
	
	public function index(){
		
		$this->display('a.php');
		
		
	}
	
	
	public function projectAdd(){
		
		$this->form_validation->set_rules('pro_name','pro_name','required');
		$this->form_validation->set_rules('pro_email','pro_email','required');
		$this->form_validation->set_rules('pro_password','pro_password','required');
		
		if($this->form_validation->run() != FALSE){
			if($_POST['pro_password'] === $_POST['password_sure']){
				unset($_POST['submit']);
				unset($_POST['password_sure']);
				$password = $this->encrypt_password($_POST['pro_password']);
				$_POST['pro_salt'] = $password['salt'];
				$_POST['pro_password'] = $password['password'];
				$_POST['priv'] = '3,34,2,35,36,4,38,39';
				$_POST['create_time'] = time();
				$bool = $this->Projectmodel->insert_info($_POST);
				if($bool){
					$this->skip('/Project/projectList');
				}else{
					$this->error['code'] = 2;
					$this->error['massage'] = '注册失败';
				}
			}else{
				$this->error['code'] = 3;
				$this->error['massage'] = '密码不一致';
			}
		}
		$this->assign('menu','project/projectAdd');
		$this->display('projectAdd.php');
	}
	
	public function projectAllot($id=NULL){
		$dd = array();
		
		if(!empty($id)){
			
			$dd = $this->Usermodel->select_info();
			
			$pro_data = $this->Projectmodel->select_user_project_info($id);
			$pro_data['user_id'] = explode(",",$pro_data['user_id']);
			
			
			$dat = $this->system_config('bumengleixing');
			$da = $this->system_config('zhigong');
			
			
			$this->assign('id',$id);
			$this->assign('pro_data',$pro_data);
			$this->assign('da',$da);
			$this->assign('dat',$dat);
			$this->assign('data',$dd);
			$this->display('projectAllot.php');
		}else{

			if(isset($_POST) && !empty($_POST)){
				$idd = $_POST['id'];
				unset($_POST['id']);
				unset($_POST['submit']);
				$user_str = implode(",", $_POST);
				$bool = $this->Projectmodel->update_user_project_info($user_str,$idd);
				if($bool){
					$this->skip('/Project/projectList','分配成功');
				}else{
					$this->skip('/Project/projectList','分配失败');
				}
			}
		}
	}
	
	public function getSector($id){
		$data = $this->system_config_info($id);
		return $data['s_name'];
	}
	
	
	public function projectList(){
		$data = $this->Projectmodel->select_info();
		$this->assign('data',$data);
		$this->assign('menu','project/projectList');
		$this->display('projectList.php');
		
	}
	
	/**
	 * 
	 * 查看包工工程
	 */
	
	public function projectWork($id=NULL){
		$data = array();
		if(!empty($id)){
			
			$data = $this->Wagemodel->work_info($id);
// 			print_r($data);exit;
			
			foreach($data as $key=>$value){
				
				$da = $this->Projectmodel->select_info_one($value['pro_id']);
				$data[$key]['pro_name'] = $da['pro_name'];
				if(!empty($value['position'])){
					$dd = $this->system_config_info($value['position']);
					$data[$key]['s_name'] = $dd['s_name'];
				}else{
					$data[$key]['s_name'] = NULL;
				}
				if(!empty($value['salary_type'])){
					$de = $this->system_config_info($value['salary_type']);
					$data[$key]['salary_type_name'] = $de['s_name'];
				}else{
					$data[$key]['salary_type_name'] = NULL;
				}
				if(!empty($value['opearte_type'])){
					$de = $this->system_config_info($value['opearte_type']);
					$data[$key]['opearte_type_name'] = $de['s_name'];
				}else{
					$data[$key]['opearte_type_name'] = NULL;
				}
			}
// 			print_r($data);exit;
			$this->assign('data',$data);
			$this->assign('menu','project/projectList');
			$this->display('projectWork.php');
		}else{
			$this->skip('/Project/projectList');
		}
	}
	
	public function projectEdit($id=null){
		if(!empty($id) || isset($_POST)){
			$this->form_validation->set_rules('pro_name','pro_name','required');
			if($this->form_validation->run() != FALSE){
				unset($_POST['submit']);
				if(empty($_POST['pro_password']) && empty($_POST['password_sure'])){
					unset($_POST['pro_password']);
					unset($_POST['password_sure']);
					$bool = $this->Projectmodel->update_info($_POST);
				}else{
					if($_POST['pro_password'] === $_POST['password_sure']){
						unset($_POST['submit']);
						unset($_POST['password_sure']);
						$password = $this->encrypt_password($_POST['pro_password']);
						$_POST['pro_salt'] = $password['salt'];
						$_POST['pro_password'] = $password['password'];
						$bool = $this->Projectmodel->update_info($_POST);
					}
				}
				if($bool){
						$this->skip('/Project/projectList');
				}
			
			}
			$data = $this->Projectmodel->select_info_one($id);
			$this->assign('data',$data);
			$this->assign('menu','project/projectList');
			$this->display('projectEdit.php');
		}else{
			$this->display('projectList.php');
		}
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}