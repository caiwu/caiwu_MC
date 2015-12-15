<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class System extends MY_Controller {
	public $error =  array();
	public function __construct(){
		parent::__construct();
		$this->error['code'] = 0;
		$this->error['massage'] = NULL;

	}
	
	
	public function index(){
		
		
		
		
		$this->display('a.php');
		
		
	}
	public function getSector($id){
		$data = $this->system_config_info($id);
		return $data['s_name'];
	}
	
	public function controlEdit($id=null){
		$data = array();
		
		if(isset($_POST) && !empty($_POST)){
			$id = $_POST['id'];
			unset($_POST['submit']);
			unset($_POST['id']);
			$new_priv['priv'] = implode(',', $_POST);
			
			$bool = $this->Usermodel->update_info($new_priv,$id);
			if($bool){
				$this->skip('/System/control','修改成功');
			}else{
				$this->skip('/System/control','修改失败');
			}
		}else{
			$user_info = $this->Usermodel->Select_info_One($id);
			$priv = explode(",",$user_info['priv']);
			$this->assign('menu','System/control');
			$this->assign('id',$id);
			$this->assign('priv',$priv);
			$this->display('controlEdit.php');
		}
	

	}
	
	/**
	 * 
	 * 权限控制
	 */
	
	public function control(){
		$dd = $this->Usermodel->Select_info();
		foreach ($dd as $k=>$v){
			$dd[$k]['sector'] = $this->getSector($v['sector']);
			$dd[$k]['title'] = $this->getSector($v['title']);
		}
		$this->assign('data',$dd);
		$this->assign('menu','System/control');
		$this->display('control.php');
		
	}
	
	public function systemAddConfig($id=NULL){
	
		$this->form_validation->set_rules('s_name','s_name','required');
		$this->form_validation->set_rules('s_value','s_value','required');
		if($this->form_validation->run() != FALSE){
			unset($_POST['submit']);
			$bool = $this->Systemmodel->insert_config_info($_POST);
			if($bool){
				$this->skip('/System/systemConfig');
			}
		
		}
		$this->assign('menu','System/systemList');
		if(!empty($id)){
			$this->assign('id',$id);
		}
		$this->assign('menu','System/systemAddConfig');
		$this->display('systemAddConfig.php');
		
		
	}
	
	public function systemConfigEdit($id = NULL){
		
		
		$this->form_validation->set_rules('s_name','s_name','required');
		$this->form_validation->set_rules('s_value','s_value','required');
		if($this->form_validation->run() != FALSE){
				
			$bool = $this->Systemmodel->systemConfigUpdate($_POST);
			if($bool){
				$this->skip('/System/systemConfig');
			}
		}
		if(!empty($id)){
		
			$data = $this->Systemmodel->select_info_config_One($id);
			$this->assign('data',$data);
			$this->assign('menu','System/systemConfig');
			$this->display('editConfigSystem.php');
		}
		
	}
	
	public function systemConfig(){
		
		$dd = $this->Systemmodel->select_system_config();
// 		print_r($dd);exit;
		$this->assign('data',$dd);
		$this->assign('menu','System/systemConfig');
		$this->display('listSystemConfig.php');
	}
	
	
	public function systemList(){
		
		$dd = $this->Systemmodel->select_info();
		
		foreach ($dd as $k=>$v){
			if($v['p_id'] ==1){
				$data['m'][] =$v;
			}else{
				$data['f'][] =$v;
			}
			 
		}	
		$this->assign('data',$data);
		$this->assign('menu','System/systemList');
		$this->display('listSystem.php');
	}
	
	public function systemEdit($id = NULL){
		
		$this->form_validation->set_rules('priv_name','priv_name','required');
		$this->form_validation->set_rules('priv_value','priv_value','required');
		if($this->form_validation->run() != FALSE){
			
			if($_POST['priv_type'] == 1){
				$_POST['priv_type'] = 'menu';
			}elseif ($_POST['priv_type'] == 2){
				$_POST['priv_type'] = 'priv';
			}
// 			print_r($_POST);exit;
			$bool = $this->Systemmodel->systemUpdate($_POST);
			if($bool){
				$this->skip('/System/systemList');
			}
		}
		
		if(!empty($id)){
			$menue = $this->Systemmodel->select_menu();
			$data = $this->Systemmodel->select_info_One($id);
			$this->assign('menu','System/systemList');
			$this->assign('data',$data);
			$this->assign('menue',$menue);
			$this->display('editSystem.php');
		}
		
	}
	
	
	public function systemConfigSelect($id){
		if(!empty($id)){
			$data = $this->Systemmodel->select_info_config($id);
// 			print_r($data);exit;
			$this->assign('id',$id);
			$this->assign('data',$data);
			$this->display('systemConfigSelect.php');
		}
		
	}
	
	/**
	 * 
	 * 删除菜单/权限
	 */
	
	public function systemDelete($id){
		
		if(!empty($id)){
			$bool = $this->Systemmodel->delete_info($id);
			if($bool){
				$this->skip('/System/systemList');
			}
		}
		$this->display('editSystem.php');
	}
	
	/**
	 * 
	 * 添加菜单，权限
	 */
	
	public function systemAdd(){
		
		$menu = $this->Systemmodel->select_menu();
		$this->form_validation->set_rules('priv_name','priv_name','required');
		$this->form_validation->set_rules('priv_value','priv_value','required');
		if($this->form_validation->run() != FALSE){
			unset($_POST['submit']);
			
			if($_POST['priv_type'] == 1){
				$_POST['priv_type'] = 'menu';
			}elseif ($_POST['priv_type'] == 2){
				$_POST['priv_type'] = 'priv';
			}
			
			$bool = $this->Systemmodel->insert_info($_POST);
			if($bool){
				$this->skip('/System/systemList');
			}

		}
		$this->assign('me',$menu);
		$this->assign('menu','System/systemAdd');
		$this->display('addSystem.php');
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
