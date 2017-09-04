<?php include('inc.php'); ?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="refresh" content="180;url=1.php" />  <title>How old are you?</title>
  <meta name="description" content="The line of life from baby to bent and aging pensioner">
  <meta name="author" content="Dane Watkins">
  <!-- <link href="https://fonts.googleapis.com/css?family=Walter+Turncoat" rel="stylesheet"> -->
<style>
  #survey{
    display: none;
  }
  body{
    /*cursor: none;*/
    overflow:hidden;
    background-color: #5c879f;

  }

</style>
<link rel="stylesheet" type="text/css" href="../images/survey.css">
<script src="../images/jquery.min.js"></script>
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
      <img  src="../images/0-age.gif"  alt="The line of life from baby to bent and aging pensioner"/>
    </div><!-- close #survey -->
    <div id="skip" class="nav"><img  src="../images/skip.gif" width="50"></div>
  </div><!-- close #main -->
</body>
<script type="text/javascript">
  var imageRoot="../images/";
  var locale="Arnolfini";
  var pageNo=2;
  var nextPage=3;
</script>
<script src="survey.js"></script>
</html>
