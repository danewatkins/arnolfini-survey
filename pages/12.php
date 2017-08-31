<?php include('inc.php'); ?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!-- redirect after 120 seconds--> <meta http-equiv="refresh" content="180;url=1.php" />  <title>Please use three words to describe your experience:</title>
  <meta name="description" content="A typewriter spits into a an antique voice recorder that recoils under the impact">
  <meta name="author" content="Dane Watkins">
  <!-- <link href="https://fonts.googleapis.com/css?family=Walter+Turncoat" rel="stylesheet"> -->
  <style>
    #keyboard{
      position:absolute;
      top:200px;
      left:150px;
      background: red1;
      width:1080px;
      height:768px;
    }
    .rows{
      opacity:0;
      margin-top:4px;
    }
    .keys{
      background: blue;
      width:65px;
      height: 60px;
      display:inline-block;
      margin-left:4px;
    }
    #row1{
      margin-top:150px;
    }
    #row2{
      margin-top:219px;
    }
    #row3{
      margin-top:3px;
    }
    #row4{
      margin-top: 7px;
    }
    #words{
      position:absolute;
      top:190px;
      left:410px;
    }
    textarea{
      font-family: 'myFirstFont', cursive;
      border: yellow;
      width:200px;
      padding:5px;
      font-size: 20px;
      }
  </style>
  <script>
    function clicked(val){
      var txt;
      txt = document.getElementById('textbox').value;
      if(val != 'delete'){
        txt = txt + '' + val;
      }else{
        txt = txt.substr(0,(txt.length)-1);
      }
      document.getElementById('textbox').value = txt;
      $('textarea').focus();
      }

  </script>
<style>
  #survey{
    display: none;
  }
  body{
    cursor: crosshair;
    overflow:hidden;
    /*background-color: #BDDD99;*/

  }
  textarea:focus { outline: none; }

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
      <img  src="../images/three-words-keyboard-2.gif"  alt="A typewriter spits into a an antique voice recorder that recoils under the impact"/>
  <div id="words">
    <textarea rows="3" cols="27" id="textbox"  placeholder="Enter three words to describe your experience" autofocus></textarea><br>
  </div>
  <div id="keyboard">
  <div id="del" class="keys" style="Background;red;position:absolute;top:140px;left:430px;width:170px;opacity:0;" onclick="clicked('delete');"/></div>
  <div id="row2" class="rows">
    <div id="" class="keys" style="width:75px;height:68px;margin-top:14px;" onclick="clicked('q');"/></div>
    <div id="" class="keys" style=";" onclick="clicked('w');"/></div>
    <div id="" class="keys" style="margin-left:6px;width:71px;" onclick="clicked('e');"/></div>
    <div id="" class="keys" style=";" onclick="clicked('r');"/></div>
    <div id="" class="keys" style=";" onclick="clicked('t');"/></div>
    <div id="" class="keys" style="margin-left:2px;" onclick="clicked('y');"/></div>
    <div id="" class="keys" style=";" onclick="clicked('u');"/></div>
    <div id="" class="keys" style=";" onclick="clicked('i');"/></div>
    <div id="" class="keys" style="margin-bottom:2px;" onclick="clicked('o');"/></div>
    <div id="" class="keys" style="margin-bottom:4px;margin-left:5px;" onclick="clicked('p');"/></div>
  </div>
  <!-- <div id="" class="keys" style=";" onclick="clicked('[');"/></div>
  <div id="" class="keys" style=";" onclick="clicked(']');"/></div>
  <div id="" class="keys" style=";" onclick="clicked('\\');"/></div> -->
  <div id="row3" class="rows">
    <div id="" class="keys" style="margin-left:50px;" onclick="clicked('a');"/></div>
    <div id="" class="keys" style="margin-left:7px;" onclick="clicked('s');"/></div>
    <div id="" class="keys" style=";" onclick="clicked('d');"/></div>
    <div id="" class="keys" style=";" onclick="clicked('f');"/></div>
    <div id="" class="keys" style=";" onclick="clicked('g');"/></div>
    <div id="" class="keys" style="margin-left:10px;" onclick="clicked('h');"/></div>
    <div id="" class="keys" style=";" onclick="clicked('j');"/></div>
    <div id="" class="keys" style="margin-bottom:2px;" onclick="clicked('k');"/></div>
    <div id="" class="keys" style="margin-left:10px;margin-bottom:3px;" onclick="clicked('l');"/></div>
  </div>
  <div id="row4" class="rows">
    <div id="" class="keys" style="margin-left:85px;" onclick="clicked('z');"/></div>
    <div id="" class="keys" style="margin-left:8px;" onclick="clicked('x');"/></div>
    <div id="" class="keys" style="margin-left:8px;" onclick="clicked('c');"/></div>
    <div id="" class="keys" style=";" onclick="clicked('v');"/></div>
    <div id="" class="keys" style=";" onclick="clicked('b');"/></div>
    <div id="" class="keys" style=";" onclick="clicked('n');"/></div>
    <div id="" class="keys" style=";" onclick="clicked('m');"/></div>
    <div id="next" class="keys" style="width:150px;margin-left:10px;margin-bottom:3px;"/></div>
  </div>
  <div id="row5" class="rows">
    <div id="" class="keys" style="margin-left:225px;width:370px;height:78px;" onclick="clicked(' ');"/></div>
  </div>
</div>
</div><!-- close #survey -->
<div id="skip" class="nav"><img  src="../images/skip.gif" width="50"></div>
</div><!-- close #main -->
</body>
<script type="text/javascript">
var imageRoot="../images/";
var locale="Arnolfini";
var pageNo=12;
var nextPage=13;

</script>
<script src="survey.js"></script>
</html>
