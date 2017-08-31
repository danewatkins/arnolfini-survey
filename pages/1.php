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
    <div id="main">
      <div id="loader">
      <img id="loader1" src="../images/loader.gif" >
      <img id="preparing" src="../images/getting-ready.gif">
    </div>

      <div id="survey">
      <img  src="../images/intro.gif"  alt="Animation of a hand poking another hand"/>

</div><!-- close #survey -->

</div><!-- close #main -->
</body>
<script type="text/javascript">
  var imageRoot="../images/";
  var locale="Arnolfini";
  var pageNo=1;
  var nextPage=2;
  $("#survey").fadeIn(1000)

  var lis = [];



  var touchme=1
  var method = method || "post"; // post (set to default) or get
  var url = nextPage+".php";
  var form = document.createElement("form");
  form.setAttribute("method", method);
  form.setAttribute("action", url);
  var hiddenField = document.createElement("input");
  var hiddenField2 = document.createElement("input");
  hiddenField.setAttribute("type", "hidden");
  hiddenField.setAttribute("name", "answer");
  hiddenField2.setAttribute("type", "hidden");
  hiddenField2.setAttribute("name", "page");
  var margin = 128
  console.log( "width = "+$( document ).width())
  console.log("margin = "+margin)


  $('#survey img').on( "touchstart mousedown", function(e){
    var out = {x:0, y:0};
    if(e.type == 'touchstart' || e.type == 'touchmove' || e.type == 'touchend' || e.type == 'touchcancel'){
      var touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
      out.x = touch.pageX;
      out.y = touch.pageY;
    } else if (e.type == 'mousedown' || e.type == 'mouseup' || e.type == 'mousemove' || e.type == 'mouseover'|| e.type=='mouseout' || e.type=='mouseenter' || e.type=='mouseleave') {
      out.x = e.pageX;
      out.y = e.pageY;
    }
    var pressX=out.x-margin
    console.log("pressX = "+pressX+" y = "+out.y)
    console.log("out.x = "+out.x+" y = "+out.y)
    if(out.y<517 || out.y>610 || pressX < 200 ||pressX > 787){
      console.log ("MISSED!!")
    }else{
        ans=(out.x-margin)+","+out.y
        hiddenField.setAttribute("value", ans);
        hiddenField2.setAttribute("value", pageNo);
        form.appendChild(hiddenField);
        form.appendChild(hiddenField2);
        document.body.appendChild(form); // inject the form object into the body section
        form.submit();
    }
  });


</script>
</html>
