{include file="./common/header.php"}
<body class="page-user">
<div class="login-wrap">
    <div class="logo"><img src="{$views_path}/images/logo.png" alt="" /></div>
    <div class="login-form">
    <form name="frame_form" method="post" action="{$controllers_path}/User/login" enctype="multipart/form-data">
        <div class="caption f-cf"><!-- <a href="#" class="lnk">注册帐号</a> --><strong class="tit">登录</strong></div>
        <div class="item item-user f-cf">
            <div class="label">选择身份登录</div>
            <div class="zoom">
                 <div class="u-select" style="width:232px;">
			 		 <select class="value" name="pro_id" style="width:272px;">
			 		 		<option selected="selected" value="admin">管理员</option>
							{foreach from=$pro_data key= k item=v}
								<option  value="{$v['id']}">{$v['pro_name']}</option>
							{/foreach}
					</select>
                </div>
            </div>
        </div>
        <div class="item item-user f-cf">
            <div class="label">邮箱：</div>
            <div class="zoom">
                <div class="input">
                    <input type="text" id="email" value="" name="email" class="u-text" />
                </div>
            </div>
        </div>
        <div class="item item-pwd f-cf">
            <div class="label">密码</div>
            <div class="zoom">
                <div class="input">
                    <input type="password" id="password" value="" name="password" class="u-text" />
                    <p>{if (isset($data))}{$data['massage']}{/if}</p>
                </div>
            </div>
        </div>
        <div class="button f-cf"> <span class="u-span">
        <!--  <input type="checkbox" value="" id="at" />
            <label for="at">自动登录</label>
            <a href="#">忘记密码?</a></span>-->    
            <input type="submit" value="登 录" name = "submit" class="u-button">
            
        </div>
        
	</form>
    </div>
</div>
</body>
</html>