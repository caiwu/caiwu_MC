{include file="./common/header.php"}
{include file="./common/top.php"}
{include file="./common/menu.php"}

<script language="javascript" type="text/javascript" src="{$datetime_path}WdatePicker.js"></script>

<div class="tab-nav f-cf"> <!-- <a href="#" class="delete">删除</a> -->
                <ul class="nav">
                    <li><a onclick="Hide1()"  class="z-active">日工</a></li>
                    <li><a onclick="Hide2()" href="#">包工</a></li>
                    <li><a onclick="Hide3()" href="#">借支</a></li>
                    <li><a onclick="Hide4()" href="#">奖金</a></li>
                    <li><a onclick="Hide5()" href="#">补贴</a></li>
                    <li><a onclick="Hide6()" href="#">罚款</a></li>
                </ul>
            

</div>



<div class='rigong'>
        <div class="form-manage f-cf">
<form name="frame_form" method="post" action="{$controllers_path}/Wage/wageInput/1" enctype="multipart/form-data">
            <div class="m-wrap f-cf">
                <div class="group f-cf">
                    <div class="item">
                     <div class="u-txt">时间：</div>
                        <div class="u-input">
						   	
							<input  type="text" name='work_start_time' class="txt" onClick="WdatePicker()"> 
							
                        </div>
                      <!--   <div class="u-search">
                            <input type="button" class="btn" value="" />
                            <input type="text" class="txt" value="" id="txt-search" />
                            <label for="txt-search" class="lab">姓名检索</label>
                        </div>
                         -->
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="u-txt">项	目：</div>
                        <div class="u-select" style="width:272px;">
		                		<select class="value" name="pro_id" style="width:272px;">   
									{foreach from=$pro_data key= k item=v}
										<option  value="{$v['pro_id']}">{$v['name']}</option>
									{/foreach}
								 </select>
                        </div>
                        <div class="u-txt">部	门：</div>
                        <div class="u-select" style="width:232px;">
	                        <select name="sector" class="value" style="width:232px;">   
								<option selected="selected" value="">请选择部门</option>
								{foreach from=$bumengleixing['s_type'] key= k item=v}
									<option  value="{$v['id']}">{$v['s_name']}</option>
								{/foreach}
							 </select>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                       	<input id="id" value="{$gongzileixing['s_type'][0]['id']}" name="{$gongzileixing['s_type'][0]['s_value']}" type="hidden" class="form-control x319 in" autocomplete="off">
						<input type="submit" value="搜索" name = "submit" class="u-button u-button-1">
  
                    </div>
                </div>
   </form>
      



<form name="frame_form work" method="post" action="{$controllers_path}/Wage/wageWorkInput/1" enctype="multipart/form-data">

	
	                <div class="group f-cf">
                    <div class="item">
                        <div class="u-txt">工作内容：</div>
                        <div class="u-select" style="width:272px;">
	                        <div class="u-input">
							   	
								<input  type="text" name='work_content' class="txt"> 
								
	                        </div>
                        </div>
                        <div class="u-txt">部	位：</div>
                        <div class="u-select" style="width:232px;">
	                        <select name="position" class="value" style="width:232px;">   
								<option selected="selected" value="">请选择部位</option>  
								{foreach from=$buwei['s_type'] key= k item=v}
									<option  value="{$v['id']}">{$v['s_name']}</option>  
								{/foreach}
							 </select>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="u-txt">备　　注：</div>
                        <div class="u-textarea">
                            <textarea class="txta" name="memo" ></textarea>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="u-txt">总　　计：</div>
                        <div class="u-input">
                            <input type="text" name="total_money" class="txt" />
                        </div>
                	</div>
            	</div>
            	 <div class="group f-cf">
                    <div class="item">
					<input id="id" value="{$gongzileixing['s_type'][0]['id']}" name="salary_type" type="hidden" class="form-control x319 in" autocomplete="off">
				
					<input type="submit" value="确定" name = "submit" class="u-button u-button-2">
					</div>
				</div>
