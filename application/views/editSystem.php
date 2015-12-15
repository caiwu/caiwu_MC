{include file="./common/header.php"}
{include file="./common/top.php"}
{include file="./common/menu.php"}

<form name="frame_form" method="post" action="{$controllers_path}/System/systemEdit" enctype="multipart/form-data">

        <div class="f-cf">
            <div class="form-detail">
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">名	称:</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="priv_name" class="u-text" value="{$data['priv_name']}" />
                            </div>
                        </div>
                    </div>
                </div>
 				<div class="group f-cf">
				<div class="item">
                        <div class="label">菜单类别：</div>
                        <div class="zoom">
                            <div class="input">
                             <div class="u-select">
		                    	<select name="priv_type" class="value" style="width:170px;">   
							       <option {if ($data['priv_type'] eq 'menu')} selected="selected" {/if} value="1" >菜单</option>  
							       <option {if ($data['priv_type'] eq 'priv')} selected="selected" {/if} value="2" >权限</option>   
								 </select>                           
                                </div>
                            </div>
                        </div>
                    </div>              
                
                 </div>  
                 <div class="group f-cf">
                   <div class="item">
                        <div class="label">父菜单：</div>
                        <div class="zoom">
                            <div class="input">
                             <div class="u-select">
		                    	<select name="p_id" class="value" style="width:170px;">   
									{foreach from=$menue item=value}
						 				<option  {if ($value['id'] eq $data['id'])} selected="selected" {/if} id= "qq2" value="{$value['p_id']}">{$value['priv_name']}</option>  
									{/foreach}
								 </select>                           
                                </div>
                            </div>
                        </div>
                    </div>               
                </div>      
        <div class="f-cf">
            <div class="form-detail">
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">链接 地址:</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="priv_value" class="u-text" value="{$data['priv_value']}" />
                            </div>
                        </div>
                    </div>
                </div>
        <div class="f-cf">
            <div class="form-detail">
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">排	序:</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="order_num" class="u-text" value="{$data['order_num']}" />
                            </div>
                        </div>
                    </div>
                </div>
        <div class="f-cf">
            <div class="form-detail">
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">备注：</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="memos" class="u-text" value="{$data['memo']}" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group f-cf">
               <div class="item item-button" style="width:706px; padding-left:90px;">
                <input type="submit" value="确认信息" name = "submit" class="u-button" style="margin-left:-1px;width:106px;height:38px;font-size:14px;margin-left:15px;padding:0;">
                  <!-- <a href="javascript:void(0);" class="u-button">保存</a>  -->
                   </div>
                </div>
</form>

{include file="./common/footer.php"}