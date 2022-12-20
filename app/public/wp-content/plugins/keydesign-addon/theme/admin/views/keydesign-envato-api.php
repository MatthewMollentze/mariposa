<form action="" method="POST" >
	<input type="text" name="purchase-code" placeholder="Enter your purchase code">
	<input type="submit" value="Activate"/>
</form>
<?php
if(isset($_POST['purchase-code'])) {
	$product_code = sanitize_text_field($_POST['purchase-code']);

	update_option( 'envato_purchase_code_21514338', $product_code );
	$url = "http://api.leadengine-wp.com/activate/0e751835-4410-11e8-bf31-00163e6818fb?code=".$product_code;

  if(!extension_loaded('curl')){ ?>
		<span class='kdadmin-code-error'>
	    <?php echo "cURL module is disabled on your server. Please enable cURL."; exit; ?>
		</span>
	<?php }

	$curl = curl_init($url);
	$data ='';

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	    'Referer: '.get_site_url()
    ));

	$envatoRes = curl_exec($curl);
	curl_close($curl);
	$envatoRes = json_decode($envatoRes);

	if ( isset($envatoRes->activated) && ($envatoRes->activated == true)) {
	    update_option( 'keydesign-verify', 'yes' );?>
        <script>window.location.reload(true);</script>
    <?php
	} else if ( isset($envatoRes->activated) && ($envatoRes->activated == false)) {
		$data = "Your purchase code is not valid. Please provide a valid purchase code";
	    update_option( 'keydesign-verify', 'no' );
	} else {
		$data = "Error connecting to Envato API. Please try again later.";
	} ?>

	<span class='kdadmin-code-error'> <?php echo esc_html($data); ?> </span> <?php
}
?>