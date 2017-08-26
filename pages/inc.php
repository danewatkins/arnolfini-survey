<?php
// var_dump($_POST);
if(isset($_POST["page"])){
	$posted_page = $_POST["page"];
}else{
	$posted_page=0;
}

if(isset($_POST["answer"])){
	$posted_answer= $_POST["answer"];
}else{
	$posted_answer="0";
}
date_default_timezone_set('Europe/London');
$file = "../answers/answers-".date('Y-m-d-H').".txt";
$date=date('Y-m-d H:i:s');
$text=$date.','.$posted_page.',"'.$posted_answer.'"'."\n";
file_put_contents($file, $text, FILE_APPEND | LOCK_EX);

?>
