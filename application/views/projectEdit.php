{include file="./common/header.php"}
{include file="./common/top.php"}
{include file="./common/menu.php"}

<form name="frame_form" method="post" action="{$controllers_path}/Project/projectEdit" enctype="multipart/form-data">

  <div class="f-cf">
            <div class="form-detail">
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">项目名称：</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="pro_name" class="u-text" value="{$data['pro_name']}" />
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="group f-cf">
                    <div class="item">
                        <div class="label">项目email：</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="pro_email" class="u-text" value="{$data['pro_email']}" />
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="group f-cf">
                    <div class="item">
                        <div class="label"></div>
                        <div class="zoom">
                            <div class="input">
                                <p class="input">不修改密码，以下不需要填写</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">项目新密码：</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="password" name="pro_password" class="u-text" value="" />
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">再次输入新密码：</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="password" name="password_sure" class="u-text" value="" />
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="group f-cf">
               <div class="item item-button" style="width:706px; padding-left:90px;">
               <input id="id" value="{$data['id']}" name="id" type="hidden" class="form-control x319 in" autocomplete="off">
               
                <input type="submit" value="确认信息" name = "submit" class="u-button" style="margin-left:-1px;width:106px;height:38px;font-size:14px;margin-left:15px;padding:0;">
                  <!-- <a href="javascript:void(0);" class="u-button">保存</a>  -->
                   </div>
                </div>
</form>

{include file="./common/footer.php"}