<?php
foreach (glob('**/*.php') as $file){
  if (preg_match('/\\?'.'>\\s\\s+\\Z/m',file_get_contents($file)))
    echo("$file\n");
}
?>
