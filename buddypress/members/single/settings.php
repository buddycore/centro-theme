<nav class="filter-inner">
	<div class="links">
		<div class="item-list-tabs no-ajax" id="subnav" role="navigation">
			<ul>
				<?php if(bp_core_can_edit_settings()) : ?>
					<?php bp_get_options_nav(); ?>
				<?php endif; ?>
			</ul>
		</div><!-- .item-list-tabs -->
	</div>
</nav><!-- NAVIGATION TABS -->

<nav class="filter-inner-responsive">
	<div class="links">
		<div class="item-list-tabs no-ajax" id="subnav" role="navigation">
			<ul>
				<li><button class="toggle-sub"><span>Toggle Menu</span></button>
					<ul class="sub-nav">
						<?php if(bp_core_can_edit_settings()) : ?>
							<?php bp_get_options_nav(); ?>
						<?php endif; ?>
					</ul>
				</li>
			</ul>
		</div><!-- ITEM LIST TABS -->
	</div>
</nav><!-- RESPoNSIVE NAV -->
<div class="padder-inner">
<?php

switch(bp_current_action()) :
	case 'notifications' :
		
		bp_get_template_part('members/single/settings/notifications');
	
	break;
	case 'capabilities' :
		
		bp_get_template_part('members/single/settings/capabilities');
	
	break;
	case 'delete-account' :
		
		bp_get_template_part('members/single/settings/delete-account');
	
	break;
	case 'general' :
		
		bp_get_template_part('members/single/settings/general');
	
	break;
	case 'profile' :
		
		bp_get_template_part('members/single/settings/profile');
	
	break;
	default:
		
		bp_get_template_part('members/single/plugins');
	
	break;

endswitch;
?>
</div><!-- PADDER -->