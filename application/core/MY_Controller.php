<?php if (!defined('BASEPATH')) exit('No direct access allowed.');   
class MY_Controller extends CI_Controller { 
    public function __construct() {   
        parent::__construct();
        $this->load->model('Systemmodel');
        $this->load->model('Usermodel');
        $this->load->model('Projectmodel');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        date_default_timezone_set("Asia/Shanghai");
        
        
        if($this->uri->segment(1) == 'User' && ($this->uri->segment(2) =='reg' || $this->uri->segment(2) =='quit')){
        	 

        }else{
        	$lifeTime = 24 * 3600;
        	if(!isset($_SESSION)){
        		session_start();
        	}
        	session_set_cookie_params($lifeTime);
        }
     	  
        $this->views = 'http://'.$_SERVER['HTTP_HOST'].'/application/views/';
        $this->controllers = 'http://'.$_SERVER['HTTP_HOST'].'/index.php?';
        
        $this->datetime = 'http://'.$_SERVER['HTTP_HOST'].'/application/third_party/datetime/';
        
        $this->assign('datetime_path',$this->datetime);
        $this->assign('controllers_path',$this->controllers);
        $this->assign('views_path',$this->views);
        $this->assign('time',time());
        if($this->uri->segment(1) == 'User' && ($this->uri->segment(2) =='login' || $this->uri->segment(2) =='reg' || $this->uri->segment(2) =='quit')){
      	
        	
        }else{
		
        	if(empty($_SESSION)){
        	
// 				echo "<script>window.location.href='".$this->controllers.'/User/login'."'</script>";
				$this->skip('/User/login');
        	}else{
        		$this->assign('name',$_SESSION['user_name']);
        	}
        	//菜单列表
        	$menu_list = $this->Systemmodel->menu_list();
        	
        	if($_SESSION['type'] == 'project'){
        		$data = $this->Projectmodel->Select_info_One($_SESSION['user_id']);
        	}else{
        		$data = $this->Usermodel->Select_info_One($_SESSION['user_id']);
        	}
        	
        	
        	
        	$pri = array();
        	if($data['priv'] !== '-'){
        		$da = explode(",",$data['priv']);
        		foreach($da as $kk=>$vv){
        			foreach ($menu_list as $k=>$v){
        				if($v['id'] == $vv){
        					if($v['p_id'] ==1){
        						$menuList['m'][] =$v;
        					}else{
        						$menuList['f'][] =$v;
        					}
        					$pri[] = $v;
        				}
        			}
        		}
 
        		if ($this->uri->segment(1) != FALSE)
        		{
        			$priv = $this->uri->segment(1).'/'.$this->uri->segment(2);
        			$bool = false;
        			foreach($pri as $pk=>$pv){
        				if($pv['priv_value'] == $priv){
        					$bool = true;
        				}
        			}
        	
        			if(!$bool){
//         				echo "<script>alert('您没有权限访问');window.location.href='".site_url('Finance/index')."'</script>";
        				$this->skip('/User/login',"您没有权限访问");
        			}
        	
        		}else{
//         			echo site_url('User/login');
//         			echo "<script>window.location.href='".site_url('User/login')."'</script>";
//         			echo "<script>window.location.href='".$this->controllers.'/User/login'."'</script>";
        			$this->skip('/User/login');
        		}
        		 
        	}else{//超级管理员
        		 
        		foreach ($menu_list as $k=>$v){
        			if($v['p_id'] ==1){
        				$menuList['m'][] =$v;
        			}else{
        				$menuList['f'][] =$v;
        			}
        		}
        	}
        	
        	$this->assign('menu_list',$menuList);
        }
    }   
 	 
    
    public function skip($url,$content=NULL){
    	
    	$str = "<script>";
    	if(!empty($content)){
    		$str.="alert('.$content.');";
    	}
    	$str .="window.location.href='".$this->controllers.$url."'</script>";
    	echo $str;
    	
    }
    
    public function assign($key,$val){   
        $this->cismarty->assign($key,$val);   
    }   
  
      
    public function display($html){
        $this->cismarty->display($html);   
    }

    
    public function get_priv(){
    	
    	
    	
    	
    }
    
    public function system_config($str=NULL){
    	
    	if(!empty($str)){
    		$data = $this->Systemmodel->getsystem_config($str);
			return $data;    		
    	}else{
    		return NULL;
    	}
    	
    	
    }
    
    public function system_config_info($id=NULL){
    	
    	if(!empty($id)){
    		$data = $this->Systemmodel->getsystem_config_info($id);
    		return $data;
    	}else{
    		return NULL;
    	}
    	
    }
    
    /**
     * 
     * 加密
     */
    
