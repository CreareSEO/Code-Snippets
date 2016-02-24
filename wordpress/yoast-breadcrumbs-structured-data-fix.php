<!--Please note that the first function is most likely already in the functions file-->
function mc_microdata_breadcrumb ($link_output) {
$link_output = preg_replace(array('#<span xmlns:v="http://rdf.data-vocabulary.org/\#">#','#<span typeof="v:Breadcrumb"><a href="(.*?)" .*?'.'>(.*?)</a></span>#','#<span typeof="v:Breadcrumb">(.*?)</span>#','# property=".*?"#','#</span>$#'), array('','<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="$1" itemprop="url"><span itemprop="title">$2</span></a></span>','<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">$1</span></span>','',''), $link_output);

return $link_output;
}
<!--End First Function-->

add_filter( 'wpseo_breadcrumb_single_link', 'link_to_last_crumb' , 10, 2 );
function link_to_last_crumb( $output, $crumb ){
            
            if ( is_array( $crumb ) && $crumb !== array() )
            {               
                    
                    if( strpos( $output, '<span xmlns:v="http://rdf.data-vocabulary.org/ typeof="v:Breadcrumb" class="breadcrumb_last"' ) !== false  || 
                        strpos( $output, '<strong class="breadcrumb_last"' ) !== false )
                    {
                        
                        $output = '<a property="v:title" rel="v:url" href="'. $crumb['url']. '" >';
                        $output.= $crumb['text'];
                        $output.= '</a>';
                    }
                
            }

            return $output;
            
 }
