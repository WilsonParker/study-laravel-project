<?php
 	$sFileInfo = '';
	$headers = array();
	 
	foreach($_SERVER as $k => $v) {
		if(substr($k, 0, 9) == "HTTP_FILE") {
			$k = substr(strtolower($k), 5);
			$headers[$k] = $v;
		} 
	}
	
	$test = explode(".", rawurldecode($headers['file_name']));
	$name = str_replace("\0", "", time().'-'.rand(0,100).'.'.$test[1]);

	$file = new stdClass;
	//$file->name = str_replace("\0", "", rawurldecode($headers['file_name']));
	$file->name = str_replace("\0", "", rawurldecode($name));
	$file->size = $headers['file_size'];
	$file->content = file_get_contents("php://input");
	
	$filename_ext = strtolower(array_pop(explode('.',$file->name)));
	$allow_file = array("jpg", "png", "bmp", "gif"); 
	
	if(!in_array($filename_ext, $allow_file)) {
		echo "NOTALLOW_".$file->name;
	} else {
		$ymd = date("Ymd");
		$uploadDir = "/home/estudy/html/data/upload/{$ymd}/";
		if(!is_dir($uploadDir)){
			mkdir($uploadDir, 0777);
		}

		//$newPath = $uploadDir.iconv("utf-8", "cp949", $file->name);
		$newPath = $uploadDir.urlencode($file->name);
		
		if(file_put_contents($newPath, $file->content)) {
			$sFileInfo .= "&bNewLine=true";
			$sFileInfo .= "&sFileName=".$file->name;
			$sFileInfo .= "&sFileURL=/data/upload/$ymd/".$file->name;
		}
		
		echo $sFileInfo;
	}

?>