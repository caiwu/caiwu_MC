{include file="./common/header.php"}
{include file="./common/top.php"}
{include file="./common/menu.php"}

<form name="frame_form" method="post" action="{$controllers_path}/System/controlEdit" enctype="multipart/form-data">
   
           <div class="f-cf">
            <div class="m-table-w">
      {foreach from=$menu_list['m'] key= k item=value}
     				
     					{if $value['id']|in_array:$priv}
							<input type="checkbox" name="{$value['id']}"  checked="checked" value="{$value['id']}">{$value['priv_name']}<br />
						{else}
							<input type="checkbox" name="{$value['id']}" value="{$value['id']}">{$value['priv_name']}<br />	
						{/if}
				{foreach from=$menu_list['f'] key= kk item=vv}
					  {if ($value['id'] == $vv['p_id'])}
					      	{if $vv['id']|in_array:$priv}
								<span style="width:50px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" checked="checked" name="{$vv['id']}" value="{$vv['id']}">{$vv['priv_name']}</span><br />
							{else}
								<span style="width:50px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="{$vv['id']}" value="{$vv['id']}">{$vv['priv_name']}</span><br />
							{/if}
					  {/if}
		       {/foreach}		  
      {/foreach}
      
                      <div class="group f-cf">
               <div class="item item-button" style="width:706px; padding-left:90px;">
               
<input id="id" value="{$id}" name="id" type="hidden" class="form-control x319 in" autocomplete="off">
                <input type="submit" value="保存" name = "submit" class="u-button" style="margin-left:-1px;width:106px;height:38px;font-size:14px;margin-left:15px;padding:0;">
                  <!-- <a href="javascript:void(0);" class="u-button">保存</a>  -->
                   </div>
                </div>
      
      
    </div>
    </div>  
</form>































{include file="./common/footer.php"}