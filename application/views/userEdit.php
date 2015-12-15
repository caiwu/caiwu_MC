{include file="./common/header.php"}
{include file="./common/top.php"}
{include file="./common/menu.php"}
<form name="frame_form" method="post" action="{$controllers_path}/User/userEdit" enctype="multipart/form-data">
      <!--  <div class="form-manage f-cf">
            <div class="group f-cf" style="margin-left:88px;"><a href="javascript:void(0);" class="u-button">打   印</a><a href="javascript:void(0);" class="u-button u-button-2">返  回</a></div>
        </div>
       --> 
        <div class="f-cf">
            <div class="form-detail">
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">姓名</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="name" class="u-text" value="{$data['name']}" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="label">邮箱</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="email" class="u-text" value="{$data['email']}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">性别</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="radio" name="sex" {if ({$data['sex']} == 1)}checked {/if} class="u-radio" id="radio-man" />
                                <label for="radio-man" class="u-label-radio">男</label>
                                <input type="radio" name="sex" {if ({$data['sex']} == 2)}checked {/if} class="u-radio" id="radio-woman" />
                                <label for="radio-man" class="u-label-radio">女</label>
                            </div>
                        </div>
                    </div>
                    
 
                    
                    <div class="item" style="z-index:2;">
                        <div class="label">人员类型</div>
                        <div class="zoom">
                            <div class="input">
                                <div class="u-select">
                                   <h3 class="value"><span class="val">{$data['sector']}</span></h3>
                                     <!--  <ul class="list">
                                        <li>人员类型1</li>
                                        <li>人员类型2</li>
                                    </ul>-->
    									 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">生日</div>
                        <div class="zoom">
                            <div class="input">
                               <!--  <div class="u-select2"></div>-->
          							 <input type="text" name="brithday" class="u-text" id="radio-woman" value="{$data['brithday']}" />				
                                
                            </div>
                        </div>
                    </div>
                    

                    
                    <div class="item">
                        <div class="label">岗位工种</div>
                        <div class="zoom">
                            <div class="input">
                             <div class="u-select">
									<h3 class="value"><span class="val">{$data['title']}</span></h3>                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">手机</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="mobile_phone" class="u-text" value="{$data['mobile_phone']}" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="label">电话</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="telephone" class="u-text" value="{$data['telephone']}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">身份证</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text"  name="id_card" class="u-text u-text-2" value="{$data['id_card']}" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="label">银行账号</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="bank_card" class="u-text u-text-2" value="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">合同类型</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="contract_type" class="u-text u-text-2" value="{$data['contract_type']}" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="label">合同开始</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="contract_start" class="u-text u-text-2" value="{$data['contract_start']}"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">试用时间</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="trial_time" class="u-text u-text-2" value="{$data['trial_time']}" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="label">离职时间</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="leave_time" class="u-text u-text-2" value="{$data['leave_time']}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">

                    <div class="item">
                        <div class="label">工号</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="work_num" class="u-text u-text-2" value="{$data['work_num']}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">上传身份证证件</div>
                        <div class="zoom">
                            <div class="input">
                                <div class="u-file">
                                    <input type="file" name="file" class="fil" value="" />
                                    <span class="fil-msk">点击上传</span> </div>
                            </div>
                        </div>
                    </div>
                <div class="item">
                        <div class="label">上传技术证件</div>
                        <div class="zoom">
                            <div class="input">
                                <div class="u-file">
                                    <input type="file" name="file1" class="fil" value="" />
                                    <span class="fil-msk">点击上传</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf" style="margin-left:88px;">
                    <ul class="credentials-list">
                        <li>
                            <div class="image"><a class="fancybox" href="原图" data-fancybox-group="gallery"><img src="{$upload}{$data['i_img']}" alt="" /></a></div>
                            <div class="text">身份证</div>
                        </li>
                        <li>
                            <div class="image"><a class="fancybox" href="原图" data-fancybox-group="gallery"><img src="{$upload}{$data['t_img']}" alt="" /></a></div>
                            <div class="text">木工技术证件</div>
                        </li>
                    </ul>
                </div>
                <div class="group f-cf">
               <div class="item item-button" style="width:706px; padding-left:90px;">
                 <input id="id" value="{$data['id']}" name="id" type="hidden">
                   <input id="title" value="{$data['title']}" name="title" type="hidden">
                <input type="submit" value="确认信息" name = "submit" class="u-button" style="margin-left:-1px;width:106px;height:38px;font-size:14px;margin-left:15px;padding:0;">
                  <!-- <a href="javascript:void(0);" class="u-button">保存</a>  -->
                   </div>
                </div>
            </div>
        </div>
</form>
<!--  
<form name="frame_form" method="post" action="{$controllers_path}/User/userEdit" enctype="multipart/form-data">
<table class="table_data">
    <thead>
     <tr>
    <td>性别</td>
	<td>名称</td>
	<td>电子邮件</td>
	<td>生日</td>
	<td>身份证</td>
	<td>部门</td>
	<td>岗位工种</td>
	<td>手机</td>
	<td>电话</td>
	<td>合同类型</td>
	<td>工号</td>
	<td>银行卡号</td>
	<td>合同开始时间</td>
	<td>辞职时间</td>
	<td>试用时间</td>
	<td>image</td>
 </tr>
</thead>
<tbody>

<tr style="font-weight: bold;">
<td><input type="text" name="sex"  value="{$data['sex']}"></td>
<td><input type="text" name="name"  value="{$data['name']}"></td>
<td><input type="text" name="email"  value="{$data['email']}"></td>
<td><input type="text" name="brithday"  value="{$data['brithday']}"></td>
<td><input type="text" name="id_card"  value="{$data['id_card']}"></td>
<td>
<div class="form-group">

						<select name="sector">   
							{foreach from=$dat['s_type'] key= k item=v}
								{if ($data['sector'] == $v['id'])}
									<option  selected="selected" value="{$v['id']}">{$v['s_name']}</option>
								{else}
									<option  value="{$v['id']}">{$v['s_name']}</option>  	  
								{/if}
							{/foreach}
						 </select>
</div>
</td>
<td>
<div class="form-group">

						<select name="title">   
							{foreach from=$da['s_type'] key= k item=v}
								{if ($da['title'] == $v['id'])}
									<option  selected="selected" value="{$v['id']}">{$v['s_name']}</option>
								{else}
									<option  value="{$v['id']}">{$v['s_name']}</option>  	  
								{/if}
							{/foreach}
						 </select>
</div>
</td>
<td><input type="text" name="mobile_phone"   value="{$data['mobile_phone']}"></td>
<td><input type="text" name="telephone"  value="{$data['telephone']}"></td>
<td><input type="text" name="contract_type"   value="{$data['contract_type']}"></td>
<td><input type="text" name="work_num"   value="{$data['work_num']}"></td>
<td><input type="text" name="bank_card"  value="{$data['bank_card']}"></td>
<td><input type="text" name="contract_start"   value="{$data['contract_start']}"></td>
<td><input type="text" name="leave_time"  value="{$data['leave_time']}"></td>
<td><input type="text" name="trial_time"   value="{$data['trial_time']}"></td>
<td>
	image
</td>
</tr>

</tbody>
</table>

<input id="id" value="{$id}" name="id" type="hidden" class="form-control x319 in" autocomplete="off">
<input type="submit" value="保存" name = "submit" class="btn btn_blue" style="margin-left:-1px;width:106px;height:38px;font-size:14px;margin-left:15px;padding:0;">
   
</form>








-->





















{include file="./common/footer.php"}