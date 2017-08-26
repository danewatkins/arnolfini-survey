<?php include('inc.php'); ?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!-- redirect after 120 seconds--> <meta http-equiv="refresh" content="180;url=1.php" />  <title>Please tell us about how you heard about the exhibition</title>
  <meta name="description" content="Animated icons for social media platforms">
  <meta name="author" content="Dane Watkins">
  <!-- <link href="https://fonts.googleapis.com/css?family=Walter+Turncoat" rel="stylesheet"> -->
<style>
  #words{
    position:absolute;
    top:646px;
    left:10px;
  }
  textarea{
      border: yellow;
      width:490px;
      padding:5px;
      font-size: 20px;
  }
  #next{
    opacity:0;
    background: red;
    width:240px;
    height:120px;
    position:absolute;
    top:630px;
    left:775px;
    cursor:pointer;
  }
  #grid{
    position: absolute;
    top:95px;
    left:22px;
    width:988px;
    height:528px;
    /*background: green;*/
    /*opacity: 0.5;*/
  }
  .inner{
    background-color:blue;
   /* background: url(../images/tick.png)transparent center no-repeat;*/
    background-size: 50px;
    width:247px;
    height:176px;
    display: inline-block;
    padding:0px;
    margin-top: -7px;
    margin-left:-4px;

    opacity:0;
    cursor:pointer;
  }
  .inner img{
    display:none;
  }

</style>

<style>
  #survey{
    display: none;
  }
  body{
    /*cursor: none;*/
    overflow:hidden;
    background-color: #99ccff;

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
      <img  src="../images/12-hear.gif"  alt="Animated icons for social media platforms"/>
<div id="grid">
  <div id="walk" class="inner"></div>
  <div id="print" class="inner"></div>
  <div id="poster" class="inner"></div>
  <div id="mouth" class="inner"></div>

  <div id="inside" class="inner"></div>
  <div id="website" class="inner"></div>
  <div id="email" class="inner"></div>
  <div id="listings" class="inner"></div>

  <div id="twitter" class="inner"></div>
  <div id="facebook" class="inner"></div>
  <div id="instagram" class="inner"></div>
  <div id="google" class="inner"></div>
</div>
<div id="next"></div>
<script type="text/javascript">
  $(".inner").on( "mousedown", function(e){
          lis=[];
          if($(this).css('opacity')==0){
            $(this).css('opacity','0.4')
          }else{
            $(this).css('opacity','0')
          }
          $('.inner').each(function() {
              if ($(this).css('opacity') == '0.4') {
                  lis.push($(this).attr('id'));
                  console.log(lis)
              }
          });
      });

</script>
</div><!-- close #survey -->
<div id="skip" class="nav"><img  src="../images/skip.gif" width="50"></div>
</div><!-- close #main -->
</body>
<script type="text/javascript">
var imageRoot="../images/";
var locale="Arnolfini";
var pageNo=15;
var nextPage=16;

</script>
<script src="survey.js"></script>
</html>
