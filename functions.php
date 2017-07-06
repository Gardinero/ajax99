<?php

add_action( 'wp_enqueue_scripts', 'ajax99_enqueue_scripts' );
function ajax99_enqueue_scripts() {

	$vars = "value";

	wp_register_script( "ajax99js", plugin_dir_url( __FILE__ ) . "/js/ajax99js.js" );
	wp_enqueue_script( "ajax99js" );
	wp_localize_script( "ajax99js", "php_vars", $vars );
	wp_enqueue_script( "jquery" );

	add_action('wp_ajax_nopriv_ajaxConversion', 'ajaxConversion');
	add_action('wp_ajax_ajaxConversion', 'ajaxConversion');
}



  if ( ! function_exists ( 'ajax99_settings_menu' ) ) {
  	function ajax99_settings_menu() {
 		add_options_page(
 			'AJAX99 Demo',
 			'AJAX99 Demo',
 			'manage_options',
 			'ajax99_ajaxdemo',
 			'ajax99_ajaxdemo_page'
 		);

 	}}


if ( ! function_exists ( 'ajax99_ajaxdemo_page' ) ) {
	function ajax99_ajaxdemo_page() {

		add_shortcode('ajax_transfer_form', 'ajax99_ajaxdemo_page');

		global $wpdb;

		$ajax99_prefix = "{$wpdb->prefix}ajax99";


		function ajaxConversion(){

				$amount = mysql_real_escape_string($_POST['amount']);
				$result = getPosts();
				echo $amount;
				echo json_encode($result, true);

				die();
};






		?>

		<form id="ajax_form" action="#" method="post">
			<input type="button" name="button1" class="next" data-id="1" value="First Button" />

		</form>


		<?php

		$handle = 'ajax99js';
		$list = 'enqueued';
 if (wp_script_is( $handle, $list )) {
	 echo("Ja, ist geladen.");
	 return;
 } else {
	//  echo("Not loaded yet!");
	 wp_register_script( 'ajax99js', plugin_dir_url(__FILE__).'js/ajax99js.js');
	 wp_enqueue_script( 'ajax99js' );

 }


		// $pdu = plugin_dir_url( __FILE__ );
		// echo $pdu;

}}

if ( ! function_exists( 'ajax99_enable_function' ) ) {
	function ajax99_enable_function() {

	global $wpdb;

}}
//on plugin deactivation

if ( ! function_exists ( 'ajax99_disable_function' ) ) {
	function ajax99_disable_function() {
	//code
	}
}

/* End of AJAX Demo page */

?>
