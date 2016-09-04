<?php

$data = file("data.txt") or die ("Unable to open data.txt");

sort($data, SORT_NATURAL | SORT_NUMBERIC);

foreach($data as $items){
  echo $items;
}

?>
