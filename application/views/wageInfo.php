{include file="./common/header.php"}
{include file="./common/top.php"}
{include file="./common/menu.php"}


<script language="javascript" type="text/javascript" src="{$datetime_path}WdatePicker.js"></script>
            <div class="tab-nav f-cf">
                <ul class="nav">
                    <li><a onclick="Hide1()" href="#" class="z-active">日工明细表</a></li>
                    <li><a onclick="Hide2()" href="#">包工明细表</a></li>
                    <li><a onclick="Hide3()" href="#">借支明细表</a></li>
                    <li><a onclick="Hide4()" href="#">工资汇总表（单月）</a></li>
                    <li><a onclick="Hide5()" href="#">工资汇总表（多月）</a></li>
                    <li><a onclick="Hide6()" href="#">工资统计表</a></li>
                </ul>
            </div>
<div class='rigongbiao'>
<div class="form-manage f-cf">
<form name="frame_form" method="post" action="{$controllers_path}/Wage/wageInfo/1" enctype="multipart/form-data">
           
                <div class="group f-cf">
                    <div class="item">
                     <div class="u-txt">时	间：</div>
                        <div class="u-input">
						   	
							<input  type="text" name='work_time' class="txt" onClick="WdatePicker()"> 
							
                        </div>
                </div>

               <div class="group f-cf">
                    <div class="item">
                        <div class="u-txt">职	位：</div>
                        <div class="u-select" style="width:272px;">
	                        <select name="title" class="value" style="width:272px;">   
								<option selected="selected" value="">请选择职位</option>
								{foreach from=$zhigong['s_type'] key= k item=v}
									<option  value="{$v['id']}">{$v['s_name']}</option>
								{/foreach}
							 </select>
                        </div>
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
						<input type="submit" value="搜索" name = "submit" class="u-button u-button-1">
                    </div>
                </div>

<!--  
<input class="Wdate" type="text" name='work_time' onClick="WdatePicker()"> 
	<div class="form-group">
		<label for="j_username" class="t">职位：</label> 
						<select name="title">   
							<option selected="selected" value="">请选择职位</option>  
							{foreach from=$zhigong['s_type'] key= k item=v}
								<option  value="{$v['id']}">{$v['s_name']}</option>  
							{/foreach}
						 </select>
	</div>
	
	
		<div class="form-group">
		<label for="j_username" class="t">项目：</label> 
						<select name="pro_id">   
							{foreach from=$pro_data key= k item=v}
								<option  value="{$v['pro_id']}">{$v['name']}</option>  
							{/foreach}
						 </select>
	</div>
	
		姓名：<input type="text" name="name"  value="">
		
			<input type="submit" value="搜索" name = "submit" class="btn btn_blue" style="margin-left:-1px;width:106px;height:38px;font-size:14px;margin-left:15px;padding:0;">
	-->	   
</form>


<br>



        <div class="f-cf">
            <div class="m-table-w">
            {if (isset($data)  && $id ==1)}
                <table class="m-table" width="100%" cellpadding="0" cellspacing="0" border="1" bordercolor="#b4b4b4">
                    <tr class="tr-caption">
                        <td colspan="34" class="caption">日工{$month}月份出勤明细表</td>
                    </tr>
                    
					<tr>
							<th class="f-bc1">姓名</th>
							{foreach from=$days key= k item=v}
								<th>{$v}</th>
							{/foreach}
							<th>合计</th>
						</tr>
						
						{foreach from=$data key= k item=val}
							{assign var="i" value="0"}   
							<tr>
								<td>{$k}</td>
								{foreach from=$days key= kk item=vv}
										{if (isset($val[$kk]))}
											<td class="f-tc">{$val[$kk]['money']}</td>
											{$i = $val[$kk]['money']+$i}   
										{else}
											<td>-</td>	
										{/if}
								{/foreach}	
								<td>{$i}</td>	
							</tr>
						
						{/foreach}
                    
                    
                    </table>
            {/if}
            </div>
        </div>         	
