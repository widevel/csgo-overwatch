<?php
set_time_limit(0);
include('.' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'config.php');

$filename = basename($_GET['demo']);

$ext = pathinfo($filename, PATHINFO_EXTENSION);
if($ext != $config->dem_extension) die('error');

$conn_id = ftp_connect($config->ftp_host, 221) or die("Unable to connect to ftp server"); 

if (!ftp_login($conn_id, $config->ftp_user, $config->ftp_pass)) {
	die("Unable to connect to ftp server");
}
ftp_pasv($conn_id, true);

$filename = str_replace(array('\\', '/'), '', $filename);

header('Content-type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.$filename.'"');
$result = ftp_get($conn_id, "php://output", $config->ftp_dir . $filename, FTP_BINARY);
ftp_close($conn_id);
