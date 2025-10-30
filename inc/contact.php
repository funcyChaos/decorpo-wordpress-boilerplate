<?php
add_shortcode('contact_form', function(){
    ob_start();
	include locate_template('template-parts/contact-form.php');
    return ob_get_clean();
});

add_action('rest_api_init', function(){
	register_rest_route('contact-me/v1', '/submit', [
		[
			'methods'	=> 'POST',
			'callback'	=> function (WP_REST_Request $req){
				if(check_if_valid_recaptcha($req->get_param('g-recaptcha-response'))){
					$sanitized_data = [];
					foreach($req->get_json_params() as $key => $value){
						$sanitized_data[$key] = sanitize_textarea_field($value);
					}
					ob_start();
					include get_template_directory().'/template-parts/email-parts/contact-email.php';
					$content            = ob_get_clean();
					$admins             = get_users(['role'=>'administrator']);
					$email              = get_bloginfo('admin_email');
					$email_success[]    = wp_mail($email,'Contact form submission', $content, ['Content-Type: text/html; charset=UTF-8']);
					foreach($email_success as $key){
						if(!$key){
							wp_send_json('error');
						}else{
							return [
								'response'	=> 'POST successful',
							];
						}
					}
				}else{
					return ['response'=>'recaptcha invalid'];
				}
			},
			'permission_callback' => '__return_true',
		]
	]);
});

function check_if_valid_recaptcha($recaptcha){
	$recaptcha_response = json_decode(file_get_contents(
		"https://www.google.com/recaptcha/api/siteverify",
		false,
		stream_context_create([
			'http'	=> [
				'method'    => 'POST',
				'header'    => 'Content-type: application/x-www-form-urlencoded',
				'content'	=> http_build_query([
					'secret'	=> RECAPTCHA_KEY_SALT,
					'response'	=> $recaptcha,
					'remoteip'	=> $_SERVER['REMOTE_ADDR']
				]),
			]
		])
	), true);
	if ($recaptcha_response['success'])
		return true;
	else
		return false;
}