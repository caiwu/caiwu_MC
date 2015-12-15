<?php /* Smarty version Smarty-3.1.18, created on 2015-12-14 18:16:42
         compiled from "D:\caiwu\finance\application\views\userAdd.php" */ ?>
<?php /*%%SmartyHeaderCode:29730566e970a385a18-65303478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7bb2271f1da0260b1edde675d517915d315ce9c' => 
    array (
      0 => 'D:\\caiwu\\finance\\application\\views\\userAdd.php',
      1 => 1450087053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29730566e970a385a18-65303478',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controllers_path' => 0,
    'data' => 0,
    'v' => 0,
    'da' => 0,
    'views_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_566e970a47fa14_67054098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e970a47fa14_67054098')) {function content_566e970a47fa14_67054098($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./common/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("./common/top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("./common/menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form name="frame_form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['controllers_path']->value;?>
/User/userAdd" enctype="multipart/form-data">
        <div class="form-manage f-cf">
            <div class="group f-cf" style="margin-left:88px;"><a href="javascript:void(0);" class="u-button">打   印</a><a href="javascript:void(0);" class="u-button u-button-2">返  回</a></div>
        </div>
        <div class="f-cf">
            <div class="form-detail">
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">姓名</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="name" class="u-text" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="label">邮箱</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="email" class="u-text" value="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">性别</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="radio" name="sex" checked class="u-radio" value="1" id="radio-man" />
                                <label for="radio-man" class="u-label-radio">男</label>
                                <input type="radio" name="sex" class="u-radio" value="2" id="radio-woman" />
                                <label for="radio-woman" class="u-label-radio">女</label>
                            </div>
                        </div>
                    </div>
                    
 
                    
                    <div class="item" style="z-index:2;">
                        <div class="label">人员类型</div>
                        <div class="zoom">
                            <div class="input">
                                <div class="u-select">
                                      <select name="sector" class="value" style="width:170px;">   
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['s_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
												<option selected="selected"  value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['s_name'];?>
</option>  
											<?php } ?>
										 </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">生日</div>
                        <div class="zoom">
                            <div class="input">
                               <!--  <div class="u-select2"></div>-->
          							 <input type="text" name="brithday" class="u-text" id="radio-woman" />				
                                
                            </div>
                        </div>
                    </div>
                    

                    
                    <div class="item">
                        <div class="label">岗位工种</div>
                        <div class="zoom">
                            <div class="input">
                             <div class="u-select">
		                    	<select name="title" class="value" style="width:170px;">   
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['da']->value['s_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
										<option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['s_name'];?>
</option>  
									<?php } ?>
								 </select>                           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">手机</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="mobile_phone" class="u-text" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="label">电话</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="telephone" class="u-text" value="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">身份证</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text"  name="id_card" class="u-text u-text-2" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="label">银行账号</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="bank_card" class="u-text u-text-2" value="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">合同类型</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="contract_type" class="u-text u-text-2" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="label">合同开始</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="contract_start" class="u-text u-text-2" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">试用时间</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="trial_time" class="u-text u-text-2" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="label">离职时间</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="leave_time" class="u-text u-text-2" value="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">

                    <div class="item">
                        <div class="label">工号</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="work_num" class="u-text u-text-2" value="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">上传证件</div>
                        <div class="zoom">
                            <div class="input">
                                <div class="u-file">
                                    <input type="file" name="file" class="fil" value="" />
                                    <span class="fil-msk">上传</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
             <!-- <div class="group f-cf" style="margin-left:88px;">
                    <ul class="credentials-list">
                        <li>
                            <div class="image"><a class="fancybox" href="<?php echo $_smarty_tpl->tpl_vars['views_path']->value;?>
images/credentials_1.jpg" data-fancybox-group="gallery"><img src="<?php echo $_smarty_tpl->tpl_vars['views_path']->value;?>
images/credentials_1.jpg" alt="" /></a></div>
                            <div class="text">身份证</div>
                        </li>
                        <li>
                            <div class="image"><a class="fancybox" href="<?php echo $_smarty_tpl->tpl_vars['views_path']->value;?>
images/credentials_2.jpg" data-fancybox-group="gallery"><img src="<?php echo $_smarty_tpl->tpl_vars['views_path']->value;?>
images/credentials_2.jpg" alt="" /></a></div>
                            <div class="text">木工技术证件</div>
                        </li>
                    </ul>
                </div> -->   
                <div class="group f-cf">
               <div class="item item-button" style="width:706px; padding-left:90px;">
                <input type="submit" value="确认信息" name = "submit" class="u-button" style="margin-left:-1px;width:106px;height:38px;font-size:14px;margin-left:15px;padding:0;">
                  <!-- <a href="javascript:void(0);" class="u-button">保存</a>  -->
                   </div>
                </div>
            </div>
        </div>
</form>

<?php echo $_smarty_tpl->getSubTemplate ("./common/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- 
<div class="form-group">
						<label for="j_username" class="t">姓名：</label> 
						<input id="email" value="" name="name" type="text" class="form-control x319 in" autocomplete="off">
</div>
<div class="form-group">
						<label for="j_username" class="t">邮箱：</label> 
						<input id="email" value="" name="email" type="text" class="form-control x319 in" autocomplete="off">
</div>
			<label for="j_username" class="t">性别：</label> 
			<label><input name="sex" type="radio" value="1" />男 </label> 
			<label><input name="Fruit" type="radio" value="2" />女 </label> 
<div class="form-group">
						<label for="j_username" class="t">生日：</label> 
						<input id="email" value="" name="brithday" type="text" class="form-control x319 in" autocomplete="off">
</div>
<div class="form-group">
						<label for="j_username" class="t">手机：</label> 
						<input id="email" value="" name="mobile_phone" type="text" class="form-control x319 in" autocomplete="off">
</div>
<div class="form-group">
						<label for="j_username" class="t">身份证：</label> 
						<input id="email" value="" name="id_card" type="text" class="form-control x319 in" autocomplete="off">
</div>
<div class="form-group">
						<label for="j_username" class="t">合同类别：</label> 
						<input id="email" value="" name="contract_type" type="text" class="form-control x319 in" autocomplete="off">
</div>
<div class="form-group">
						<label for="j_username" class="t">试用时间：</label> 
						<input id="email" value="" name="trial_time" type="text" class="form-control x319 in" autocomplete="off">
</div>
<div class="form-group">
						<label for="j_username" class="t">工号：</label> 
						<input id="email" value="" name="work_num" type="text" class="form-control x319 in" autocomplete="off">
</div> 
<div class="form-group">
<label for="j_username" class="t">部门：</label> 
						<select name="sector">   
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['s_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['s_name'];?>
</option>  
							<?php } ?>
						 </select>
</div>
<div class="form-group">
<label for="j_username" class="t">职称：</label> 
						<select name="title">   
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['da']->value['s_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['s_name'];?>
</option>  
							<?php } ?>
						 </select>
</div>
<div class="form-group">
						<label for="j_username" class="t">电话：</label> 
						<input id="email" value="" name="telephone" type="text" class="form-control x319 in" autocomplete="off">
</div>
<div class="form-group">
						<label for="j_username" class="t">银行帐号：</label> 
						<input id="email" value="" name="bank_card" type="text" class="form-control x319 in" autocomplete="off">
</div>
<div class="form-group">
						<label for="j_username" class="t">合同开始：</label> 
						<input id="email" value="" name="contract_start" type="text" class="form-control x319 in" autocomplete="off">
</div>
<div class="form-group">
						<label for="j_username" class="t">离职时间：</label> 
						<input id="email" value="" name="leave_time" type="text" class="form-control x319 in" autocomplete="off">
</div>
<div class="form-group">
						<label for="j_username" class="t">上传证件：</label> 
						<input id="email" value="" name="file" type="file" class="form-control x319 in" autocomplete="off">
</div>

<input type="submit" value="确认信息" name = "submit" class="btn btn_blue" style="margin-left:-1px;width:106px;height:38px;font-size:14px;margin-left:15px;padding:0;">
</form>
 -->
<?php }} ?>
