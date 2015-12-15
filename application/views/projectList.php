{include file="./common/header.php"}
{include file="./common/top.php"}
{include file="./common/menu.php"}


        <div class="f-cf">
            <div class="m-table-w">
                <table class="m-table" width="100%" cellpadding="0" cellspacing="0" border="1" bordercolor="#b4b4b4">

     <tr>
    <th>项目Id</th>
	<th>项目名称</th>
	<th>项目帐号</th>
	<th>项目创建时间</th>
	<th>操作</th>
 </tr>

{foreach from=$data key= k item=value}
<tr style="font-weight: bold;">
<td>{$value['id']}</td>
<td>{$value['pro_name']}</td>
<td>{$value['pro_email']}</td>
<td>{$value['create_time']|date_format:"%Y-%m-%d %H:%M:%S"}</td>
<td>
	<a href="{$controllers_path}/Project/projectWork/{$value['id']}"  title="查看工程">查看工程</a>/
	<a href="{$controllers_path}/Project/projectEdit/{$value['id']}"  title="修改">修改</a>/
	<a href="{$controllers_path}/Project/projectAllot/{$value['id']}"  title="分配员工">分配员工</a>
</td>
</tr>
{/foreach}

</table>

</div>
</div>































{include file="./common/footer.php"}