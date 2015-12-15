{include file="./common/header.php"}
{include file="./common/top.php"}
{include file="./common/menu.php"}
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
			  		{foreach from=$data key= k item=value}
					<tr style="font-weight: bold;">
					<td>{$value['id']}</td>
					<td>{$value['name']}</td>
					<td>{$value['email']}</td>
					<td>{if ($value['sex']== 1)}男{else}女{/if}</td>
					<td>{$value['telephone']}</td>
					<td>{$value['sector']}</td>
					<td>{$value['title']}</td>
					<td>{$value['id_card']}</td>
					<td>{$value['bank_card']}</td>
					<td>
						<a href="{$controllers_path}/User/userSel/{$value['id']}"  title="查看">查看</a>/
						<a href="{$controllers_path}/User/userEdit/{$value['id']}"  title="修改">修改</a>/
						<a href="{$controllers_path}/User/userDel/{$value['id']}"  title="删除">删除</a>
					</td>
					</tr>
					{/foreach}
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
		{foreach from=$data key= k item=value}
		<tr style="font-weight: bold;">
		<td>{$value['id']}</td>
		<td>{$value['name']}</td>
		<td>{$value['email']}</td>
		<td>{if ($value['sex']== 1)}男{else}女{/if}</td>
		<td>{$value['telephone']}</td>
		<td>{$value['sector']}</td>
		<td>{$value['title']}</td>
		<td>{$value['id_card']}</td>
		<td>{$value['bank_card']}</td>
		<td>
			<a href="{$controllers_path}/User/userSel/{$value['id']}"  title="查看">查看</a>/
			<a href="{$controllers_path}/User/userEdit/{$value['id']}"  title="修改">修改</a>/
			<a href="{$controllers_path}/User/userDel/{$value['id']}"  title="删除">删除</a>
		</td>
		</tr>
		{/foreach}
		</tbody>
		</table>

-->
		
{include file="./common/footer.php"}

