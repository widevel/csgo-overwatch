<?php


$demo_files_last_modified = time() - filemtime($config->files_json);
if($demo_files_last_modified > (int) $config->update_interval) {
	$conn_id = ftp_connect($config->ftp_host, 221, 5) or die("Unable to connect to ftp server"); 

	if (!ftp_login($conn_id, $config->ftp_user, $config->ftp_pass)) {
		die("Unable to connect to ftp server");
	}
	ftp_pasv($conn_id, true); //Trebuia sa pun asta
	$chdir = ftp_chdir($conn_id, $config->ftp_dir);
	
//	$contents = ftp_nlist($conn_id, "-rt .");
$contents_raw = ftp_rawlist($conn_id, ".");

$contents = array();
foreach($contents_raw as $r) {
    $vinfo = preg_split("/[\s]+/", $r, 9);
	$contents[] = $vinfo[8];
}
//print_r($contents); die();
	$files = array();
	foreach($contents as $content) {
		$file = basename($content);
		$ext = pathinfo($file, PATHINFO_EXTENSION);
		if($ext == $config->dem_extension) {
			$file_without_extension = pathinfo($file)['filename'];
			$split = explode('-', $file_without_extension);
			
			$date_n = $split[1];
			$time_n = $split[2];
                        $map = $split[3];

                        $date = substr($date_n,0,4) . '-' . substr($date_n,4,2) . '-' . substr($date_n,6,2);
                        $time = substr($time_n,0,2) . ':' . substr($time_n,2,2) . ':' . substr($time_n,4,2);
                        $fulldate = date("Y-m-d H:i:s", strtotime($date . " " . $time));

                        $date = date("Y-m-d", strtotime($fulldate));
                        $date = date("Y-m-d", strtotime($fulldate));

                        
                        $files[strtotime($fulldate)] = (object) array('file' => $file, 'map' => $map, 'date' => $fulldate);
		}
	}
	krsort($files);
	

	file_put_contents($config->files_json, json_encode($files));
	ftp_close($conn_id);

} else {
	$files_str = file_get_contents($config->files_json);
	$files = (array) json_decode($files_str);
}
$files = array_slice($files,0,501);
?>