</div>
</div>
</div>
<div class='baogongbiao'>
<form name="frame_form" method="post" action="{$controllers_path}/Wage/wageInfo/2" enctype="multipart/form-data">
<div class="form-manage f-cf">
              <div class="group f-cf">
                    <div class="item">
                     <div class="u-txt">时	间：</div>
                        <div class="u-input">
						   	
							<input  type="text" name='work_time' class="txt" onClick="WdatePicker()"> 
							
                        </div>
                </div>

               <div class="group f-cf">
                    <div class="item">
                        <div class="u-txt">职	位：</div>
                        <div class="u-select" style="width:272px;">
	                        <select name="title" class="value" style="width:272px;">   
								<option selected="selected" value="">请选择职位</option>
								{foreach from=$zhigong['s_type'] key= k item=v}
									<option  value="{$v['id']}">{$v['s_name']}</option>
								{/foreach}
							 </select>
                        </div>
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
						<input type="submit" value="搜索" name = "submit" class="u-button u-button-1">
                    </div>
                </div>
</form>

        <div class="f-cf">
            <div class="m-table-w">
            {if (isset($data)  && $id ==2)}
                <table class="m-table" width="100%" cellpadding="0" cellspacing="0" border="1" bordercolor="#b4b4b4">
                    <tr class="tr-caption">
                        <td colspan="34" class="caption">包工{$month}月份出勤明细表</td>
                    </tr>
		<tr>
			<th class="f-bc1">姓名</th>
			{foreach from=$days key= k item=v}
				<th>{$v}</th>
			{/foreach}
			<th>合计</th>
			<th>金额</th>
		</tr>
		
				{foreach from=$data key= k item=val}
					{assign var="i" value="0"}
					{assign var="e" value="0"}   
					<tr>
						<td>{$k}</td>
						{foreach from=$days key= kk item=vv name=foo}
								{if (isset($val[$kk]))}
									<td colspan="
									{if (isset($val[$kk]['nbao_num']))}
										{if ($val[$kk]['nbao_num'] >= ($num-$kk))}
											{$num-$kk+1}
										{else}
											{$val[$kk]['nbao_num']}
										{/if}">
									{/if}
										{$val[$kk]['money']}
									</td>
									{$i = $val[$kk]['money']+$i}
									{if (isset($val[$kk]['bao_num']))}
										{$e = $val[$kk]['bao_num']+$e}
									{/if}
									{assign var="n" value=$smarty.foreach.foo.index + $val[$kk]['nbao_num']}
								{else}
									{if $smarty.foreach.foo.index < $n}
									
									{else}
										<td >-</td>
									{/if}
								{/if}
						{/foreach}	
						<td>{$e}天</td>
						<td>{$i}元</td>	
					</tr>
				
				{/foreach}
                    </table>
            {/if}
            </div>
        </div>   
</div>
</div>
</div>
<div class='jiezhibiao'>
		借支
</div>
<div class='danyuehuizong'>
<form name="frame_form" method="post" action="{$controllers_path}/Wage/wageTotalInfo/4" enctype="multipart/form-data">

<div class="form-manage f-cf">
              <div class="group f-cf">
                    <div class="item">
                     <div class="u-txt">时	间：</div>
                        <div class="u-input">
						   	
							<input  type="text" name='work_time' class="txt" onClick="WdatePicker()"> 
							
                        </div>
                </div>

               <div class="group f-cf">
                    <div class="item">
                        <div class="u-txt">职	位：</div>
                        <div class="u-select" style="width:272px;">
	                        <select name="title" class="value" style="width:272px;">   
								<option selected="selected" value="">请选择职位</option>
								{foreach from=$zhigong['s_type'] key= k item=v}
									<option  value="{$v['id']}">{$v['s_name']}</option>
								{/foreach}
							 </select>
                        </div>
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
						<input type="submit" value="搜索" name = "submit" class="u-button u-button-1">
                    </div>
                </div>
</form>