</div>

        <div class="f-cf">
        {if (isset($user_info) && !empty($user_info))}
        			<input id="id" value="{$pro_id}" name="pro_id" type="hidden" class="form-control x319 in" autocomplete="off">
					<input id="id" value="{$work_start_time}" name="work_start_time" type="hidden" class="form-control x319 in" autocomplete="off">
			<ul class="input-list">
			{foreach from=$user_info key= uk item=uv}
                <li>
                    <div class="head">
                        <div class="item">
                            <input type="checkbox" class="u-checkbox" name="id[]"  value="{$uv['id']}" />
                            <label class="u-label-checkbox">{$uv['title']}:{$uv['name']}</label>
                        </div>
                    </div>
                    <div class="body">
                        <div class="item">工分：
                            <input type="text" name="score_{$uv['id']}" value="" class="u-text" />
                          	  天</div>
                        <div class="item">金额：
                            <input type="text" name="money_{$uv['id']}" value="" class="u-text" />
                           	元</div>
                    </div>
                </li>
            {/foreach}
             </ul>
		{elseif (empty($user_info))}
			没有多余员工
		{else}
			请搜索需要录入工资的员工
		{/if}	
        </div>
	
	</form>
	

  </div>
</div>



<div class='baogong'>
<div class="form-manage f-cf">
<form name="frame_form" method="post" action="{$controllers_path}/Wage/wageInput/2" enctype="multipart/form-data">
            <div class="m-wrap f-cf">
                <div class="group f-cf">
                    <div class="item">
                     <div class="u-txt">开始时间：</div>
                        <div class="u-input">
						   	
							<input  type="text" name='work_start_time' class="txt" onClick="WdatePicker()"> 
							
                        </div>
                      <!--   <div class="u-search">
                            <input type="button" class="btn" value="" />
                            <input type="text" class="txt" value="" id="txt-search" />
                            <label for="txt-search" class="lab">姓名检索</label>
                        </div>
                         -->
                     <div class="u-txt">结束时间：</div>
                        <div class="u-input">
						   	
							<input  type="text" name='work_end_time' class="txt" onClick="WdatePicker()"> 
							
                        </div>
                      <!--   <div class="u-search">
                            <input type="button" class="btn" value="" />
                            <input type="text" class="txt" value="" id="txt-search" />
                            <label for="txt-search" class="lab">姓名检索</label>
                        </div>
                         -->
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="u-txt">项	目：</div>
                        <div class="u-select" style="width:272px;">
		                		<select class="value" name="pro_id" style="width:272px;">   
									{foreach from=$pro_data key= k item=v}
										<option  value="{$v['pro_id']}">{$v['name']}</option>
									{/foreach}
								 </select>
                        </div>
                        <div class="u-txt">职	位：</div>
                        <div class="u-select" style="width:272px;">
	                        <select name="title" class="value" style="width:272px;">   
								<option selected="selected" value="">请选择职位</option>
								{foreach from=$zhigong['s_type'] key= k item=v}
									<option  value="{$v['id']}">{$v['s_name']}</option>
								{/foreach}
							 </select>
                        </div>
                    </div>
                </div>
                
                <div class="group f-cf">
                    <div class="item">
                       	<input id="id" value="{$gongzileixing['s_type'][1]['id']}" name="salary_type" type="hidden" class="form-control x319 in" autocomplete="off">
						<input type="submit" value="搜索" name = "submit" class="u-button u-button-1">
  
                    </div>
                </div>
   </form>
      

