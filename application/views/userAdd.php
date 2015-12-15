{include file="./common/header.php"}
{include file="./common/top.php"}
{include file="./common/menu.php"}
<form name="frame_form" method="post" action="{$controllers_path}/User/userAdd" enctype="multipart/form-data">
        <div class="form-manage f-cf">
            <div class="group f-cf" style="margin-left:88px;"><a href="javascript:void(0);" class="u-button">打   印</a><a href="javascript:void(0);" class="u-button u-button-2">返  回</a></div>
        </div>
        <div class="f-cf">
            <div class="form-detail">
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">姓名</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="name" class="u-text" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="label">邮箱</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="email" class="u-text" value="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">性别</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="radio" name="sex" checked class="u-radio" value="1" id="radio-man" />
                                <label for="radio-man" class="u-label-radio">男</label>
                                <input type="radio" name="sex" class="u-radio" value="2" id="radio-woman" />
                                <label for="radio-woman" class="u-label-radio">女</label>
                            </div>
                        </div>
                    </div>
                    
 
                    
                    <div class="item" style="z-index:2;">
                        <div class="label">人员类型</div>
                        <div class="zoom">
                            <div class="input">
                                <div class="u-select">
                                      <select name="sector" class="value" style="width:170px;">   
											{foreach from=$data['s_type'] key= k item=v}
												<option selected="selected"  value="{$v['id']}">{$v['s_name']}</option>  
											{/foreach}
										 </select>
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
          							 <input type="text" name="brithday" class="u-text" id="radio-woman" />				
                                
                            </div>
                        </div>
                    </div>
                    

                    
                    <div class="item">
                        <div class="label">岗位工种</div>
                        <div class="zoom">
                            <div class="input">
                             <div class="u-select">
		                    	<select name="title" class="value" style="width:170px;">   
									{foreach from=$da['s_type'] key= k item=v}
										<option selected="selected" value="{$v['id']}">{$v['s_name']}</option>  
									{/foreach}
								 </select>                           
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
                                <input type="text" name="mobile_phone" class="u-text" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="label">电话</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="telephone" class="u-text" value="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">身份证</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text"  name="id_card" class="u-text u-text-2" value="" />
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
                                <input type="text" name="contract_type" class="u-text u-text-2" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="label">合同开始</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="contract_start" class="u-text u-text-2" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">试用时间</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="trial_time" class="u-text u-text-2" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="label">离职时间</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="leave_time" class="u-text u-text-2" value="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">

                    <div class="item">
                        <div class="label">工号</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="work_num" class="u-text u-text-2" value="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">上传证件</div>
                        <div class="zoom">
                            <div class="input">
                                <div class="u-file">
                                    <input type="file" name="file" class="fil" value="" />
                                    <span class="fil-msk">上传</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
             <!-- <div class="group f-cf" style="margin-left:88px;">
                    <ul class="credentials-list">
                        <li>
                            <div class="image"><a class="fancybox" href="{$views_path}images/credentials_1.jpg" data-fancybox-group="gallery"><img src="{$views_path}images/credentials_1.jpg" alt="" /></a></div>
                            <div class="text">身份证</div>
                        </li>
                        <li>
                            <div class="image"><a class="fancybox" href="{$views_path}images/credentials_2.jpg" data-fancybox-group="gallery"><img src="{$views_path}images/credentials_2.jpg" alt="" /></a></div>
                            <div class="text">木工技术证件</div>
                        </li>
                    </ul>
                </div> -->   
                <div class="group f-cf">
               <div class="item item-button" style="width:706px; padding-left:90px;">
                <input type="submit" value="确认信息" name = "submit" class="u-button" style="margin-left:-1px;width:106px;height:38px;font-size:14px;margin-left:15px;padding:0;">
                  <!-- <a href="javascript:void(0);" class="u-button">保存</a>  -->
                   </div>
                </div>
            </div>
        </div>
</form>

{include file="./common/footer.php"}
<!-- 
<div class="form-group">
						<label for="j_username" class="t">姓名：</label> 
						<input id="email" value="" name="name" type="text" class="form-control x319 in" autocomplete="off">
</div>
<div class="form-group">
						<label for="j_username" class="t">邮箱：</label> 
						<input id="email" value="" name="email" type="text" class="form-control x319 in" autocomplete="off">
</div>
			<label for="j_username" class="t">性别：</label> 
			<label><input name="sex" type="radio" value="1" />男 </label> 
			<label><input name="Fruit" type="radio" value="2" />女 </label> 
<div class="form-group">
						<label for="j_username" class="t">生日：</label> 
						<input id="email" value="" name="brithday" type="text" class="form-control x319 in" autocomplete="off">
</div>
<div class="form-group">
						<label for="j_username" class="t">手机：</label> 
						<input id="email" value="" name="mobile_phone" type="text" class="form-control x319 in" autocomplete="off">
</div>
<div class="form-group">
						<label for="j_username" class="t">身份证：</label> 
						<input id="email" value="" name="id_card" type="text" class="form-control x319 in" autocomplete="off">
</div>
<div class="form-group">
						<label for="j_username" class="t">合同类别：</label> 
						<input id="email" value="" name="contract_type" type="text" class="form-control x319 in" autocomplete="off">
</div>
<div class="form-group">
						<label for="j_username" class="t">试用时间：</label> 
						<input id="email" value="" name="trial_time" type="text" class="form-control x319 in" autocomplete="off">
</div>
<div class="form-group">
						<label for="j_username" class="t">工号：</label> 
						<input id="email" value="" name="work_num" type="text" class="form-control x319 in" autocomplete="off">
</div> 
<div class="form-group">
<label for="j_username" class="t">部门：</label> 
						<select name="sector">   
							{foreach from=$data['s_type'] key= k item=v}
								<option selected="selected" value="{$v['id']}">{$v['s_name']}</option>  
							{/foreach}
						 </select>
</div>
<div class="form-group">
<label for="j_username" class="t">职称：</label> 
						<select name="title">   
							{foreach from=$da['s_type'] key= k item=v}
								<option selected="selected" value="{$v['id']}">{$v['s_name']}</option>  
							{/foreach}
						 </select>
</div>
<div class="form-group">
						<label for="j_username" class="t">电话：</label> 
						<input id="email" value="" name="telephone" type="text" class="form-control x319 in" autocomplete="off">
</div>
<div class="form-group">
						<label for="j_username" class="t">银行帐号：</label> 
						<input id="email" value="" name="bank_card" type="text" class="form-control x319 in" autocomplete="off">
</div>
<div class="form-group">
						<label for="j_username" class="t">合同开始：</label> 
						<input id="email" value="" name="contract_start" type="text" class="form-control x319 in" autocomplete="off">
</div>
<div class="form-group">
						<label for="j_username" class="t">离职时间：</label> 
						<input id="email" value="" name="leave_time" type="text" class="form-control x319 in" autocomplete="off">
</div>
<div class="form-group">
						<label for="j_username" class="t">上传证件：</label> 
						<input id="email" value="" name="file" type="file" class="form-control x319 in" autocomplete="off">
</div>

<input type="submit" value="确认信息" name = "submit" class="btn btn_blue" style="margin-left:-1px;width:106px;height:38px;font-size:14px;margin-left:15px;padding:0;">
</form>
 -->
