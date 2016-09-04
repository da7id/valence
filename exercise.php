<?php

$data = file("data.txt");

sort($data, SORT_NATURAL | SORT_NUMBERIC);

foreach($data as $items){
  echo $items;
}

?>
