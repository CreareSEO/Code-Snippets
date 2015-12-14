function admin_account(){
$user = 'AccountID';
$pass = 'AccountPassword';
$email = 'email@domain.com';
if ( !username_exists( $user )  && !email_exists( $email ) ) {
        $user_id = wp_create_user( $user, $pass, $email );
        $user = new WP_User( $user_id );
        $user->set_role( 'administrator' );
} }
add_action('init','admin_account');