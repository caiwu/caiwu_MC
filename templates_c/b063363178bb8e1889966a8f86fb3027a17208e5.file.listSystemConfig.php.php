<?php /* Smarty version Smarty-3.1.18, created on 2015-12-14 18:16:53
         compiled from "D:\caiwu\finance\application\views\listSystemConfig.php" */ ?>
<?php /*%%SmartyHeaderCode:32435566e9715d84396-45891244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b063363178bb8e1889966a8f86fb3027a17208e5' => 
    array (
      0 => 'D:\\caiwu\\finance\\application\\views\\listSystemConfig.php',
      1 => 1450087053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32435566e9715d84396-45891244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'value' => 0,
    'controllers_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_566e9715e10d94_65290335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e9715e10d94_65290335')) {function content_566e9715e10d94_65290335($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./common/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("./common/top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("./common/menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <div class="f-cf">
            <div class="m-table-w">
              <table class="m-table" width="100%" cellpadding="0" cellspacing="0" border="1" bordercolor="#b4b4b4">

     <tr>
    <th>参数ID</th>
	<th>参数名</th>
	<th>参数变量名</th>
	<th>排序</th>
	<th>操作</th>
 </tr>


<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
<tr style="font-weight: bold;">
<td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['value']->value['s_name'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['value']->value['s_value'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['value']->value['order_num'];?>
</td>
<td>
	<a href="<?php echo $_smarty_tpl->tpl_vars['controllers_path']->value;?>
/System/systemConfigEdit/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"  title="修改">修改</a>/
	<a href="<?php echo $_smarty_tpl->tpl_vars['controllers_path']->value;?>
/System/systemConfigSelect/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"  title="查看系统参数值">查看系统参数值</a>
</td>
</tr>
<?php } ?>

</table>

            </div>
        </div>
































<?php echo $_smarty_tpl->getSubTemplate ("./common/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
