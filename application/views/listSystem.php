{include file="./common/header.php"}
{include file="./common/top.php"}
{include file="./common/menu.php"}


        <div class="f-cf">
            <div class="m-table-w">
                <table class="m-table" width="100%" cellpadding="0" cellspacing="0" border="1" bordercolor="#b4b4b4">

     <tr>
    <th>菜单ID</th>
	<th>菜单名</th>
	<th>父菜单</th>
	<th>菜单值</td>
	<th>菜单/权限</th>
	<th>memo</th>
	<th>排序</th>
	<th>操作</th>
 </tr>


{foreach from=$data['m'] key= k item=value}
<tr style="font-weight: bold;">
<td>{$value['id']}</td>
<td>{$value['priv_name']}</td>
<td>{$value['p_id']}</td>
<td>{$value['priv_value']}</td>
<td>
{if ($value['priv_type'] eq 'priv')}
权限
{else}
菜单
{/if}
</td>
<td>{$value['memo']}</td>
<td>{$value['order_num']}</td>
<td><a href="{$controllers_path}/System/systemEdit/{$value['id']}"  title="修改">修改</a>
<a href="{$controllers_path}/System/systemDelete/{$value['id']}"  title="删除">删除</a>
</td>
</tr> 
	{foreach from=$data['f'] key = kk item=vv}
		
		{if ($vv['p_id'] == $value['id'])}	
			<tr style="font-weight:bold;">
			<td>{$vv['id']}</td>
			<td>{$vv['priv_name']}</td>
			<td>{$vv['p_id']}</td>
			<td>{$vv['priv_value']}</td>
			<td>
			{if ($vv['priv_type'] eq 'priv')}
			权限
			{else}
			菜单
			{/if}
			</td>
			<td>{$vv['memo']}</td>
			<td>{$vv['order_num']}</td>
			<td><a href="{$controllers_path}/System/systemEdit/{$vv['id']}"  title="修改">修改</a>
			<a href="{$controllers_path}/System/systemDelete/{$vv['id']}"  title="删除">删除</a>
			</td>
			</tr> 
		{/if}
	{/foreach}
{/foreach}

</table>

          </div>
        </div>



{include file="./common/footer.php"}