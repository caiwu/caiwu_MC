{include file="./common/header.php"}
{include file="./common/top.php"}
{include file="./common/menu.php"}
        <div class="f-cf">
            <div class="m-table-w">
                <table class="m-table" width="100%" cellpadding="0" cellspacing="0" border="1" bordercolor="#b4b4b4">

     <tr>
    <th>Id</th>
	<th>姓名</th>
	<th>邮箱</th>
	<th>性别</th>
	<th>电话</th>
	<th>人员类型 </th>
	<th>岗位工种</th>
	<th>身份证号</th>
	<th>银行卡号</th>
	<th>操作</th>
 </tr>

{foreach from=$data key= k item=value}
<tr style="font-weight: bold;">
{if ($value['id'] != 1)}
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
	<a href="{$controllers_path}/System/controlEdit/{$value['id']}"  title="查看">查看并修改</a>
</td>
{/if}
</tr>
{/foreach}

</table>


          </div>
        </div>




{include file="./common/footer.php"}