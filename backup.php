<?php

//set hostname
$hostname = "192.168.55.10";

//set API Key
$Key = "LUFRPT10VGJKTEV6a0R4L1JXd0ZmbmNvdUEwa25wMlU9d0N5d292d2FXNXBBeEFBUW5pV2xoZz09";

//set timezone
date_default_timezone_set('Europe/London');

//set filename
$FileName = "backup"."-".date('d-m-Y').".xml";

file_put_contents($FileName,file_get_contents("https://".$hostname."/esp/restapi.esp?type=config&action=show&key=@".$Key));

?>