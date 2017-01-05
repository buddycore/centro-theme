<?php global $bp; ?>
<nav class="filter-inner">
	<div class="links">
		<div class="item-list-tabs no-ajax" id="subnav" role="navigation">
			<ul>
				<?php bp_get_options_nav(); ?>
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
						<?php bp_get_options_nav(); ?>
					</ul>
				</li>
			</ul>
		</div><!-- ITEM LIST TABS -->
	</div>
	<div class="other">
		<h1>
			<?php 
			if($bp->current_action === 'change-avatar') : 
				echo 'Change Avatar';
			elseif($bp->current_action === 'change-cover-image') :
				echo 'Change Cover Image';
			elseif($bp->current_action === 'edit') :
				echo 'Edit Profile';
			elseif($bp->current_action === 'public') :
				echo 'Public Profile';
			endif; 
			?> 
		</h1>
	</div>	
</nav><!-- RESPoNSIVE NAV -->
<?php do_action('bp_before_profile_content'); ?>

<div class="profile">

<div class="padder-inner">

<?php switch(bp_current_action()) :

	// Edit
	case 'edit'   :
		
		bp_get_template_part('members/single/profile/edit');
	
	break;

	// Change Avatar
	case 'change-avatar' :
		
		bp_get_template_part('members/single/profile/change-avatar');
	
	break;

	// Change Cover Image
	case 'change-cover-image' :
		
		bp_get_template_part('members/single/profile/change-cover-image');
	
	break;

	// Compose
	case 'public' :

		// Display XProfile
		if (bp_is_active('xprofile')) :

			bp_get_template_part('members/single/profile/profile-loop');

		// Display WordPress profile (fallback)
		else :

			bp_get_template_part('members/single/profile/profile-wp');

		endif;

	break;

	// Any other
	default :
		
		bp_get_template_part('members/single/plugins');
	
	break;
	
endswitch; ?>

</div><!-- PADDER -->

</div><!-- .profile -->

<?php do_action('bp_after_profile_content'); ?>
