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

<div class="padder">

<?php 
switch(bp_current_action()) :

	// Home/My Friends
	case 'my-friends' :

		do_action('bp_before_member_friends_content'); ?>

		<div class="members friends"><?php bp_get_template_part('members/friends-loop') ?></div><!-- .members.friends -->

		<?php do_action('bp_after_member_friends_content');

	break;

	case 'requests' :

		bp_get_template_part('members/single/friends/requests');

	break;

	// Any other
	default :

		bp_get_template_part('members/single/plugins');

	break;

endswitch;
?>

</div><!-- PADDER -->