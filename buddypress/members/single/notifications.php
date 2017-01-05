<nav class="filter-inner">
	<div class="links">
		<div class="item-list-tabs no-ajax" id="subnav" role="navigation">
			<ul>
				<?php bp_get_options_nav(); ?>
			</ul>
		</div><!-- .item-list-tabs -->
	</div>
	<div class="other">
		<div class="item-list-tabs filter">
			<ul>
				<li id="members-order-select" class="last filter"><?php bp_notifications_sort_order_form(); ?></li>
			</ul>
		</div>
	</div>
</nav><!-- NAVIGATION TABS -->

<nav class="filter-inner-responsive">
	<div class="links">
		<div class="item-list-tabs no-ajax" id="subnav" role="navigation">
			<ul>
				<li><button class="toggle-sub"><span>Toggle Menu</span></button>
					<ul class="sub-nav">
						<?php bp_get_options_nav(); ?>
					</ul>
				</li>
			</ul>
		</div><!-- ITEM LIST TABS -->
	</div>
	<div class="other">
		<div class="item-list-tabs filter" id="subnav" role="navigation">
			<ul>
				<li id="members-order-select" class="last filter"><?php bp_notifications_sort_order_form(); ?></li>
			</ul>
		</div><!-- ITEM LIST TABS -->	
	</div>
</nav><!-- RESPoNSIVE NAV -->

<div class="padder-inner">
<?php
switch(bp_current_action()) :

	case 'unread' :
		
		bp_get_template_part('members/single/notifications/unread');
	
	break;

	case 'read' :
		
		bp_get_template_part('members/single/notifications/read');
	
	break;

	// Any other actions.
	default :
		
		bp_get_template_part('members/single/plugins');

	break;
endswitch;
?>
</div><!-- PADDER -->