<div class="kdadmin-dashboard wrap">
	<div class="kdadmin-welcome-box postbox">
		<div class="inside">
			<h2><?php esc_html_e( 'Welcome to LeadEngine!', 'leadengine' ); ?></h2>
			<?php
      		  function keydesignDeactivate() {
			    update_option( 'keydesign-verify', 'no' );
			  }
			  if (isset($_GET['deactivate'])) {
			    keydesignDeactivate();
			  }

			if (get_option( 'keydesign-verify' ) == 'no' ) { ?>
			<div class="kdadmin-activate-column">
				<h3>LeadEngine theme is not activated! Please activate your copy and take full advantage of LeadEngine.</h3>
				<a href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-" target="_blank"><span class="dashicons dashicons-info"></span>How to find my purchase code?</a><br>
				<span class="dashicons dashicons-info" target="_blank"></span>You can use only one unique purchase code per single end product (for each domain). View more about license terms <a href="https://www.leadengine-wp.com/documentation/knowledge-base/licensing/" target="_blank">here</a>.
			<?php include('keydesign-envato-api.php');?>
			</div>
			<?php } else { ?>
			<div class="kdadmin-activate-column">
				<?php $purchase_code = get_option( 'envato_purchase_code_21514338', false ); ?>
				<h3 class="activated">LeadEngine theme is registered.</h3>
				<?php if ( $purchase_code != '' ) : ?><p class="activated-subtitle">Your purchase code is: <span><?php echo esc_html( $purchase_code ); ?></span></p><?php endif; ?>
				<a href="<?php echo admin_url( 'admin.php?page=leadengine-dashboard&deactivate=true'); ?>" class="deactivate-leadengine"><span class="dashicons dashicons-dismiss"></span>Deactivate</a>
			</div>
			<?php } ?>
			<div class="kdadmin-column-container">
				<div class="kdadmin-panel-column">
					<h3><span class="dashicons dashicons-download"></span><?php esc_html_e( 'One Click Install', 'leadengine' ); ?></h3>
					<p><?php esc_html_e( 'Quickly and easily import the theme demo contents. Note: The included plugins need to be installed and activated before you install a demo.', 'leadengine' ); ?></p>
					<a class="kdadmin-button" href="<?php echo esc_url( admin_url( 'admin.php?page=import-demos' ) ); ?>"><?php esc_html_e( 'Import Demos', 'leadengine' ); ?></a>
				</div>
				<div class="kdadmin-panel-column">
					<h3><span class="dashicons dashicons-admin-settings"></span><?php esc_html_e( 'Powerful Customization Options', 'leadengine' ); ?></h3>
					<p><?php esc_html_e( 'The powerful customization options & features give you flexibility to create the site you want.', 'leadengine' ); ?></p>
					<a class="kdadmin-button" href="<?php echo esc_url( admin_url( 'admin.php?page=theme-options' ) ); ?>"><?php esc_html_e( 'Theme Options', 'leadengine' ); ?></a>
				</div>
				<div class="kdadmin-panel-column">
					<h3><span class="dashicons dashicons-format-chat"></span><?php esc_html_e( 'Support Center', 'leadengine' ); ?></h3>
					<p><?php esc_html_e( 'LeadEngine comes with 6 months of free support for every license you purchase. Register and submit a ticket.', 'leadengine' ); ?></p>
					<a class="kdadmin-button" href="https://keydesign.ticksy.com/" target="_blank"><?php esc_html_e( 'Support Forums', 'leadengine' ); ?></a>
				</div>
			</div>
		</div>
	</div>

	<div class="kdadmin-support-wrapper">
		<div class="kdadmin-support-boxes">
			<!-- Getting started box -->
			<div class="kdadmin-dashboard-box postbox">
				<div class="inside">
					<h3><?php esc_html_e( 'Getting started', 'leadengine' ) ?></h3>
					<p><?php esc_html_e( 'If you\'ve just purchased the theme and you\'re wondering where to start check out the links below:', 'leadengine' ); ?></p>
					<ul>
						<li><a href="https://www.leadengine-wp.com/documentation/knowledge-base/import-demo-content/" target="_blank"><?php esc_html_e( 'How do I import the theme demos?', 'leadengine' ); ?></a></li>
						<li><a href="https://www.leadengine-wp.com/documentation/article-categories/theme-options/" target="_blank"><?php esc_html_e( 'How do I use the theme options?', 'leadengine' ); ?></a></li>
						<li><a href="https://www.leadengine-wp.com/documentation/knowledge-base/page-builder-general/" target="_blank"><?php esc_html_e( 'How do I use the page builder?', 'leadengine' ); ?></a></li>
						<li><a href="https://www.leadengine-wp.com/documentation/knowledge-base/template-blocks/" target="_blank"><?php esc_html_e( 'How do I use the block builder?', 'leadengine' ); ?></a></li>
					</ul>
				</div>
			</div>
			<!-- Documentation box -->
			<div class="kdadmin-dashboard-box postbox">
				<div class="inside">
					<h3><?php esc_html_e( 'Documentation', 'leadengine' ) ?></h3>
					<p><?php esc_html_e( 'Helpful information about theme setup, capabilities, features and options.', 'leadengine' ); ?></p>
					<a href="http://www.leadengine-wp.com/documentation" class="kdadmin-button kdadmin-second-button" target="_blank"><?php esc_html_e( 'Read the docs', 'leadengine' ); ?></a>
				</div>
			</div>
			<!-- Video tutorials box -->
			<div class="kdadmin-dashboard-box postbox">
				<div class="inside">
					<h3><?php esc_html_e( 'Video tutorials', 'leadengine' ) ?></h3>
					<p><?php esc_html_e( 'Learn how to use the theme with step by step video tutorials.', 'leadengine' ); ?></p>
					<a href="https://www.youtube.com/watch?v=FKA0roOqePc&list=PLKM37Brx2eGAWZI2-d9MVgH5DKllC0D55" class="kdadmin-button kdadmin-second-button" target="_blank"><?php esc_html_e( 'Check videos', 'leadengine' ); ?></a>
				</div>
			</div>
		</div>
	</div>
</div>
