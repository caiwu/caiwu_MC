<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wage extends MY_Controller {
	public $error =  array();
	public function __construct(){
		parent::__construct();
		$this->load->add_package_path(APPPATH.'third_party/datetime/');
		$this->load->library('datetime');
		$this->load->model('Usermodel');
		$this->load->model('Wagemodel');
		$this->load->model('Projectmodel');
		$this->error['code'] = 0;
		$this->error['massage'] = NULL;
	}
	
	
	public function index(){
		
	}
	
	/**
	 * 
	 * 工资录入
	 */
	
	public function wageInput($id=null){
		
		$bumengleixing = $this->system_config('bumengleixing');
		$buwei = $this->system_config('buwei');
		$gongzileixing = $this->system_config('gongzileixing');
		$caozuoleixing = $this->system_config('caozuoleixing');
		$zhigong = $this->system_config('zhigong');
		
		
		$pro_data = $this->Projectmodel->select_user_project_info();
	
		$pro_name = $this->Projectmodel->select_info();
// 		print_r($pro_name);
// 		print_r($pro_data);exit;
		foreach($pro_data as $key=>$value){
			
			foreach ($pro_name as $kk=>$vv){
				if($value['pro_id'] == $vv['id']){
					$pro_data[$key]['name'] = $vv['pro_name'];
				}
			}
		}
// 		print_r($pro_data);exit;
		if(isset($_POST) && !empty($_POST)){
			
			if(empty($_POST['work_start_time'])){
				$this->skip('Wage/wageInput/'.$id,'时间不能为空');
// 				echo "<script>alert('时间不能为空');window.location.href='".site_url('Wage/wageInput/'.$id)."'</script>";
			}
			
			if(!empty($id)){
				if($id==2 || $id==3){
					if(empty($_POST['work_end_time']) && empty($_POST['work_end_time'])){
						$this->skip('Wage/wageInput/'.$id,'时间不能为空');
					}
				}
			}
			
			if(empty($_POST['pro_id'])){
				if($id !=3){
					$this->skip('Wage/wageInput/'.$id,'项目必须选择');
// 					echo "<script>alert('项目必须选择');window.location.href='".site_url('Wage/wageInput/'.$id)."'</script>";
				}
			}

			
			$pro_da = $this->Projectmodel->select_user_project_info($_POST['pro_id']);
			$user_str = explode(',',$pro_da['user_id']);
			if($id == 1){
				$salary_type = $gongzileixing['s_type'][0]['id'];
			}elseif ($id == 2){
				$salary_type = $gongzileixing['s_type'][1]['id'];
			}elseif ($id == 3){
				$salary_type = $gongzileixing['s_type'][2]['id'];
			}elseif ($id == 4){
				print_r($salary_type);exit;
			}elseif ($id == 5){
				print_r($salary_type);exit;
			}
			
			$user_info = $this->Usermodel->Select_info($user_str);
// 			print_r($_POST);
// 			print_r($user_info);;exit;
			foreach ($user_info as $k=>$v){

				$sql = "SELECT * FROM work LEFT JOIN wage ON work.id = wage.work_id WHERE salary_type=".$salary_type." AND user_id = ".$v['id']." AND work.pro_id =".$_POST['pro_id'];
				$result = $this->Wagemodel->db->query($sql);
				$dd=$result->result_array();
				
// 				echo $sql;exit;
				
// 				print_r($dd);exit;
				//找出用户的此工程项目下的工程时间段，并和post中的时间段对比，如果在post时间段内，就不要此用户。
				if(!empty($dd) && count($dd) > 0){
					
					foreach($dd as $dk=>$dv){
						
/* 						//包工过滤已在包工日期段中的员工
						if($id ==2 && (($_POST['work_end_time'] < $dv['work_start_time']) || ($_POST['work_start_time'] > $dv['work_end_time']))){
							if(isset($_POST['sector']) && !empty($_POST['sector'])){
								if($_POST['sector'] == $v['sector']){
									$user_info[$k]['sector'] = $this->getSector($v['sector']);
									$user_info[$k]['title'] = $this->getSector($v['title']);
								}else{
									unset($user_info[$k]);
								}
							}elseif (isset($_POST['title']) && !empty($_POST['title'])){
								if($_POST['title'] == $v['title']){
									$user_info[$k]['sector'] = $this->getSector($v['sector']);
									$user_info[$k]['title'] = $this->getSector($v['title']);
								}else{
									unset($user_info[$k]);
								}
							}else{
								$user_info[$k]['sector'] = $this->getSector($v['sector']);
								$user_info[$k]['title'] = $this->getSector($v['title']);
							}
						}else{
							unset($user_info[$k]);
						} */
						
						if($id !=2  && $_POST['work_start_time'] == $dv['work_start_time']){//日工，奖金，罚款过滤掉当天重复录入
							if(isset($user_info[$k])){
								unset($user_info[$k]);
								break;
							}
						}
					}


					
				}
			}

			if(!empty($user_info) && isset($user_info) && $id !=2){
				foreach ($user_info as $k=>$v){
					
					$sql = "SELECT * FROM work LEFT JOIN wage ON work.id = wage.work_id WHERE salary_type=".$salary_type." AND user_id = ".$v['id']." AND work.pro_id =".$_POST['pro_id'];
					$result = $this->Wagemodel->db->query($sql);
					$dd=$result->result_array();
					if(!empty($dd) && count($dd) > 0){
						
						foreach($dd as $dk=>$dv){
								
							if(isset($_POST['sector']) && !empty($_POST['sector'])){
								if($_POST['sector'] == $v['sector']){
									$user_info[$k]['sector'] = $this->getSector($v['sector']);
									$user_info[$k]['title'] = $this->getSector($v['title']);
								}else{
									unset($user_info[$k]);
								}
							}elseif (isset($_POST['title']) && !empty($_POST['title'])){
								if($_POST['title'] == $v['title']){
									$user_info[$k]['sector'] = $this->getSector($v['sector']);
									$user_info[$k]['title'] = $this->getSector($v['title']);
								}else{
									//unset($user_info[$k]);
								}
							}else{
								$user_info[$k]['sector'] = $this->getSector($v['sector']);
								$user_info[$k]['title'] = $this->getSector($v['title']);
							}
								
						}
						
					}
					
				}
			}
			
			$this->assign('user_info',$user_info);
			
		
			if(!empty($_POST['work_end_time'])){
				$this->assign('work_end_time',$_POST['work_end_time']);
			}
			$this->assign('work_start_time',$_POST['work_start_time']);
			$this->assign('pro_id',$_POST['pro_id']);
// 			if(!empty())
			
		}
		$this->assign('menu','Wage/wageInput');
		$this->assign('zhigong',$zhigong);
		$this->assign('caozuoleixing',$caozuoleixing);
		$this->assign('gongzileixing',$gongzileixing);
		$this->assign('buwei',$buwei);
		$this->assign('pro_data',$pro_data);
		$this->assign('bumengleixing',$bumengleixing);
		$this->assign('id',$id);
// 		$this->assign('priv',$priv);
		$this->display('wage.php');
	}
	
	public function wageWorkInput($id=null){
		$data = array();
		$work_data = array();
// 		print_R($_POST);exit;
		if(isset($_POST) && !empty($_POST)){
			if(isset($_POST['work_content'])){
				$work_data['work_content'] = $_POST['work_content'];
			}
			if(isset($_POST['position'])){
				$work_data['position'] = $_POST['position'];
			}
			if(isset($_POST['memo'])){
				$work_data['memo'] = $_POST['memo'];
			}
			if(isset($_POST['xmoney'])){
				$work_data['xmoney'] = $_POST['xmoney'];
			}
			if(isset($_POST['position'])){
				$work_data['position'] = $_POST['position'];
			}
			if(isset($_POST['memo'])){
				$work_data['memo'] = $_POST['memo'];
			}
			if(isset($_POST['total_money'])){
				$work_data['total_money'] = $_POST['total_money'];
			}
			if(isset($_POST['salary_type'])){
				$work_data['salary_type'] = $_POST['salary_type'];
			}
			$work_data['pro_id'] = $_POST['pro_id'];
			$work_data['work_start_time'] = $_POST['work_start_time'];
			if(!empty($_POST['work_end_time'])){
				$work_data['work_end_time'] = $_POST['work_end_time'];
			}
			$insert_id = $this->Wagemodel->insert_work_info($work_data);
			
			if(count($_POST['id']) > 0){
				
				foreach($_POST['id'] as $k=>$v){
					$wage_data[$k]['pro_id'] = $_POST['pro_id'];
					$wage_data[$k]['work_id'] = $insert_id;
					$wage_data[$k]['user_id'] = $v;
					if(isset($_POST['score_'.$v])){
						$wage_data[$k]['score'] = $_POST['score_'.$v];
					}
					$wage_data[$k]['money'] = $_POST['money_'.$v];
				}
				
				$bool = $this->Wagemodel->insert_wage_info($wage_data);
				if($bool){
					$this->skip('Wage/wageInput/'.$id,'工资录入成功');
// 					echo "<script>alert('工资录入成功');window.location.href='".site_url('Wage/wageInput/'.$id)."'</script>";
				}else{
					$this->skip('Wage/wageInput/'.$id,'工资录入失败，请重新填写数据');
				}
			}else{
				if($insert_id){
					$this->skip('Wage/wageInput/'.$id,'工程插入成功');
				}else{
					$this->skip('Wage/wageInput/'.$id,'工程插入失败');
				}
			}
			
			

			
		}else{
			
			
			
		}
	}
	
	public function getSector($id){
		$data = $this->system_config_info($id);
		return $data['s_name'];
	}
	
	public function wageAllTotalInfo($id=NULL){
		$zhigong = $this->system_config('zhigong');
		$bumengleixing = $this->system_config('bumengleixing');
		$gongzileixing = $this->system_config('gongzileixing');
		$pro_data = $this->Projectmodel->select_user_project_info();
		$pro_name = $this->Projectmodel->select_info();
		foreach($pro_data as $key=>$value){
		
			foreach ($pro_name as $k=>$v){
				if($value['pro_id'] == $v['id']){
					$pro_data[$key]['name'] = $v['pro_name'];
				}
			}
		}
		
		if(isset($_POST) && !empty($_POST)){
		
/* 			if($id != 6 && empty($_POST['work_time'])){
				echo "<script>alert('时间不能为空');window.location.href='".site_url('Wage/wageTotalInfo/'.$id)."'</script>";
			} */
		
		
			$data = $this->Wagemodel->select_work_info('','',$_POST['pro_id'],'');
			
			if(!empty($data)){
				$dd = array();
			
				$sql = "SELECT *,SUM(money) AS sum_money,count(work_start_time) AS sum_day, DATE_FORMAT(work_start_time, '%Y-%m') AS month FROM work LEFT JOIN wage ON work.id = wage.work_id WHERE work.pro_id= ".$_POST['pro_id']." GROUP BY salary_type,DATE_FORMAT(work_start_time, '%Y-%m')";
				
				$result = $this->Wagemodel->db->query($sql);
				$dd=$result->result_array();
				
				$de = array();
				foreach($dd as $key=>$value){
					$user_info = $this->Usermodel->Select_info_One($value['user_id']);
					if($user_info['sector'] == $_POST['sector']){
						$de[$user_info['sector']][$value['month']][] = $value;
					}
				}
				
				$this->assign('data',$de);
			}
				
		}
		
// 		print_r($de);exit;
		$this->assign('zhigong',$zhigong);
		$this->assign('bumengleixing',$bumengleixing);
		$this->assign('pro_data',$pro_data);
		$this->assign('id',$id);
		$this->display('wageInfo.php');
		
	}
	
	public function wageTotalInfo($id=NULL){
		$caozuoleixing = $this->system_config('caozuoleixing');
		$bumengleixing = $this->system_config('bumengleixing');
		$zhigong = $this->system_config('zhigong');
		$gongzileixing = $this->system_config('gongzileixing');
		$pro_data = $this->Projectmodel->select_user_project_info();
		$pro_name = $this->Projectmodel->select_info();
		foreach($pro_data as $key=>$value){
		
			foreach ($pro_name as $k=>$v){
				if($value['pro_id'] == $v['id']){
					$pro_data[$key]['name'] = $v['pro_name'];
				}
			}
		}
		
		if(isset($_POST) && !empty($_POST)){
				
			if($id == 4 && empty($_POST['work_time'])){
				$this->skip('Wage/wageTotalInfo/'.$id,'时间不能为空');
			}

			if(isset($_POST['work_time'])){
				$data_month = date('Y-m',strtotime($_POST['work_time']));
				$month = date('m',strtotime($_POST['work_time']));
				$firstMonth = $data_month.'-01';
				$endMonth = date('Y-m-d', strtotime("$firstMonth +1 month -1 day"));
				$num = (strtotime("$firstMonth +1 month -1 day")-strtotime($firstMonth))/86400 +1;
					
				for($i=1;$i<=$num;$i++){
					$days[$i] =$i;
				}
				$this->assign('days',$days);
			}
			
			if($id == 5){	
				$data = $this->Wagemodel->select_work_info('','',$_POST['pro_id'],'');
			}elseif($id == 4){
				$work_time = date("Y-m",strtotime($_POST['work_time']));
				$data = $this->Wagemodel->select_work_info($work_time,'',$_POST['pro_id'],'');
			}

// 			print_r($data);exit;
			if(!empty($data)){
				$dd = array();
				if($id == 5){
					$sql = "SELECT *,SUM(money) AS sum_money,count(work_start_time) AS sum_day, DATE_FORMAT(work_start_time, '%Y-%m') AS month FROM work LEFT JOIN wage ON work.id = wage.work_id WHERE work.pro_id= ".$_POST['pro_id']." GROUP BY salary_type,user_id ,DATE_FORMAT(work_start_time, '%Y-%m')";
				}else{
					$sql = "SELECT *,SUM(money) AS sum_money,count(work_start_time) AS sum_day, DATE_FORMAT(work_start_time, '%Y-%m') AS month FROM work LEFT JOIN wage ON work.id = wage.work_id WHERE work_start_time >='".$data_month."-01' AND work_start_time <='".$data_month."-31' AND work.pro_id= ".$_POST['pro_id']." GROUP BY salary_type,user_id ,DATE_FORMAT(work_start_time, '%Y-%m')";
				}
				$result = $this->Wagemodel->db->query($sql);
				$dd=$result->result_array();
			
// 			print_r($dd);exit;
				$data = array();
				foreach($dd as $key=>$value){
					$user_info = $this->Usermodel->Select_info_One($value['user_id']);
					if($user_info['title'] == $_POST['title']){
						$data[$user_info['name']][$value['month']][] = $value;
					}
				}
// 				print_R($data);exit;
				$this->assign('data',$data);
				
			}
			
		}
		
		
		$this->assign('caozuoleixing',$caozuoleixing);
		$this->assign('bumengleixing',$bumengleixing);
		$this->assign('zhigong',$zhigong);
		$this->assign('pro_data',$pro_data);
		$this->assign('id',$id);
		$this->display('wageInfo.php');
		
	}
	
	/**
	 * 工资统计
	 */
	
	public function wageInfo($id=NULL){
		$bumengleixing = $this->system_config('bumengleixing');
		$zhigong = $this->system_config('zhigong');
		$gongzileixing = $this->system_config('gongzileixing');
		$pro_data = $this->Projectmodel->select_user_project_info();
		$pro_name = $this->Projectmodel->select_info();
		foreach($pro_data as $key=>$value){
				
			foreach ($pro_name as $k=>$v){
				if($value['pro_id'] == $v['id']){
					$pro_data[$key]['name'] = $v['pro_name'];
				}
			}
		}
		
		if($id == 1){
			$salary_type = $gongzileixing['s_type'][0]['id'];
		}elseif ($id == 2){
			$salary_type = $gongzileixing['s_type'][1]['id'];
		}
		
		if(isset($_POST) && !empty($_POST)){
			
			if(empty($_POST['work_time'])){
				$this->skip('Wage/wageInfo/'.$id,'时间不能为空');
// 				echo "<script>alert('时间不能为空');window.location.href='".site_url('Wage/wageInfo/'.$id)."'</script>";
			}
			
			$data_month = date('Y-m',strtotime($_POST['work_time']));
			$month = date('m',strtotime($_POST['work_time']));
			
			$data = $this->Wagemodel->select_work_info($data_month,$salary_type,$_POST['pro_id'],$id);
			
			if(!empty($data)){
				$dd = array();
				if($id ==2){
					$sql = "SELECT * FROM work LEFT JOIN wage ON work.id = wage.work_id WHERE salary_type=".$salary_type." AND work.pro_id= ".$_POST['pro_id']." AND work_end_time >= '".$data_month."-01' AND work_end_time <='".$data_month."-31'";
				}elseif($id == 1){
					$sql = "SELECT * FROM work LEFT JOIN wage ON work.id = wage.work_id WHERE salary_type=".$salary_type." AND work.pro_id= ".$_POST['pro_id']." AND work_start_time >= '".$data_month."-01' AND work_start_time <='".$data_month."-31'";
				}else{
					$sql = "SELECT * FROM work LEFT JOIN wage ON work.id = wage.work_id WHERE  work.pro_id= ".$_POST['pro_id']." AND work_start_time >= '".$data_month."-01' AND work_start_time <='".$data_month."-31'";
				}
				$result = $this->Wagemodel->db->query($sql);
				$dd=$result->result_array();
				$firstMonth = $data_month.'-01';
				$endMonth = date('Y-m-d', strtotime("$firstMonth +1 month -1 day"));
				$num = (strtotime("$firstMonth +1 month -1 day")-strtotime($firstMonth))/86400 +1;
				
				for($i=1;$i<=$num;$i++){
					$days[$i] =$i; 
				}
			
				$data = array();
				foreach($dd as $key=>$value){
					$user_info = $this->Usermodel->Select_info_One($value['user_id']);
					if($user_info['title'] == $_POST['title']){
						if($id == 2){
							if($value['work_start_time'] < $firstMonth){
								$nbao_num = (strtotime($value['work_end_time'])-strtotime($firstMonth))/86400 +1;
							}else{
								$nbao_num = (strtotime($value['work_end_time'])-strtotime($value['work_start_time']))/86400 +1;
							}
							$bao_num = (strtotime($value['work_end_time'])-strtotime($value['work_start_time']))/86400 +1;
							$value['bao_num'] = $bao_num;
							$value['nbao_num'] = $nbao_num;
							$this->assign('data_month',$data_month.'-');
						}
						
						if($value['work_start_time'] < $firstMonth){
							$data[$user_info['name']][intval(date('d',intval($firstMonth)))] = $value;
						}else{
							$data[$user_info['name']][intval(date('d',strtotime($value['work_start_time'])))] = $value;
						}
						
					}
				}
				
				$this->assign('days',$days);
				$this->assign('month',$month);
				$this->assign('data',$data);
				$this->assign('num',$num);
			}else{
				//没有您要的数据
			}
		}
		
		$this->assign('menu','Wage/wageInfo');
		$this->assign('bumengleixing',$bumengleixing);
// 		$this->assign('month',$month);
		$this->assign('zhigong',$zhigong);
		$this->assign('pro_data',$pro_data);
		$this->assign('id',$id);
		$this->display('wageInfo.php');
		
	}
	
}










?>