<br>
{if (isset($data) && $id== 4)}
	<table >
	      <div class="f-cf">
            <div class="m-table-w">
                <table class="m-table" width="100%" cellpadding="0" cellspacing="0" border="1" bordercolor="#b4b4b4">
                    <tr class="tr-caption">
                        <td colspan="13" class="caption">工程作业人员工资表</td>
                        <td rowspan="0" width="100"></td>
                    </tr>
                    <tr>
                        <th class="f-bc1">序号</th>
                        <th>姓名</th>
                        <th>月份</th>
                        <th colspan="2">日工</th>
                        <th>包工</th>
                     <!--   <th>奖金</th>
                        <th>补贴</th>
                        <th class="f-bc2">应发合计</th>
                        <th>借支</th>
                        <th>罚款</th>
                        <th class="f-bc3">扣款合计</th>
                        <th class="f-bc4">余额</th>-->
                    </tr>
		{assign var="x" value="1"}
		{foreach from=$data key= k item=v}
			{assign var="t" value="0"}
			{assign var="r" value="0"}
			{assign var="b" value="0"}
			<tr><td>{$x}</td>{$x = $x+1}
				<td >{$k}</td>
			{foreach from=$v key= kd item=vv name=er}
				
				
				<td >{$kd}</td>
				{foreach from=$vv key= kdd item=vvv}
					
					{if ($vvv['work_end_time'] != 0)}
						<td >{$vvv['sum_money']}</td>{$b = $b+$vvv['sum_money']}
					{else}	
						<td >{$vvv['sum_day']}</td>{$t = $t+$vvv['sum_day']}
						<td >{$vvv['sum_money']}</td>{$r = $r+$vvv['sum_money']}
					{/if}
					
					
				{/foreach}	
				
				</tr>
				{if (!$smarty.foreach.er.last)}
				<tr>
					<td></td>
					<td></td>
				{/if}
			{/foreach}
			<tr>
					<td></td>
					<td colspan="2">小计</td>	
					<td>{$t}</td>
					<td>{$r}</td>
					<td>{$b}</td>
			</tr>	
		{/foreach}

			
	
	</table>
	</div>
	
	
{/if}
</div>
</div>
</div>
<div class='duoyuehuizong'>
<form name="frame_form" method="post" action="{$controllers_path}/Wage/wageTotalInfo/5" enctype="multipart/form-data">
	
	<div class="form-manage f-cf">
               <div class="group f-cf">
                    <div class="item">
                        <div class="u-txt">职	位：</div>
                        <div class="u-select" style="width:272px;">
	                        <select name="title" class="value" style="width:272px;">   
								<option selected="selected" value="">请选择职位</option>
								{foreach from=$zhigong['s_type'] key= k item=v}
									<option  value="{$v['id']}">{$v['s_name']}</option>
								{/foreach}
							 </select>
                        </div>
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
						<input type="submit" value="搜索" name = "submit" class="u-button u-button-1">
                    </div>
                </div>
</form>


<br>
{if (isset($data) && $id == 5)}
	<table >
	      <div class="f-cf">
            <div class="m-table-w">
                <table class="m-table" width="100%" cellpadding="0" cellspacing="0" border="1" bordercolor="#b4b4b4">
                    <tr class="tr-caption">
                        <td colspan="5" class="caption">工程作业人员工资表</td>
                        <td rowspan="0" width="100"></td>
                    </tr>
                    <tr>
                        <th class="f-bc1">序号</th>
                        <th>姓名</th>
                        <th>月份</th>
                        <th colspan="2">日工</th>
                        <th>包工</th>
                     <!--   <th>奖金</th>
                        <th>补贴</th>
                        <th class="f-bc2">应发合计</th>
                        <th>借支</th>
                        <th>罚款</th>
                        <th class="f-bc3">扣款合计</th>
                        <th class="f-bc4">余额</th>-->
                    </tr>

		{assign var="x" value="1"}
		{foreach from=$data key= k item=v}
			{assign var="t" value="0"}
			{assign var="r" value="0"}
			{assign var="b" value="0"}
			<tr><td>{$x}</td>{$x = $x+1}
				<td >{$k}</td>
			{foreach from=$v key= kd item=vv name=er}
				
				
				<td >{$kd}</td>
				{foreach from=$vv key= kdd item=vvv}
					
					{if ($vvv['work_end_time'] != 0)}
						<td >{$vvv['sum_money']}</td>{$b = $b+$vvv['sum_money']}
					{else}	
						<td >{$vvv['sum_day']}</td>{$t = $t+$vvv['sum_day']}
						<td >{$vvv['sum_money']}</td>{$r = $r+$vvv['sum_money']}
					{/if}
					
					
				{/foreach}	
				
				</tr>
				{if (!$smarty.foreach.er.last)}
				<tr>
					<td></td>
					<td></td>
				{/if}
			{/foreach}
			<tr>
					<td></td>
					<td colspan="2">小计</td>	
					<td>{$t}</td>
					<td>{$r}</td>
					<td>{$b}</td>
			</tr>	
		{/foreach}

		</div>	
	
	</table>
{/if}
</div>


