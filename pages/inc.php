<?php
// var_dump($_POST);
session_start();
if(!isset($_SESSION["under16"]))$_SESSION["under16"]="";
if(isset($_POST["page"])){
	$posted_page = $_POST["page"];
}else{
	$posted_page=0;
}
if ($posted_page==2){
	$answer=explode(",",$_POST["answer"]);
	if($answer[0]<206){
		$_SESSION["under16"]="under";
	}else{
		$_SESSION["under16"]="over";
	}
}

if(isset($_POST["answer"])){
	if($_SESSION["under16"]=="under"){
		$posted_answer="under 16";
	}else{
		$posted_answer= $_POST["answer"];
	}
}else{
	$posted_answer="0";
}

if ($posted_page==1){
	$posted_answer= $_POST["answer"];
}
#var_dump ($_SESSION);
date_default_timezone_set('Europe/London');
$file = "../answers/answers-".date('Y-m-d-H').".txt";
$date=date('Y-m-d H:i:s');
$text=$date.','.$posted_page.',"'.$posted_answer.'"'."\n";
file_put_contents($file, $text, FILE_APPEND | LOCK_EX);

?>
