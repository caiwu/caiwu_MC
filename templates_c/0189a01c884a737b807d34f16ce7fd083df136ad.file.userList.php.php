<?php /* Smarty version Smarty-3.1.18, created on 2015-12-14 18:04:19
         compiled from "D:\caiwu\finance\application\views\userList.php" */ ?>
<?php /*%%SmartyHeaderCode:20453566e9423c63fc2-16654050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0189a01c884a737b807d34f16ce7fd083df136ad' => 
    array (
      0 => 'D:\\caiwu\\finance\\application\\views\\userList.php',
      1 => 1450087052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20453566e9423c63fc2-16654050',
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
  'unifunc' => 'content_566e9423d88fb0_55130004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e9423d88fb0_55130004')) {function content_566e9423d88fb0_55130004($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./common/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("./common/top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("./common/menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="f-cf">
            <div class="m-table-w">
                <table class="m-table" width="100%" cellpadding="0" cellspacing="0" border="1" bordercolor="#b4b4b4">
                    <tr>
                       
                        <th>序号(Id)</th>
			 			<td>姓名</td>
						<td>邮箱</td>
						<td>性别</td>
						<td>电话</td>
						<td>人员类型 </td>
						<td>岗位工种</td>
						<td>身份证号</td>
						<td>银行卡号</td>
						<td>操作</td>
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
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['email'];?>
</td>
					<td><?php if (($_smarty_tpl->tpl_vars['value']->value['sex']==1)) {?>男<?php } else { ?>女<?php }?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['telephone'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['sector'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['id_card'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['bank_card'];?>
</td>
					<td>
						<a href="<?php echo $_smarty_tpl->tpl_vars['controllers_path']->value;?>
/User/userSel/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"  title="查看">查看</a>/
						<a href="<?php echo $_smarty_tpl->tpl_vars['controllers_path']->value;?>
/User/userEdit/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"  title="修改">修改</a>/
						<a href="<?php echo $_smarty_tpl->tpl_vars['controllers_path']->value;?>
/User/userDel/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"  title="删除">删除</a>
					</td>
					</tr>
					<?php } ?>
                </table>
            </div>
        </div>


<!--  data">
		    <thead>
		     <tr>
		    <td>Id</td>
			<td>姓名</td>
			<td>邮箱</td>
			<td>性别</td>
			<td>电话</td>
			<td>人员类型 </td>
			<td>岗位工种</td>
			<td>身份证号</td>
			<td>银行卡号</td>
			<td>操作</td>
		 </tr>
		</thead>
		<tbody>
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
		<td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->value['email'];?>
</td>
		<td><?php if (($_smarty_tpl->tpl_vars['value']->value['sex']==1)) {?>男<?php } else { ?>女<?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->value['telephone'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->value['sector'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->value['id_card'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->value['bank_card'];?>
</td>
		<td>
			<a href="<?php echo $_smarty_tpl->tpl_vars['controllers_path']->value;?>
/User/userSel/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"  title="查看">查看</a>/
			<a href="<?php echo $_smarty_tpl->tpl_vars['controllers_path']->value;?>
/User/userEdit/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"  title="修改">修改</a>/
			<a href="<?php echo $_smarty_tpl->tpl_vars['controllers_path']->value;?>
/User/userDel/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"  title="删除">删除</a>
		</td>
		</tr>
		<?php } ?>
		</tbody>
		</table>

-->
		
<?php echo $_smarty_tpl->getSubTemplate ("./common/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