    public function encrypt_password($password = NULL){
    	$pass = array();
    	
    	if(!empty($password)){
    		$salt=base64_encode(mcrypt_create_iv(32,MCRYPT_DEV_RANDOM));
    		$pass = array(
    				'salt'=>$salt,
    				'password'=>sha1($password.$salt),
    				);
    	}
    	
    	return $pass;

    }

    
    function fileext($file)
    {
    	return pathinfo($file, PATHINFO_EXTENSION);
    }
    /**
     * 生成缩略图
     * @param string     源图绝对完整地址{带文件名及后缀名}
     * @param string     目标图绝对完整地址{带文件名及后缀名}
     * @param int        缩略图宽{0:此时目标高度不能为0，目标宽度为源图宽*(目标高度/源图高)}
     * @param int        缩略图高{0:此时目标宽度不能为0，目标高度为源图高*(目标宽度/源图宽)}
     * @param int        是否裁切{宽,高必须非0}
     * @param int/float  缩放{0:不缩放, 0<this<1:缩放到相应比例(此时宽高限制和裁切均失效)}
     * @return boolean
     */
    function img2thumb($src_img, $dst_img, $width = 75, $height = 75, $cut = 0, $proportion = 0)
    {
    	if(!is_file($src_img))
    	{
    		return false;
    	}
    	$ot = $this->fileext($dst_img);
    	$otfunc = 'image' . ($ot == 'jpg' ? 'jpeg' : $ot);
    	$srcinfo = getimagesize($src_img);
    	$src_w = $srcinfo[0];
    	$src_h = $srcinfo[1];
    	$type  = strtolower(substr(image_type_to_extension($srcinfo[2]), 1));
    	$createfun = 'imagecreatefrom' . ($type == 'jpg' ? 'jpeg' : $type);
    
    	$dst_h = $height;
    	$dst_w = $width;
    	$x = $y = 0;
    
    	/**
    	 * 缩略图不超过源图尺寸（前提是宽或高只有一个）
    	 */
    	/* if(($width> $src_w && $height> $src_h) || ($height> $src_h && $width == 0) || ($width> $src_w && $height == 0))
    	 {
    	$proportion = 1;
    	}
    	if($width> $src_w)
    	{
    	$dst_w = $width = $src_w;
    	}
    	if($height> $src_h)
    	{
    	$dst_h = $height = $src_h;
    	}
    
    	if(!$width && !$height && !$proportion)
    	{
    	return false;
    	} */
    	if(!$proportion)
    	{
    		if($cut == 0)
    		{
    			if($dst_w && $dst_h)
    			{
    				if($dst_w/$src_w> $dst_h/$src_h)
    				{
    					$dst_w = $src_w * ($dst_h / $src_h);
    					$x = 0 - ($dst_w - $width) / 2;
    				}
    				else
    				{
    					$dst_h = $src_h * ($dst_w / $src_w);
    					$y = 0 - ($dst_h - $height) / 2;
    				}
    			}
    			else if($dst_w xor $dst_h)
    			{
    				if($dst_w && !$dst_h)  //有宽无高
    				{
    					$propor = $dst_w / $src_w;
    					$height = $dst_h  = $src_h * $propor;
    				}
    				else if(!$dst_w && $dst_h)  //有高无宽
    				{
    					$propor = $dst_h / $src_h;
    					$width  = $dst_w = $src_w * $propor;
    				}
    			}
    		}
    		else
    		{
    			if(!$dst_h)  //裁剪时无高
    			{
    				$height = $dst_h = $dst_w;
    			}
    			if(!$dst_w)  //裁剪时无宽
    			{
    				$width = $dst_w = $dst_h;
    			}
    			$propor = min(max($dst_w / $src_w, $dst_h / $src_h), 1);
    			$dst_w = (int)round($src_w * $propor);
    			$dst_h = (int)round($src_h * $propor);
    			$x = ($width - $dst_w) / 2;
    			$y = ($height - $dst_h) / 2;
    		}
    	}
    	else
    	{
    		$proportion = min($proportion, 1);
    		$height = $dst_h = $src_h * $proportion;
    		$width  = $dst_w = $src_w * $proportion;
    	}
    
    	$src = $createfun($src_img);
    	$dst = imagecreatetruecolor($width ? $width : $dst_w, $height ? $height : $dst_h);
    	$white = imagecolorallocate($dst, 255, 255, 255);
    	imagefill($dst, 0, 0, $white);
    
    	if(function_exists('imagecopyresampled'))
    	{
    		imagecopyresampled($dst, $src, $x, $y, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
    	}
    	else
    	{
    		imagecopyresized($dst, $src, $x, $y, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
    	}
    	$otfunc($dst, $dst_img);
    	imagedestroy($dst);
    	imagedestroy($src);
    	return $dst;
    }
    
    
   } 
