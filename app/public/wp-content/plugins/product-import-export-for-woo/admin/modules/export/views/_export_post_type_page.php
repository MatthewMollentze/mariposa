<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<div class="wt_iew_export_main">
	<p><?php echo $step_info['description']; ?></p>
	<div class="wt_iew_warn wt_iew_post_type_wrn" style="display:none;">
		<?php _e('Please select a post type');?>
	</div>
	<table class="form-table wt-iew-form-table">
		<tr>
			<th><label><?php _e('Select a post type to export'); ?></label></th>
			<td>
				<select name="wt_iew_export_post_type">
					<option value="">-- <?php _e('Select post type'); ?> --</option>
					<?php
					foreach($post_types as $key=>$value)
					{
						?>
						<option value="<?php echo $key;?>" <?php echo ($item_type==$key ? 'selected' : '');?>><?php echo $value;?></option>
						<?php
					}
					?>
				</select>
			</td>
			<td></td>
		</tr>
	</table>
	<br/>
	<?php 
	$wt_iew_post_types = array(
		'order' => array(
			'message' => __('The <b>Order Export & Order Import for WooCommerce Add-On</b> is required to export WooCommerce Orders.'),
			'link' => admin_url('plugin-install.php?tab=plugin-information&plugin=order-import-export-for-woocommerce')
		),
		'coupon' => array(
			'message' => __('The <b>Order Export & Order Import for WooCommerce Add-On</b> is required to export WooCommerce Coupons.'),
			'link' => admin_url('plugin-install.php?tab=plugin-information&plugin=order-import-export-for-woocommerce')
		),		
		'user' => array(
			'message' => __('The <b>Import Export WordPress Users and WooCommerce Customers Add-On</b> is required to export users/customers.'),
			'link' => admin_url('plugin-install.php?tab=plugin-information&plugin=users-customers-import-export-for-wp-woocommerce')
		)
	);
	foreach ($wt_iew_post_types as $wt_iew_post_type => $wt_iew_post_type_detail) { ?>
			
	<div class="wt_iew_free_addon wt_iew_free_addon_warn <?php echo 'wt_iew_type_'.$wt_iew_post_type; ?>" style="display:none">
		<p><?php echo $wt_iew_post_type_detail['message']; ?></p>
		<a target="_blank" href="<?php echo $wt_iew_post_type_detail['link']; ?>"><?php _e( 'Install now for free' ); ?></a>
	</div>
	
	<?php
	}
	?>
</div>