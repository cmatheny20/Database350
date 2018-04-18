<?php

exec("python /var/www/html/backup.py");
header ("Location: dbManage.php");

?>