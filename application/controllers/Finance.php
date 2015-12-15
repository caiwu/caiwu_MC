<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finance extends MY_Controller {
	public $error =  array();
	public function __construct(){
		parent::__construct();
		$this->error['code'] = 0;
		$this->error['massage'] = NULL;
	}
	
	
	public function index(){
		$this->display('index.php');
	}
	
	
	
}
