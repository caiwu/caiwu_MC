{include file="./common/header.php"}
{include file="./common/top.php"}
{include file="./common/menu.php"}


<form name="frame_form" method="post" action="{$controllers_path}/Project/projectAllot" enctype="multipart/form-data">

	
{foreach from=$dat['s_type'] key= datk item=datv}
			<span>{$datv['s_name']}</span><br>
			{foreach from=$da['s_type'] key= dak item=dav}
					<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$dav['s_name']}</span><br>
					{foreach from=$data key= k item=value}
						{if ($datv['id'] == $value['sector'] && $dav['id'] == $value['title'])}
							{if $pro_data|@count neq 0}
									{if $value['id']|in_array:$pro_data['user_id']}
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="{$value['id']}" checked="checked" value="{$value['id']}">{$value['name']}<br>
									{else}
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="{$value['id']}"  value="{$value['id']}">{$value['name']}<br>	
									{/if}
							{else}
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="{$value['id']}"  value="{$value['id']}">{$value['name']}<br>	
							{/if}
						{/if}
					{/foreach}	
			{/foreach}
{/foreach}
<input id="id" value="{$id}" name="id" type="hidden" class="form-control x319 in" autocomplete="off">
 <input type="submit" value="保存" name = "submit" class="btn btn_blue" style="margin-left:-1px;width:106px;height:38px;font-size:14px;margin-left:15px;padding:0;">
        
</form>


































{include file="./common/footer.php"}