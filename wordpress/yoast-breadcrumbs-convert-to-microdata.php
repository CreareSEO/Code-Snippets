function convertBreadcrumbsToMicrodata($breadcrumbs) 
{
    // remove the XML namespace
    $breadcrumbs = str_replace(' xmlns:v="http://rdf.data-vocabulary.org/#"', '', $breadcrumbs);

    // convert each breadcrumb
    $breadcrumbs = preg_replace(
        '/<span typeof="v:Breadcrumb"><a href="([^"]+)" rel="v:url" property="v:title">([^<]+)<\\/a><\\/span>/',
        '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="$1" itemprop="url"><span itemprop="title">$2</span></a></span>',
        $breadcrumbs
    );

    $breadcrumbs = preg_replace(
        '/<span typeof="v:Breadcrumb"><span class="breadcrumb_last" property="v:title">([^<]+)<\\/span><\\/span>/',
        '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span class="breadcrumb_last" itemprop="title">$1</span></span>',
        $breadcrumbs
    );

    return $breadcrumbs;
}

add_filter('wpseo_breadcrumb_output', 'convertBreadcrumbsToMicrodata');