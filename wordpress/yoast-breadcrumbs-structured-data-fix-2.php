// remove RDFa markup from last breadcrumb link
add_filter( 'wpseo_breadcrumb_output', 'custom_wpseo_breadcrumb_output' );

function custom_wpseo_breadcrumb_output( $output ){
$from = '<span typeof="v:Breadcrumb"><span class="breadcrumb_last" property="v:title">'; 
$to = '<span><span class="breadcrumb_last">';
$output = str_replace( $from, $to, $output );
return $output;
}
