
<div class="page-content f-cf">
<div class="page-side f-cf">
        <ul class="side-menu">
      		{foreach from=$menu_list['m'] key= k item=value}
	            <li> <a href="javascript:void(0);"><i class="icon icon-user"></i>{$value['priv_name']}<i class="arrow"></i></a>
	            <ul class="side-menu-sub">
	            {foreach from=$menu_list['f'] key= kk item=vv}
				  {if ($value['id'] == $vv['p_id'])}
	                    <li>
	                    <a href="{$controllers_path}/{$vv['priv_value']}" 
	                    {if (isset($menu) && $menu ==$vv['priv_value'])} class="z-active"{/if}>{$vv['priv_name']}
	                    </a>
	                    </li>
	              {/if}
		       {/foreach}	
		       </ul>
	            </li>
            {/foreach}
        </ul>
    </div>     

<div class="page-main f-cf">