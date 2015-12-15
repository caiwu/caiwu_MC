<?php
class projectmodel extends MY_Model{

	public $table_name = 'project';
	public $table_col = array();

	public $table_where = array();
	public $table_group = array();
	public $table_value = array();
	public $table_order = array();
	public $table_limit = array();
	public function __construct()
	{
		parent::__construct();
		
	}
	
	/**
	 *
	 * 验证登录
	 */
	
	public function select_login_info($data){
	
		$this->table_col = 'id,pro_name,pro_password,pro_salt';
		$this->table_where = $data;
		$info = $this->Select_One();
		return $info;
	}
	
	
	public function insert_info($data){
		$this->table_value = $data;
		$bool = $this->Insert();
		return $bool;
	}
	
	public function update_user_project_info($data,$idd){
		
		$da = $this->select_user_project_info($idd);
		if(empty($da)){
			
			$this->table_name = 'user_project';
			$this->table_value = array('user_id' =>$data,'pro_id' =>$idd);
			$bool = $this->Insert();
			
		}else{
			$this->table_name = 'user_project';
			$this->table_where = array('pro_id' =>$idd);
			$this->table_value = array('user_id' =>$data);
			$bool = $this->Update();
		}

		return $bool;
		
		
	}
	
	public function insert_user_project_info(){
		
		
	}
	
	public function select_user_project_info($id=NULL){
		$data = null;
		$this->table_name = 'user_project';
		if(!empty($id)){
			$id = array('pro_id'=>$id);
			$this->table_where = $id;
			$data = $this->Select_One();
		}else{
			$data = $this->Select();
		}
		
		
		return $data;
	}
	
	
	public function select_info(){
		$this->table_name = 'project';
		$data = array();
		$data = $this->Select();
		return $data;
	}
	

	public function select_info_one($id){
		$data = array();
		$id = array('id'=>$id);
		$this->table_where = $id;
		$data = $this->Select_One();
		return $data;
	}
	
	
	public function update_info($data){
		$this->table_where = array('id' => $data['id']);
		$this->table_value = $data;
		$bool = $this->Update();
		return $bool;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}