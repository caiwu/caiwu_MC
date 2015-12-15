<?php
class Systemmodel extends MY_Model{

	public $table_name = 'privilege';
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

	
	public function select_system_config(){
		
		$d = array();
		$this->table_name = 'system_config';
		$id = array('parent_id'=>0);
		$this->table_where = $id;
		
		$d = $this->Select();
		return $d;
	}
	
	/**
	 * 
	 * 获取参数名称
	 */
	
	public function getsystem_config_info($id){
		
		$d = array();
		$this->table_name = 'system_config';
		$where = array('id'=>$id);
		$this->table_where = $where;
		$d = $this->Select_One();
		return $d;
	}
	
	/**
	 * 
	 * 获取参数值
	 * @param string $str
	 * @return multitype:array
	 */
	
	public function getsystem_config($str=NULL){
		$d = array();
		$this->table_name = 'system_config';
		$id = array('s_value'=>$str);
		$this->table_where = $id;
		$data = $this->Select_One();
// 		print_r($data);exit;
		if($data['parent_id'] === '0'){
			$this->table_name = 'system_config';
			$id = array('parent_id'=>$data['id']);
			$this->table_where = $id;
			$da = $this->Select();
			
			$d['type'] = $data;
			$d['s_type'] = $da; 
		}
		return $d;
		
	}
	
	
	public function insert_config_info($data){
		$this->table_name = 'system_config';
		$this->table_value = $data;
		$bool = $this->Insert();
		return $bool;
		
	}
	
	/*
	 * 插入信息
	 */
	
	public function insert_info($data){
		
		$this->table_value = $data;
	
		
		$bool = $this->Insert();
		
		return $bool;
	}
	
	/**
	 * 
	 * @param array $data
	 */
	
	public function select_info(){
		$data = array();
		$data = $this->Select();
		return $data;
	}
	
	public function select_info_config_One($id){
		
		$data = array();
		$id = array('id'=>$id);
		$this->table_name = 'system_config';
		$this->table_where = $id;
		$data = $this->Select_One();
		return $data;
		
	}
	
	public function Select_info_One($id){
		$data = array();
		$id = array('id'=>$id);
		$this->table_where = $id;
		$data = $this->Select_One();
		return $data;
	}
	
	public function select_menu(){
		$data = array();
		$id = array('p_id'=>1);
		$this->table_where = $id;
		$data = $this->Select();
		return $data;
	}
	
	public function systemConfigUpdate($data){
		$this->table_name = 'system_config';
		$this->table_where = array('id' => $data['id']);
		$this->table_value = $data;
		$bool = $this->Update();
		return $bool;
	}
	
	public function systemUpdate($data){
		
		$this->table_where = array('id' => $data['id']);
		$this->table_value = $data;
		$bool = $this->Update();
		return $bool;
	}
	
	public function select_info_config($id=NULL){
		$data = array();
		if(!empty($id)){
			$this->table_name = 'system_config';
			$this->table_where = array('parent_id'=>$id);
			$data = $this->Select();
		}
		return $data;
	}
	
	/**
	 * 
	 * 删除
	 * @param int $id
	 */
	
	public function delete_info($id){
		
		$this->table_where = array('id'=>$id);
		$bool = $this->Delete();
		return $bool;
	}
	

	/**
	 *
	 * 菜单列表
	 */
	
	public function menu_list(){
		$this->table_where = array('priv_type'=>'menu');
		$data =  $this->select();
		$this->table_where = array();
		return $data;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	

}
	
	
	