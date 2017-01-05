<nav class="filter-inner">
	<div class="links">
		<div class="item-list-tabs no-ajax" id="subnav" role="navigation">
			<ul>
				<?php bp_get_options_nav(); ?>
			</ul>
		</div><!-- .item-list-tabs -->
	</div>
	<div class="other">
		<label for="blogs-order-by"><?php _e( 'Order By:', 'buddypress' ); ?></label>
        <select id="blogs-order-by">
            <option value="active"><?php _e( 'Last Active', 'buddypress' ); ?></option>
            <option value="newest"><?php _e( 'Newest', 'buddypress' ); ?></option>
            <option value="alphabetical"><?php _e( 'Alphabetical', 'buddypress' ); ?></option>

            <?php

            /**
             * Fires inside the members blogs order options select input.
             *
             * @since 1.2.0
             */
            do_action( 'bp_member_blog_order_options' ); ?>

        </select>
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
		<label for="blogs-order-by"><?php _e( 'Order By:', 'buddypress' ); ?></label>
        <select id="blogs-order-by">
            <option value="active"><?php _e( 'Last Active', 'buddypress' ); ?></option>
            <option value="newest"><?php _e( 'Newest', 'buddypress' ); ?></option>
            <option value="alphabetical"><?php _e( 'Alphabetical', 'buddypress' ); ?></option>

            <?php

            /**
             * Fires inside the members blogs order options select input.
             *
             * @since 1.2.0
             */
            do_action( 'bp_member_blog_order_options' ); ?>

        </select>
	</div>
</nav><!-- RESPoNSIVE NAV -->

<div class="padder">

	<?php do_action('template_notices'); ?>

    <div class="container">

    	<div id="buddypress">

		<?php
		switch ( bp_current_action() ) :

			// Home/My Blogs
			case 'my-sites' :

				/**
				 * Fires before the display of member blogs content.
				 *
				 * @since 1.2.0
				 */
				do_action( 'bp_before_member_blogs_content' ); ?>

				<div class="blogs myblogs">

					<?php bp_get_template_part( 'blogs/blogs-loop' ) ?>

				</div><!-- .blogs.myblogs -->

				<?php

				/**
				 * Fires after the display of member blogs content.
				 *
				 * @since 1.2.0
				 */
				do_action( 'bp_after_member_blogs_content' );
				break;

			// Any other
			default :
				bp_get_template_part( 'members/single/plugins' );
				break;
		endswitch;

		?>
		</div><!-- BUDDYPRESS -->

	</div><!-- CONTAINER -->

</div><!-- PADDER -->