<form name="frame_form work" method="post" action="{$controllers_path}/Wage/wageWorkInput/2" enctype="multipart/form-data">
		          <div class="group f-cf">
                    <div class="item">
                        <div class="u-txt">工程量：</div>
                        <div class="u-select" style="width:272px;">
	                        <div class="u-input">
							   	
								<input  type="text" name='count' class="txt"> 
								
	                        </div>
                        </div>   
                        <div class="u-txt">操作类型：</div>
                        <div class="u-select" style="width:232px;">
							<select name="opearte_type" class="value" style="width:232px;">   
								<option selected="selected" value="">请选择操作类型</option>  
								{foreach from=$caozuoleixing['s_type'] key= k item=v}
									<option  value="{$v['id']}">{$v['s_name']}</option>  
								{/foreach}
							 </select>
                        </div>
                    </div>
                </div>
		          <div class="group f-cf">
                    <div class="item">
                        <div class="u-txt">工作内容：</div>
                        <div class="u-select" style="width:272px;">
	                        <div class="u-input">
							   	
								<input  type="text" name='work_content' class="txt"> 
								
	                        </div>
                        </div>
                        <div class="u-txt">部	位：</div>
                        <div class="u-select" style="width:232px;">
	                        <select name="position" class="value" style="width:232px;">   
								<option selected="selected" value="">请选择部位</option>  
								{foreach from=$buwei['s_type'] key= k item=v}
									<option  value="{$v['id']}">{$v['s_name']}</option>  
								{/foreach}
							 </select>
                        </div>
                    
                </div>
		          <div class="group f-cf">
                    <div class="item">
                        <div class="u-txt">单	位：</div>
                        <div class="u-select" style="width:272px;">
	                        <div class="u-input">
							   	
								<input  type="text" name='price' class="txt"> 
								
	                        </div>
                        </div>
                </div>
		          <div class="group f-cf">
                    <div class="item">
                      <div class="u-txt">小	计：</div>
                        <div class="u-select" style="width:232px;">
	                         <div class="u-input">
							   	
								<input  type="text" name='xmoney' class="txt"> 
								
	                        </div>
                        </div>
					</div>
				</div>                
                <div class="group f-cf">
                    <div class="item">
                        <div class="u-txt">备　　注：</div>
                        <div class="u-textarea">
                            <textarea class="txta" name="memo" ></textarea>
                        </div>
                    </div>
                </div>
                <div class="group f-cf">
                    <div class="item">
                        <div class="u-txt">总　　计：</div>
                        <div class="u-input">
                            <input type="text" name="total_money" class="txt" />
                        </div>
                	</div>
            	</div>
            	 <div class="group f-cf">
                    <div class="item">
					<input id="id" value="{$gongzileixing['s_type'][1]['id']}" name="salary_type" type="hidden" class="form-control x319 in" autocomplete="off">
				
					<input type="submit" value="确定" name = "submit" class="u-button u-button-2">
					</div>
				</div>
				

	</div>
</div>
</div>

        <div class="f-cf">
        
        {if (isset($user_info) && !empty($user_info))}
				<input id="pro_id" value="{$pro_id}" name="pro_id" type="hidden" class="form-control x319 in" autocomplete="off">
				<input id="work_start_time" value="{$work_start_time}" name="work_start_time" type="hidden" class="form-control x319 in" autocomplete="off">
				{if (isset($work_end_time))}
					<input id="work_end_time" value="{$work_end_time}" name="work_end_time" type="hidden" class="form-control x319 in" autocomplete="off">
				{/if}
			<ul class="input-list">
			{foreach from=$user_info key= uk item=uv}
                <li>
                    <div class="head">
                        <div class="item">
                            <input type="checkbox" class="u-checkbox" name="id[]"  value="{$uv['id']}" />
                            <label class="u-label-checkbox">{$uv['title']}:{$uv['name']}</label>
                        </div>
                    </div>
                    <div class="body">
                        <div class="item">
                         		   时间：{$work_start_time} - {$work_end_time}<br>
                          	  天</div>
                        <div class="item">金额：
                            <input type="text" name="money_{$uv['id']}" value="" class="u-text" />
                           	元</div>
                    </div>
                </li>
            {/foreach}
             </ul>
		{elseif (empty($user_info))}
			没有多余员工
		{else}
			请搜索需要录入工资的员工
		{/if}	
        </div>
