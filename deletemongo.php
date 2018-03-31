<?php 

$delete_command = escapeshellcmd('python deletemongo.py');
$delete = shell_exec($delete_command);

header("Location: admin.php");
?>