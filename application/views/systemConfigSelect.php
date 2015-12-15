{include file="./common/header.php"}
{include file="./common/top.php"}
{include file="./common/menu.php"}
   <div class="f-cf">
   <div class="m-table-w">
{if $data|@count neq 0}
<a href="{$controllers_path}/System/systemAddConfig/{$data[0]['parent_id']}">新增系统参数值</a>
{else}
<a href="{$controllers_path}/System/systemAddConfig/{$id}">新增系统参数值</a>
{/if}
</div>
</div>
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
{if $data|@count neq 0}
{foreach from=$data key= k item=value}
<tr style="font-weight: bold;">
<td>{$value['id']}</td>
<td>{$value['s_name']}</td>
<td>{$value['s_value']}</td>
<td>{$value['order_num']}</td>
<td>
	<a href="{$controllers_path}/System/systemConfigEdit/{$value['id']}"  title="修改">修改</a>
</td>
</tr>
{/foreach}
{/if}

</table>

</div>
</div>































{include file="./common/footer.php"}