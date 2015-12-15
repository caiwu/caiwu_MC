<?php
class Wagemodel extends MY_Model{

	public $table_name = 'wage';
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
	
	public function insert_work_info($data){
		
		
		$this->table_name = 'work';
		$this->table_value = $data;
		$bool = $this->Insert();
		return $bool;
	}
	
	
	public function insert_wage_info($wage_data){
		
		$this->table_name = 'wage';
		$this->table_value = $wage_data;
		$bool = $this->Insert_num();
		return $bool;
	}
	
	//@todo salary_type以后定义成常量，在主控制器中
	public function work_info($id){
		
		$data = array();
		$this->table_name = "work";
		$this->table_where = array('pro_id'=>$id,'salary_type'=>13);
		$data = $this->Select();
		return $data;
	}
	
	public function select_work_info($data_month=NULL,$salary_type=NULL,$pro_id,$id){
		
		$data = array();
		$this->table_name = 'work';
		if(!empty($data_month)){
			if($id == 2){
				$this->db->where('work_end_time >=',$data_month.'-01');
				$this->db->where('work_end_time <=',$data_month.'-31');
			}else{
				$this->db->where('work_start_time >=',$data_month.'-01');
				$this->db->where('work_start_time <=',$data_month.'-31');
			}
		}
		if(!empty($salary_type)){
			$this->db->where('salary_type',$salary_type);
		}
	 	$this->db->where('pro_id',$pro_id);
		$data = $this->Select();
// 		echo $this->db->last_query();exit;
		return $data;
	}
	
	
	
	
	
	
}




