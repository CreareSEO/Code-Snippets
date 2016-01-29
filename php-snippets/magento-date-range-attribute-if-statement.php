<?php 
$today = date('Y-m-d H:i:s');
$start = $_product->getData('news_from_date');
$end = $_product->getData('news_to_date');

if($start <= $today && $today <= $end) {
    echo "Within Date Range";
    
}
?>