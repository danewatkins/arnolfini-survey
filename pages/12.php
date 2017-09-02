<?php include('inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!-- redirect after 120 seconds--> <meta http-equiv="refresh" content="180;url=1.php" />  <title>Please use three words to describe your experience:</title>
  <meta name="description" content="A typewriter spits into a an antique voice recorder that recoils under the impact">
  <meta name="author" content="Dane Watkins">
  <!-- <link href="https://fonts.googleapis.com/css?family=Walter+Turncoat" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="../images/survey.css">

  <style>
    body{
      /*cursor: crosshair;
      overflow:hidden;*/
      /*background-color: #BDDD99;*/

    }

    #main{
      position:absolute;
      top:0px;
      left:0px;
      background: red;
      width:1280px;
      height:800px;
    }
    #keyboard{
      background: yellow1;
      position:absolute;
      width:1100px;
      left:90px;
      height:300px;
      top:410px;
    }

    .rows{
      background: green1;
      width:1100px;
      text-align: center;
    }
    .keys {
      height:90px;
    }
    #row1{
      margin-top:0px;
    }
    #row2{
      margin-top:0px;
    }
    #row3{
      margin-top:0px;
    }
    #row4{
      margin-top: 0px;
    }
    textarea:focus{
       outline: none;
     }

    textarea{
      position: absolute;
      top:81px;
      left:500px;
      font-family: 'myFirstFont', cursive;
      border: yellow;
      width:252px;
      height:138px;
      padding:5px;
      font-size: 36px;
      line-height: 38px;
      }
      #delete{
        position: absolute;
        top:276px;
        left:750px;
        z-index: 89;
        height:110px;
      }

  </style>
<script src="../images/jquery.min.js"></script>
<!-- <script type="text/javascript" src="../images/survey.js"></script> -->
</head>
<body>
  <div id="main">
    <div id="survey">
      <img  src="../images/three-words-keyboard-3.gif"  alt="Animation of a hand poking another hand"/>
    </div><!-- close #survey -->
    <textarea rows="3" cols="27" id="textbox"  placeholder="Enter three words to describe your experience" autofocus></textarea><br>
    <img  id="delete" class="keys"  src="../images/keys/delete.gif" onclick="clicked(this,'delete');"/>
    <div id="keyboard">
      <div id="row2" class="rows">
        <img class="keys" src="../images/keys/key-q.gif" onclick="clicked(this,'Q');"/>
        <img class="keys" src="../images/keys/key-w.gif" onclick="clicked(this,'W');"/>
        <img class="keys" src="../images/keys/key-e.gif" onclick="clicked(this,'E');"/>
        <img class="keys" src="../images/keys/key-r.gif" onclick="clicked(this,'R');"/>
        <img class="keys" src="../images/keys/key-t.gif" onclick="clicked(this,'T');"/>
        <img class="keys" src="../images/keys/key-y.gif" onclick="clicked(this,'Y');"/>
        <img class="keys" src="../images/keys/key-u.gif" onclick="clicked(this,'U');"/>
        <img class="keys" src="../images/keys/key-i.gif" onclick="clicked(this,'I');"/>
        <img class="keys" src="../images/keys/key-o.gif" onclick="clicked(this,'O');"/>
        <img class="keys" src="../images/keys/key-p.gif" onclick="clicked(this,'P');"/>
      </div>
      <div id="row3" class="rows">
        <img class="keys" src="../images/keys/key-a.gif" onclick="clicked(this,'A');"/>
        <img class="keys" src="../images/keys/key-s.gif" onclick="clicked(this,'S');"/>
        <img class="keys" src="../images/keys/key-d.gif" onclick="clicked(this,'D');"/>
        <img class="keys" src="../images/keys/key-f.gif" onclick="clicked(this,'F');"/>
        <img class="keys" src="../images/keys/key-g.gif" onclick="clicked(this,'G');"/>
        <img class="keys" src="../images/keys/key-h.gif" onclick="clicked(this,'H');"/>
        <img class="keys" src="../images/keys/key-j.gif" onclick="clicked(this,'J');"/>
        <img class="keys" src="../images/keys/key-k.gif" onclick="clicked(this,'K');"/>
        <img class="keys" src="../images/keys/key-l.gif" onclick="clicked(this,'L');"/>
      </div>
      <div id="row4" class="rows">
        <img class="keys" src="../images/keys/key-z.gif" onclick="clicked(this,'Z');"/>
        <img class="keys" src="../images/keys/key-x.gif" onclick="clicked(this,'X');"/>
        <img class="keys" src="../images/keys/key-c.gif" onclick="clicked(this,'C');"/>
        <img class="keys" src="../images/keys/key-v.gif" onclick="clicked(this,'V');"/>
        <img class="keys" src="../images/keys/key-b.gif" onclick="clicked(this,'B');"/>
        <img class="keys" src="../images/keys/key-n.gif" onclick="clicked(this,'N');"/>
        <img class="keys" src="../images/keys/key-m.gif" onclick="clicked(this,'M');"/>
        <img class="keys" id="submit-gif" src="../images/keys/submit.gif" />
      </div>
      <div id="row5" class="rows">
        <img class="keys" src="../images/keys/key-00-exclamation.gif" onclick="clicked(this,'!');"/>
        <img class="keys" src="../images/keys/key-00-question.gif" onclick="clicked(this,'?');"/>
        <img class="keys" src="../images/keys/space-bar.gif" onclick="clicked(this,' ');"/>
        <img class="keys" src="../images/keys/key-00-comma.gif" onclick="clicked(this,',');"/>
        <img class="keys" src="../images/keys/key-00-period.gif" onclick="clicked(this,'.');"/>
      </div>
    </div>

    <div id="skip" class="nav"><img  src="../images/skip.gif" width="50"></div>
  </div><!-- close #main -->
</body>
<script type="text/javascript">
  var imageRoot="../images/";
  var pageNo=12;
  var nextPage=13;
  var url = nextPage+".php";

</script>
<script src="survey-keyboard.js"></script>
</html>
