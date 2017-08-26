<?php include('inc.php'); ?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!-- redirect after 120 seconds--> <meta http-equiv="refresh" content="180;url=1.php" />  <title>Have you visited Arnolfini previously?</title>
  <meta name="description" content="Animation of Bush House the home to Arnolfini, Bristol, UK">
  <meta name="author" content="Dane Watkins">
  <!-- <link href="https://fonts.googleapis.com/css?family=Walter+Turncoat" rel="stylesheet"> -->
<style>
  #survey{
    display: none;
  }
  body{
    /*cursor: none;*/
    overflow:hidden;
    background-color: #333366;

  }

</style>
<link rel="stylesheet" type="text/css" href="../images/survey.css">
<script src="../images/jquery.min.js"></script>

<!-- <script type="text/javascript" src="../images/survey.js"></script> -->
</head>
<body>
  <div id="lightbox"></div>
    <div id="bubble"></div>
    <div id="main">
      <div id="loader">
      <img id="loader1" src="../images/loader.gif" >
      <img id="preparing" src="../images/getting-ready.gif">
    </div>

      <div id="survey">
      <img  src="../images/11-arnolfini.gif"  alt="Animation of Bush House the home to Arnolfini, Bristol, UK"/>

</div><!-- close #survey -->
<div id="skip" class="nav"><img  src="../images/skip.gif" width="50"></div>
</div><!-- close #main -->
</body>
<script type="text/javascript">
var imageRoot="../images/";
var locale="Arnolfini";
var pageNo=13;
var nextPage=14;

</script>
<script src="survey.js"></script>
</html>
