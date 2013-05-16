
<?php
// we connect to example.com and port 3307
$link = mysql_connect('external-db.s138565.gridserver.com', 'db138565_iktrstmy', 'P6VDU+m5l!qY');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);

?>

