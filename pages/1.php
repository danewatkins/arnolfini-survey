<?php include('inc.php'); ?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <title>Animated audience evaluation survey by Dane Watkins</title>
  <meta name="description" content="Animation of a hand poking another hand">
  <meta name="author" content="Dane Watkins">
  <!-- <link href="https://fonts.googleapis.com/css?family=Walter+Turncoat" rel="stylesheet"> -->
<style>
  #survey{
    display: none;
  }
  body{
    overflow:hidden;
    /*background-color: #cc6633;*/

  }

</style>
<link rel="stylesheet" type="text/css" href="../images/survey.css">
<script src="../images/jquery.min.js"></script>
</head>
<body>
  <div id="lightbox"></div>
    <div id="bubble"></div>
    <div id="main" style="left:256px">
      <div id="loader">
      <img id="loader1" src="../images/loader.gif" >
      <img id="preparing" src="../images/getting-ready.gif">
    </div>

      <div id="survey">
      <img  src="../images/intro-v2.gif"  alt="Animation of a hand poking another hand"/>

</div><!-- close #survey -->

</div><!-- close #main -->
</body>
<script type="text/javascript">
  var imageRoot="../images/";
  var locale="Arnolfini";
  var pageNo=1;
  var nextPage=2;
  </script>
  <script src="survey.js"></script>
  </html>
