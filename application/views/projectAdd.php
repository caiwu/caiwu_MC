{include file="./common/header.php"}
{include file="./common/top.php"}
{include file="./common/menu.php"}
            <div class="tab-nav f-cf">
                <ul class="nav">
                    <li><a onclick="Hide1()" href="#" class="z-active">项目添加</a></li>
                </ul>
            </div>
            <div class="form-manage f-cf">
  
<div class="m-wrap f-cf">          
<form name="frame_form" method="post" action="{$controllers_path}/Project/projectAdd" enctype="multipart/form-data">
    <div class="f-cf">
            <div class="form-detail">
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">项目名称：</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="pro_name" class="u-text" value="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">项目email：</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="pro_email" class="u-text" value="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">项目密码：</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="password" name="pro_password" class="u-text" value="" />
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">再次输入密码：</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="password" name="password_sure" class="u-text" value="" />
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
                </div>
                </div>
</form>
</div>
{include file="./common/footer.php"}




