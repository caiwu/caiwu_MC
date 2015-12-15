{include file="./common/header.php"}
{include file="./common/top.php"}
{include file="./common/menu.php"}

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


{foreach from=$data key= k item=value}
<tr style="font-weight: bold;">
<td>{$value['id']}</td>
<td>{$value['s_name']}</td>
<td>{$value['s_value']}</td>
<td>{$value['order_num']}</td>
<td>
	<a href="{$controllers_path}/System/systemConfigEdit/{$value['id']}"  title="修改">修改</a>/
	<a href="{$controllers_path}/System/systemConfigSelect/{$value['id']}"  title="查看系统参数值">查看系统参数值</a>
</td>
</tr>
{/foreach}

</table>

            </div>
        </div>
































{include file="./common/footer.php"}