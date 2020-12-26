<?php
function basic_christmas_tree($n){
  $s=$n-1;
  $e=$n-1;
  for($i=0;$i<$n;$i++){
    echo str_repeat(" ", $s); 
    echo str_repeat("*", 2*$i+1);
    echo PHP_EOL;
    $s--;
    $e++;
  }
  for($i=0;$i<($n/2);$i++){
    echo str_repeat(" ", $n-1);
    echo str_repeat("*", 1);
    echo PHP_EOL;
   }
}
basic_christmas_tree(10);

function nice_christmas_tree($n){
    $k=2;
    for($i=0;$i<$n;$i++){
        $s=$n;
        for($j=0;$j<$k;$j++){
           echo str_repeat(" ", $s);
           echo str_repeat("*", 2*$j+1);
           echo PHP_EOL;
           $s--;
       }
       $k++;
    }
    for($i=0;$i<$n;$i++){
        echo str_repeat(" ", $n);
        echo str_repeat("*", 1);
        echo PHP_EOL;
    }
}
nice_christmas_tree(4);
?>
