add_filter ('wpseo_breadcrumb_output','mc_microdata_breadcrumb');
function mc_microdata_breadcrumb ($link_output) {
$link_output = preg_replace(array('#<span xmlns:v="http://rdf.data-vocabulary.org/\#">#','#<span typeof="v:Breadcrumb"><a href="(.*?)" .*?'.'>(.*?)</a></span>#','#<span typeof="v:Breadcrumb">(.*?)</span>#','# property=".*?"#','#</span>$#'), array('','<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="$1" itemprop="url"><span itemprop="title">$2</span></a></span>','<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="$3"><span itemprop="title">$1</span></a></span>','',''), $link_output);

return $link_output;
}
add_filter ('language_attributes','mc_language_attributes');
function mc_language_attributes ($output) {
$output .= ' ';
return $output;
}