<?php
  $output = shell_exec('pkill -U www');
  echo "<pre>$output</pre>"
?>