</div>
<div class='tongji'>
<form name="frame_form" method="post" action="{$controllers_path}/Wage/wageAllTotalInfo/6" enctype="multipart/form-data">
	
		<div class="form-manage f-cf">
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
						<input type="submit" value="搜索" name = "submit" class="u-button u-button-1">
                    </div>
                </div>
</form>


<br>
{if (isset($data) && $id == 6)}
	<table >
	
	      <div class="f-cf">
            <div class="m-table-w">
                <table class="m-table" width="100%" cellpadding="0" cellspacing="0" border="1" bordercolor="#b4b4b4">
                    <tr class="tr-caption">
                        <td colspan="15" class="caption">工程作业人员工资表</td>
                        <td rowspan="0" width="100"></td>
                    </tr>
                    <tr>
                        <th class="f-bc1">部门</th>
                        <th>月份</th>
                        <th>日工</th>
                        <th colspan="2">包工</th>
		<tr>
		{foreach from=$data key= k item=v}
			{assign var="t" value="0"}
			{assign var="r" value="0"}
			{assign var="b" value="0"}
			<tr>
				<td >{$k}</td>
			{foreach from=$v key= kd item=vv name=er}
				
				
				<td >{$kd}</td>
				{foreach from=$vv key= kdd item=vvv}
					
					{if ($vvv['work_end_time'] !== 0)}
						<td >{$vvv['sum_money']}</td>{$b = $b+$vvv['sum_money']}
					{else}	
						<td >{$vvv['sum_day']}</td>{$t = $t+$vvv['sum_day']}
						<td >{$vvv['sum_money']}</td>{$r = $r+$vvv['sum_money']}
					{/if}
					
					
				{/foreach}	
				
				</tr>
				{if (!$smarty.foreach.er.last)}
				<tr>
					<td></td>
				{/if}
			{/foreach}
			<tr>
					<td colspan="1">合计</td>	
					<td>{$t}</td>
					<td>{$r}</td>
					<td>{$b}</td>
			</tr>	
		{/foreach}

			
	
	</table>
{/if}
</div>
</div>
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
    $(".rigongbiao").show();
    $(".baogongbiao").hide();
    $(".jiezhibiao").hide();
    $(".danyuehuizong").hide();
    $(".duoyuehuizong").hide();
    $(".tongji").hide();
}
function Hide2()
{
    $(".rigongbiao").hide();
    $(".baogongbiao").show();
    $(".jiezhibiao").hide();
    $(".danyuehuizong").hide();
    $(".duoyuehuizong").hide();
    $(".tongji").hide();
}
function Hide3()
{
    $(".rigongbiao").hide();
    $(".baogongbiao").hide();
    $(".jiezhibiao").show();
    $(".danyuehuizong").hide();
    $(".duoyuehuizong").hide();
    $(".tongji").hide();
}
function Hide4()
{
    $(".rigongbiao").hide();
    $(".baogongbiao").hide();
    $(".jiezhibiao").hide();
    $(".danyuehuizong").show();
    $(".duoyuehuizong").hide();
    $(".tongji").hide();
}
function Hide5()
{
    $(".rigongbiao").hide();
    $(".baogongbiao").hide();
    $(".jiezhibiao").hide();
    $(".danyuehuizong").hide();
    $(".duoyuehuizong").show();
    $(".tongji").hide();
}
function Hide6()
{
    $(".rigongbiao").hide();
    $(".baogongbiao").hide();
    $(".jiezhibiao").hide();
    $(".danyuehuizong").hide();
    $(".duoyuehuizong").hide();
    $(".tongji").show();
}
</script>






















{include file="./common/footer.php"}