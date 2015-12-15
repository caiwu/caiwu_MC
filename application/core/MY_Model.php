<?php
class MY_model extends CI_Model {

	public $table_col = array();
	public $table_name = array();
	public $table_where = array();
	public $table_group = array();
	public $table_value = array();
	public $table_order = array();
	public $table_limit = array();
	public $table_in = array();
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	
	
	public function Select(){
		
		if(count($this->table_col) > 0){
			$table_col = explode(',', $this->table_col);
		}else{
			$table_col = '*';
		}
		
		$this->db->select($table_col);
		$this->db->from($this->table_name);
		$this->db->where($this->table_where);
		if(!empty($this->table_group)){
			$this->db->group_by($this->table_group);
		}
		if(!empty($this->table_order)){
			$this->db->order_by($this->table_order);
		}
		if(!empty($this->table_limit)){
			$this->db->limit(implode(',',$this->table_limit));
		}
		if(!empty($this->table_in)){
			$this->db->where_in($this->table_in['id'],$this->table_in['where']);
		}
		
		$data = $this->db->get()->result_array();
		
		return $data;
		
	}
	
	public function Select_In(){
		
		
		
	}
	
	public function Select_One(){
		

		if(count($this->table_col) > 0){
			$table_col = explode(',', $this->table_col);
		}else{
			$table_col = '*';
		}
		
		$this->db->select($table_col);
		$this->db->from($this->table_name);
		$this->db->where($this->table_where);
		
		$data = $this->db->get()->row_array();
		$this->table_where = array();
		return $data;
	}
	
	public function Update(){
		
		$this->db->where($this->table_where);
		$this->db->update($this->table_name,$this->table_value);
		$num = $this->db->affected_rows();
		return $num;
	}

	public function Delete(){
	
		$this->db->where($this->table_where);
		$this->db->delete($this->table_name);
		$num = $this->db->affected_rows();
		return $num;
	
	}
	
	public function Insert(){
	
		$this->db->insert($this->table_name,$this->table_value); 
		$num = $this->db->insert_id();
		return $num;
	
	}
	
	
	public function Insert_num(){
		
		$this->db->insert_batch($this->table_name,$this->table_value);
		$num = $this->db->affected_rows();
		return $num;
	}
	
	
	

	
	
	
	
	
}
