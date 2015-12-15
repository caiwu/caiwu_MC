{include file="./common/header.php"}
{include file="./common/top.php"}
{include file="./common/menu.php"}

        <div class="f-cf">
            <div class="m-table-w">
                <table class="m-table" width="100%" cellpadding="0" cellspacing="0" border="1" bordercolor="#b4b4b4">


     <tr>
    <th>工程Id</th>
	<th>项目名称</th>
	<th>项目开始时间</th>
	<th>项目结束时间</th>
	<th>工程类型</th>
	<th>部位</th>
	<th>单价</th>
	<th>工程量</th>
	<th>小计</th>
	<th>总计</th>
	<th>工作内容</th>
	<th>备注</th>

	
 </tr>

{foreach from=$data key= k item=value}
<tr style="font-weight: bold;">
<td>{$value['id']}</td>
<td>{$value['pro_name']}</td>
<td>{$value['work_start_time']}</td>
<td>{$value['work_end_time']}</td>
<td>{$value['salary_type']}</td>
<td>{$value['position']}</td>
<td>{$value['price']}</td>
<td>{$value['count']}</td>
<td>{$value['xmoney']}</td>
<td>{$value['total_money']}</td>
<td>{$value['work_content']}</td>
<td>{$value['memo']}</td>

</tr>
{/foreach}

</table>
</div>
</div>
