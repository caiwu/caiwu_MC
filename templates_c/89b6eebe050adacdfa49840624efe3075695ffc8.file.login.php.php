<?php /* Smarty version Smarty-3.1.18, created on 2015-12-14 17:35:32
         compiled from "/home/wwwroot/bjzc8899.com/application/views/login.php" */ ?>
<?php /*%%SmartyHeaderCode:1457621726566e8d64dff0f5-79716341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89b6eebe050adacdfa49840624efe3075695ffc8' => 
    array (
      0 => '/home/wwwroot/bjzc8899.com/application/views/login.php',
      1 => 1449930776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1457621726566e8d64dff0f5-79716341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'views_path' => 0,
    'controllers_path' => 0,
    'pro_data' => 0,
    'v' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_566e8d64e52bf2_54615577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e8d64e52bf2_54615577')) {function content_566e8d64e52bf2_54615577($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./common/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body class="page-user">
<div class="login-wrap">
    <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['views_path']->value;?>
/images/logo.png" alt="" /></div>
    <div class="login-form">
    <form name="frame_form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['controllers_path']->value;?>
/User/login" enctype="multipart/form-data">
        <div class="caption f-cf"><!-- <a href="#" class="lnk">注册帐号</a> --><strong class="tit">登录</strong></div>
        <div class="item item-user f-cf">
            <div class="label">选择身份登录</div>
            <div class="zoom">
                 <div class="u-select" style="width:232px;">
			 		 <select class="value" name="pro_id" style="width:272px;">
			 		 		<option selected="selected" value="admin">管理员</option>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pro_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<option  value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['pro_name'];?>
</option>
							<?php } ?>
					</select>
                </div>
            </div>
        </div>
        <div class="item item-user f-cf">
            <div class="label">邮箱：</div>
            <div class="zoom">
                <div class="input">
                    <input type="text" id="email" value="" name="email" class="u-text" />
                </div>
            </div>
        </div>
        <div class="item item-pwd f-cf">
            <div class="label">密码</div>
            <div class="zoom">
                <div class="input">
                    <input type="password" id="password" value="" name="password" class="u-text" />
                    <p><?php if ((isset($_smarty_tpl->tpl_vars['data']->value))) {?><?php echo $_smarty_tpl->tpl_vars['data']->value['massage'];?>
<?php }?></p>
                </div>
            </div>
        </div>
        <div class="button f-cf"> <span class="u-span">
        <!--  <input type="checkbox" value="" id="at" />
            <label for="at">自动登录</label>
            <a href="#">忘记密码?</a></span>-->    
            <input type="submit" value="登 录" name = "submit" class="u-button">
            
        </div>
        
	</form>
    </div>
</div>
</body>
</html><?php }} ?>
