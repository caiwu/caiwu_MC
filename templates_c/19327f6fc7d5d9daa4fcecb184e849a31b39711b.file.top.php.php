<?php /* Smarty version Smarty-3.1.18, created on 2015-12-14 17:36:58
         compiled from "/home/wwwroot/bjzc8899.com/application/views/common/top.php" */ ?>
<?php /*%%SmartyHeaderCode:452069345566e8dbaec5694-04034404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19327f6fc7d5d9daa4fcecb184e849a31b39711b' => 
    array (
      0 => '/home/wwwroot/bjzc8899.com/application/views/common/top.php',
      1 => 1449674102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '452069345566e8dbaec5694-04034404',
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
  'unifunc' => 'content_566e8dbaed5096_18719876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e8dbaed5096_18719876')) {function content_566e8dbaed5096_18719876($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/wwwroot/bjzc8899.com/application/libraries/Smarty-3.1.18/libs/plugins/modifier.date_format.php';
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
