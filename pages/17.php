<?php include('inc.php'); ?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!-- redirect after 120 seconds--> <meta http-equiv="refresh" content="180;url=1.php" />  <title>The final questions are a little more personal but are really useful to us - by answering these questions you'll help us make sure we're serving everyone in our community. Your postcode cannot be used to identify you and will not be used for any marketing purposes.</title>
  <meta name="description" content="Vintage mutant mechanical calculator attacks candlestick telephone">
  <meta name="author" content="Dane Watkins">
  <!-- <link href="https://fonts.googleapis.com/css?family=Walter+Turncoat" rel="stylesheet"> -->
<style>
  #survey{
    display: none;
  }
  body{
    /*cursor: none;*/
    overflow:hidden;
    background-color: #999966;

  }
  #press-me{
    position: absolute;
    top:58px;
    left:747px;
    width:200px;
    height:300px;
    background: red;
    opacity: 0;
    cursor: pointer;
  }

</style>
<link rel="stylesheet" type="text/css" href="../images/survey.css">
<script src="../images/jquery.min.js"></script>

<!-- <script type="text/javascript" src="../images/survey.js"></script> -->
</head>
<body>

    <div id="main">
      <div id="loader">
      <img id="loader1" src="../images/loader.gif" >
      <img id="preparing" src="../images/getting-ready.gif">
    </div>

    <div id="survey">
      <img  src="../images/questions2.gif"  alt="Vintage mutant mechanical calculator attacks candlestick telephone"/>
    </div><!-- close #survey -->
    <div id="press-me"></div>

</div><!-- close #main -->
</body>
<script type="text/javascript">
var imageRoot="../images/";
var locale="Arnolfini";
var pageNo=17;
var nextPage=18;
$("#survey").fadeIn(1000)
$("#press-me").on( "touchstart mousedown", function(e){
  e.preventDefault();
  window.location.href = '18.php';

  });
</script>
<!-- <script src="survey.js"></script> -->
</html>