<!-- 
	<div>
		{if (isset($user_info) && !empty($user_info))}
				<input id="pro_id" value="{$pro_id}" name="pro_id" type="hidden" class="form-control x319 in" autocomplete="off">
				<input id="work_start_time" value="{$work_start_time}" name="work_start_time" type="hidden" class="form-control x319 in" autocomplete="off">
				{if (isset($work_end_time))}
					<input id="work_end_time" value="{$work_end_time}" name="work_end_time" type="hidden" class="form-control x319 in" autocomplete="off">
				{/if}
			{foreach from=$user_info key= uk item=uv}
				
				<input type="checkbox" name="id[]"  value="{$uv['id']}">{$uv['title']}:{$uv['name']} <br>
				时间：{$work_start_time} - {$work_end_time}<br>
				金额：<input type="text" name="money_{$uv['id']}"  value=""><br>
			{/foreach}
		{elseif (empty($user_info))}
			没有多余员工
		{else}
			请搜索需要录入工资的员工
		{/if}
	</div>
	
	 -->
</form>

</div>

</div>

<div class='jiezhi'>
<div class="form-manage f-cf">
<form name="frame_form" method="post" action="{$controllers_path}/Wage/wageInput/3" enctype="multipart/form-data">
            <div class="m-wrap f-cf">
                <div class="group f-cf">
                    <div class="item">
                     <div class="u-txt">开始时间：</div>
                        <div class="u-input">
						   	
							<input  type="text" name='work_start_time' class="txt" onClick="WdatePicker()"> 
							
                        </div>
                      <!--   <div class="u-search">
                            <input type="button" class="btn" value="" />
                            <input type="text" class="txt" value="" id="txt-search" />
                            <label for="txt-search" class="lab">姓名检索</label>
                        </div>
                         -->
                     <div class="u-txt">结束时间：</div>
                        <div class="u-input">
						   	
							<input  type="text" name='work_end_time' class="txt" onClick="WdatePicker()"> 
							
                        </div>
                      <!--   <div class="u-search">
                            <input type="button" class="btn" value="" />
                            <input type="text" class="txt" value="" id="txt-search" />
                            <label for="txt-search" class="lab">姓名检索</label>
                        </div>
                         -->
                    </div>
                </div>
                
                <div class="group f-cf">
                    <div class="item">
                        <div class="u-txt">项	目：</div>
                        <div class="u-select" style="width:272px;">
		                		<select class="value" name="pro_id" style="width:272px;">   
									{foreach from=$pro_data key= k item=v}
										<option  value="{$v['pro_id']}">{$v['name']}</option>
									{/foreach}
								 </select>
                        </div>
                    </div>
                </div>     
                
               <div class="group f-cf">
                    <div class="item">
                       	<input id="id" value="{$gongzileixing['s_type'][2]['id']}" name="salary_type" type="hidden" class="form-control x319 in" autocomplete="off">
						<input type="submit" value="搜索" name = "submit" class="u-button u-button-1">
  
                    </div>
                </div>     
</form>


<form name="frame_form work" method="post" action="{$controllers_path}/Wage/wageWorkInput/3" enctype="multipart/form-data">
                <div class="group f-cf">
                    <div class="item">
                        <div class="u-txt">部	门：</div>
                        <div class="u-select" style="width:232px;">
                        <select name="sector" class="value" style="width:232px;">   
								<option selected="selected" value="">请选择部门</option>
								{foreach from=$bumengleixing['s_type'] key= k item=v}
									<option  value="{$v['id']}">{$v['s_name']}</option>
								{/foreach}
							 </select>
                        </div>
                    </div>
                </div>
	
	
	           <div class="group f-cf">
                    <div class="item">
                        <div class="u-txt">总　　计：</div>
                        <div class="u-input">
                            <input type="text" name="total_money" class="txt" />
                        </div>
                	</div>
            	</div>
            	 <div class="group f-cf">
                    <div class="item">
					<input id="id" value="{$gongzileixing['s_type'][2]['id']}" name="salary_type" type="hidden" class="form-control x319 in" autocomplete="off">
				
					<input type="submit" value="确定" name = "submit" class="u-button u-button-2">
					</div>
				</div>
		        
