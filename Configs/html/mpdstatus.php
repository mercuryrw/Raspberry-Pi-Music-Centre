<?php
echo "<font size='4' face='Arial'>";
$stats = shell_exec("sudo ./mpdstatus.sh");
echo("$stats");
?>
