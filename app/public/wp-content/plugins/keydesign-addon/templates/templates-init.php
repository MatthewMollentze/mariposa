<?php

require_once dirname(__FILE__) . '/templates.php';

add_filter( 'vc_load_default_templates', 'keydesign_reset_templates' ); 
function keydesign_reset_templates( $data ) {
    return array();
}
function keydesign_add_templates() {
    $templates = getTemplatesFile();
    return array_map( 'vc_add_default_templates', $templates );
}
keydesign_add_templates();
?>
