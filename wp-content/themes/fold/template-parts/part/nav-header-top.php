<?php
if (has_nav_menu( 'primary' ) or is_customize_preview()){ ?>
<!--nav class="megamenu navbar navbar-default navbar-toggleable-md navbar-fixed-top navbar-inverse bg-inverse navbar-light"-->
<nav id="top-menu" class="megamenu navbar-fixed-top navbar-toggleable-md in-top container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#top-navbar-collapse" aria-expanded="false" aria-controls="top-menu">
			<span class="sr-only"><?php esc_html_e('Toggle navigation', 'fold'); ?></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php bloginfo('name'); ?>"><i class="fa fa-lg fa-home" aria-hidden="true"></i></a>
	</div>
	<div id="top-navbar-collapse" class="collapse navbar-collapse"><?php
		wp_nav_menu( array(
			'theme_location'		=> 'primary',
			'depth'					=> 3,
			'menu_class'			=> 'nav navbar-nav megamenu',
			'menu_id'				=> '',
			'container'				=> '',
			'container_class'	=> '',
			'container_id'			=> '',
			'fallback_cb'			=> 'WP_Bootstrap_Navwalker::fallback',
			'walker'					=> new WP_Bootstrap_Navwalker(),
			)
		); ?>
	</div>
</nav>
<?php
}
