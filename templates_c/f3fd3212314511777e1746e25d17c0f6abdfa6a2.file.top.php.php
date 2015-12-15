<?php /* Smarty version Smarty-3.1.18, created on 2015-12-14 18:04:19
         compiled from "D:\caiwu\finance\application\views\common\top.php" */ ?>
<?php /*%%SmartyHeaderCode:31418566e9423e159f0-51556736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3fd3212314511777e1746e25d17c0f6abdfa6a2' => 
    array (
      0 => 'D:\\caiwu\\finance\\application\\views\\common\\top.php',
      1 => 1450087052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31418566e9423e159f0-51556736',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'time' => 0,
    'views_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_566e9423e30f78_74252696',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e9423e30f78_74252696')) {function content_566e9423e30f78_74252696($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\caiwu\\finance\\application\\libraries\\Smarty-3.1.18\\libs\\plugins\\modifier.date_format.php';
?>
<div class="page-header f-cf">
	<a href="http://www.finance.com/index.php?/User/quit" class="z-active">安全退出</a>
    <div class="date"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 欢迎登录财务后台 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value,'%Y-%m-%d %H:%M:%S');?>
</div>
    <div class="logo"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['views_path']->value;?>
/images/logo.png" alt="" /></a></div>
</div>

<?php }} ?>