</div>		
				
        <div class="f-cf">
        
        {if (isset($user_info) && !empty($user_info))}
				<input id="pro_id" value="{$pro_id}" name="pro_id" type="hidden" class="form-control x319 in" autocomplete="off">
				<input id="work_start_time" value="{$work_start_time}" name="work_start_time" type="hidden" class="form-control x319 in" autocomplete="off">
				{if (isset($work_end_time))}
					<input id="work_end_time" value="{$work_end_time}" name="work_end_time" type="hidden" class="form-control x319 in" autocomplete="off">
				{/if}
			<ul class="input-list">
			{foreach from=$user_info key= uk item=uv}
                <li>
                    <div class="head">
                        <div class="item">
                            <input type="checkbox" class="u-checkbox" name="id[]"  value="{$uv['id']}" />
                            <label class="u-label-checkbox">{$uv['title']}:{$uv['name']}</label>
                        </div>
                    </div>
                    <div class="body">
                        <div class="item">
                         		   时间：{$work_start_time} - {$work_end_time}<br>
                          	  天</div>
                        <div class="item">金额：
                            <input type="text" name="money_{$uv['id']}" value="" class="u-text" />
                           	元</div>
                    </div>
                </li>
            {/foreach}
             </ul>
		{elseif (empty($user_info))}
			没有多余员工
		{else}
			请搜索需要录入工资的员工
		{/if}	
        </div>

        <!-- 
	<div>
		{if (isset($user_info))}
				<input id="id" value="{$pro_id}" name="pro_id" type="hidden" class="form-control x319 in" autocomplete="off">
				<input id="id" value="{$work_start_time}" name="work_start_time" type="hidden" class="form-control x319 in" autocomplete="off">
				{if (isset($work_end_time))}
					<input id="id" value="{$work_end_time}" name="work_end_time" type="hidden" class="form-control x319 in" autocomplete="off">
				{/if}
			{foreach from=$user_info key= uk item=uv}
				
				<input type="checkbox" name="id[]"  value="{$uv['id']}">{$uv['title']}:{$uv['name']} <br>
				时间：{$work_start_time} - {$work_end_time}<br>
				金额：<input type="text" name="money_{$uv['id']}"  value=""><br>
			{/foreach}
		{else}
			请搜索需要借支的员工
		{/if}
	</div>
	
	 -->
</form>

</div>

</div>

<div class='jiangjin'>


ffffffffffffffff

</div>

<div class='butie'>

ssssssssssssss


</div>
<div class='fakuan'>



444444444
</div>



<script>

var a=null;
{if (isset($id))}
	Hide{$id}();
{else}
	Hide1();	
{/if}



function Hide1()
{
    $(".rigong").show();
    $(".baogong").hide();
    $(".jiezhi").hide();
    $(".jiangjin").hide();
    $(".butie").hide();
    $(".fakuan").hide();
}
function Hide2()
{
    $(".rigong").hide();
    $(".baogong").show();
    $(".jiezhi").hide();
    $(".jiangjin").hide();
    $(".butie").hide();
    $(".fakuan").hide();
}
function Hide3()
{
    $(".rigong").hide();
    $(".baogong").hide();
    $(".jiezhi").show();
    $(".jiangjin").hide();
    $(".butie").hide();
    $(".fakuan").hide();
}
function Hide4()
{
    $(".rigong").hide();
    $(".baogong").hide();
    $(".jiezhi").hide();
    $(".jiangjin").show();
    $(".butie").hide();
    $(".fakuan").hide();
}
function Hide5()
{
    $(".rigong").hide();
    $(".baogong").hide();
    $(".jiezhi").hide();
    $(".jiangjin").hide();
    $(".butie").show();
    $(".fakuan").hide();
}
function Hide6()
{
    $(".rigong").hide();
    $(".baogong").hide();
    $(".jiezhi").hide();
    $(".jiangjin").hide();
    $(".butie").hide();
    $(".fakuan").show();
}
</script>


























{include file="./common/footer.php"}