
<p>{if (isset($data))}{$data['massage']}{/if}</p>
<form name="frame_form" method="post" action="{$controllers_path}/user/reg" enctype="multipart/form-data">

<div class="form-group">
						<label for="j_username" class="t">姓名：</label> 
						<input id="email" value="" name="name" type="text" class="form-control x319 in" autocomplete="off">
</div>
<div class="form-group">
						<label for="j_username" class="t">邮箱：</label> 
						<input id="email" value="" name="email" type="text" class="form-control x319 in" autocomplete="off">
</div>
<div class="form-group">
						<label for="j_username" class="t">密码：</label> 
						<input id="email" value="" name="password" type="password" class="form-control x319 in" autocomplete="off">
</div>
<div class="form-group">
						<label for="j_username" class="t">确认密码：</label> 
						<input id="email" value="" name="password_sure" type="password" class="form-control x319 in" autocomplete="off">
</div>
<input id="id" value="reg" name="reg" type="hidden" class="form-control x319 in" autocomplete="off">
<input type="submit" value="确认信息" name = "submit" class="btn btn_blue" style="margin-left:-1px;width:106px;height:38px;font-size:14px;margin-left:15px;padding:0;">

</form>