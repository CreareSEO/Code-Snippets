<?php
 $now = strtotime("now");
  
    $day = date('D');
if ($day == 'Sat' || $day == 'Sun') {
$deadline = strtotime("Monday 14:00");
}
else
{
  
  $deadline = strtotime("today 14:00");
  
}
  
  if ($deadline < $now) { $deadline = strtotime("tomorrow 14:00"); }
  
  $seconds = abs($deadline-$now);
  
  
  $hours = floor($seconds / 3600);
  
$mins = floor(($seconds - ($hours*3600)) / 60);
 $secs = floor(($seconds - ($hours*3600) - ($mins*60) ));
  
  if ($day != 'Sat' && $day != 'Sun') {
  
  echo "Order in the next <strong><a href='".Mage::getURL('')."shipping'>".$hours. " hours ".$mins." minutes</a></strong> for same day despatch (Mon-Fri only)";
  
  }

  ?>
