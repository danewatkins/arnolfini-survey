<?php include('inc.php'); ?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!-- redirect after 120 seconds--> <meta http-equiv="refresh" content="180;url=1.php" />  <title>Was the show important for the local area?</title>
  <meta name="description" content="Animated Clifton Suspension Bridges faces off to Tower Bridge">
  <meta name="author" content="Dane Watkins">
  <!-- <link href="https://fonts.googleapis.com/css?family=Walter+Turncoat" rel="stylesheet"> -->
<style>
  #survey{
    display: none;
  }
  body{
    /*cursor: none;*/
    overflow:hidden;
    background-color: #6699cc;

  }
  #screen{
    position: absolute;
    top:0px;
    left:0px;
    width:1280px;
    height:800px;
    background: red;
  }
</style>
<link rel="stylesheet" type="text/css" href="../images/survey.css">
<script src="../images/jquery.min.js"></script>

<!-- <script type="text/javascript" src="../images/survey.js"></script> -->
</head>
<body>
  <!-- <div id="screen"></div> -->
  <div id="lightbox"></div>
  <div id="bubble"></div>
  <div id="main">
    <div id="loader">
    <img id="loader1" src="../images/loader.gif" >
    <img id="preparing" src="../images/getting-ready.gif">
  </div>
  <div id="survey">
    <img  src="../images/6-local-impact-min.gif"  alt="Animated Clifton Suspension Bridges faces off to Tower Bridge"/>
  </div><!-- close #survey -->
<div id="skip" class="nav"><img  src="../images/skip.gif" width="50"></div>
</div><!-- close #main -->
</body>
<script type="text/javascript">
var imageRoot="../images/";
var locale="Arnolfini";
var pageNo=8;
var nextPage=9;

</script>
<script src="survey.js"></script>
</html>
