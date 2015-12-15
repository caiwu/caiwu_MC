$(document).ready(function(){
	//select下拉
	$('.u-select').each(function(){
		var value = $(this).find('.value');
		var val = value.find('.val');
		var list = $(this).find('.list');
		var listLi = list.find('li');
		listLi.each(function(){
			if($(this).text()==val.text()){
				$(this).addClass('z-active').siblings().removeClass('z-active');
			};
		});
		value.on('click',function(e){
			if(list.is(':hidden')){
				$('.u-select').find('.list').hide();
				list.show();
			}else{
				list.hide();
			};	
			e.stopPropagation();
		});
		listLi.on('click',function(){
			$(this).addClass('z-active').siblings().removeClass('z-active');
			val.text($(this).text());
			list.hide();
		});
		$(document).on('click',function(e){
			if($('.u-select').find('.list').is(':visible')){
				$('.u-select').find('.list').hide();
			};
			e.stopPropagation();
		});
	});
	
	//侧边菜单
	$('.side-menu').each(function(){
		$(this).find('li').find('.side-menu-sub').each(function(){
			if($(this).find('li a').hasClass('z-active')){
				$(this).show().parent('li').addClass('open');
			}
		});
		$(this).find('li a').click(function(){
			if($(this).next('.side-menu-sub').is(':hidden')){
				$(this).parent('li').siblings('li').removeClass('open').find('.side-menu-sub').hide();
				$(this).parent('li').addClass('open');
				$(this).next('.side-menu-sub').show();
			}else{
				$(this).parent('li').removeClass('open');
				$(this).next('.side-menu-sub').hide();
			}
		});
	});
});