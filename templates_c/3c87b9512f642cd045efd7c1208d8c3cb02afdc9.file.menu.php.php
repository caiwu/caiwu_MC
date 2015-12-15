<?php /* Smarty version Smarty-3.1.18, created on 2015-12-14 18:04:19
         compiled from "D:\caiwu\finance\application\views\common\menu.php" */ ?>
<?php /*%%SmartyHeaderCode:7531566e9423e5bf01-56551359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c87b9512f642cd045efd7c1208d8c3cb02afdc9' => 
    array (
      0 => 'D:\\caiwu\\finance\\application\\views\\common\\menu.php',
      1 => 1450087052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7531566e9423e5bf01-56551359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_list' => 0,
    'value' => 0,
    'vv' => 0,
    'controllers_path' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_566e9423eb9b38_11235475',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e9423eb9b38_11235475')) {function content_566e9423eb9b38_11235475($_smarty_tpl) {?>
<div class="page-content f-cf">
<div class="page-side f-cf">
        <ul class="side-menu">
      		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu_list']->value['m']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
	            <li> <a href="javascript:void(0);"><i class="icon icon-user"></i><?php echo $_smarty_tpl->tpl_vars['value']->value['priv_name'];?>
<i class="arrow"></i></a>
	            <ul class="side-menu-sub">
	            <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu_list']->value['f']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
				  <?php if (($_smarty_tpl->tpl_vars['value']->value['id']==$_smarty_tpl->tpl_vars['vv']->value['p_id'])) {?>
	                    <li>
	                    <a href="<?php echo $_smarty_tpl->tpl_vars['controllers_path']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['vv']->value['priv_value'];?>
" 
	                    <?php if ((isset($_smarty_tpl->tpl_vars['menu']->value)&&$_smarty_tpl->tpl_vars['menu']->value==$_smarty_tpl->tpl_vars['vv']->value['priv_value'])) {?> class="z-active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['vv']->value['priv_name'];?>

	                    </a>
	                    </li>
	              <?php }?>
		       <?php } ?>	
		       </ul>
	            </li>
            <?php } ?>
        </ul>
    </div>     

<div class="page-main f-cf"><?php }} ?>
