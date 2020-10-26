<?php


 $now_timestamp = strtotime(date('H:i:s'));
 $old=strtotime('22:00:20' );
 $diff_timestamp = $now_timestamp - $old;
 $x=$now_timestamp;
echo '<p>'. $diff_timestamp. '</p>' ;
echo'<p>'.  $now_timestamp.'</p>' ;
echo '<p>'. $old .'</p>' ;
echo '<p>'. $x .'</p>' ;
 
if($diff_timestamp < 60){
    echo 'few seconds ago';
    }
    else if($diff_timestamp>=60 && $diff_timestamp<3600){
     echo round($diff_timestamp/60).' mins ago';
    }
    else if($diff_timestamp>=3600 && $diff_timestamp<86400){
     echo round($diff_timestamp/3600).' hours ago';
    }
    else if($diff_timestamp>=86400 && $diff_timestamp<(86400*30)){
     echo round($diff_timestamp/(86400)).' days ago';
    }
    else if($diff_timestamp>=(86400*30) && $diff_timestamp<(86400*365)){
     echo round($diff_timestamp/(86400*30)).' months ago';
    }
    else{
    echo round($diff_timestamp/(86400*365)).' years ago';
    }

   
 ?>