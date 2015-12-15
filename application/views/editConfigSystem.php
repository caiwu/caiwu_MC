{include file="./common/header.php"}
{include file="./common/top.php"}
{include file="./common/menu.php"}

<form name="frame_form" method="post" action="{$controllers_path}/System/systemConfigEdit" enctype="multipart/form-data">

    <div class="f-cf">
            <div class="form-detail">
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">参数名：</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="s_name" class="u-text" value="{$data['s_name']}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">参数变量名：</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="s_value" class="u-text" value="{$data['s_value']}" />
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="group f-cf">
                    <div class="item">
                        <div class="label">排序：</div>
                        <div class="zoom">
                            <div class="input">
                                <input type="text" name="order_num" class="u-text" value="{$data['order_num']}" />
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
                </div>
                </div>

</form>

{include file="./common/footer.php"}