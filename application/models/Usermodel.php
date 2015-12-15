<?php
class Usermodel extends MY_Model{

	public $table_name = 'user';
	
	public function __construct()
	{
		parent::__construct();
		
	}
	
	
	public function abc(){
		
		
		$this->table_col = 'qwer';
		$this->Select();
		
	}
	
	
	public function insert_inall($data){
		
		$this->table_value = $data;
		$bool = $this->Insert();
		return $bool;
	}
	
	public function del_info($id){
		
		$this->table_where = array('id'=>$id);
		$bool = $this->Delete();
		return $bool;
	}
	
	public function update_info($new_priv,$id){
		
		$this->table_where = array('id' => $id);
		$this->table_value = $new_priv;
		$bool = $this->Update();
// 				echo $this->db->last_query();exit;
		return $bool;
		
	}
	
	public function select_info($where=NULL){
		
		$data = array();
		if(!empty($where)){
			
			$wh['id'] = 'id';
			$wh['where'] = $where;
			$this->table_in = $wh;
		}
		$data = $this->Select();
// 		echo $this->db->last_query();exit;
		return $data;
		
		
	}
	
	public function Select_info_One($id){
		$data = array();
		$id = array('id'=>$id);
		$this->table_where = $id;
		$data = $this->Select_One();
		return $data;
	}
	
	/*
	 * 插入信息
	 */
	
	public function insert_info($data){
		
		$this->table_value['name'] = $data['name'];
		$this->table_value['email'] = $data['email'];
		$this->table_value['password'] = $data['password_salt']['password'];
		$this->table_value['salt'] = $data['password_salt']['salt'];
		$this->table_value['priv'] = $data['priv'];
		$bool = $this->Insert();
		
		return $bool;
	}
	
	/**
	 * 验证用户名是否有相同
	 * @param array $data
	 */
	
	public function select_name($data){
		
		$this->table_where = $data;
		$info = $this->Select();
		if(empty($info)){
			return true;
		}else{
			return false;
		}
	}
	
	/**
	 * 
	 * 验证登录
	 */
	
	public function select_login_info($data){
		
		$this->table_col = 'id,name,password,salt';
		$this->table_where = $data;
		$info = $this->Select_One();
		
		return $info;
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	

}
	
	
	