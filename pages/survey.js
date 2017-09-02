$("#survey").fadeIn(1000)
$( "#lightbox" ).append("<img width='128px' id='submit-gif' src='"+imageRoot+"keys/submit.gif'>");
$("#submit-gif").css("margin-left","1130px");
$("#submit-gif").css("margin-top","600px");

var lis = [];
var touchme=1
var method = method || "post"; // post (set to default) or get
var url = nextPage+".php";
var out = {x:0, y:0};
var margin = 128;
var form = document.createElement("form");
form.setAttribute("method", method);
form.setAttribute("action", url);
var hiddenField = document.createElement("input");
var hiddenField2 = document.createElement("input");
hiddenField.setAttribute("type", "hidden");
hiddenField.setAttribute("name", "answer");
hiddenField2.setAttribute("type", "hidden");
hiddenField2.setAttribute("name", "page");

var touchLeft = 200
var touchRight = 1070
var touchTop = 500
var touchBottom = 750
if (pageNo==17){
  var touchLeft = 877
  var touchRight = 1078
  var touchTop = 58
  var touchBottom = 286
}
if (pageNo==20){
  var touchLeft = 366
  var touchRight = 884
  var touchTop = 211
  var touchBottom = 678
}
if(pageNo==15||pageNo==16||pageNo==19||pageNo==22||pageNo==12){
  butt='#next'
}else{
  // butt='#survey img'
  butt='#lightbox'
}

  $(butt).on( "touchstart mousedown", function(e){
    // does it need a touchmove capture event?
    if(e.type == 'touchstart' || e.type == 'touchmove' || e.type == 'touchend' || e.type == 'touchcancel'){
      var touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
      out.x = touch.pageX;
      out.y = touch.pageY;
    } else if (e.type == 'mousedown' || e.type == 'mouseup' || e.type == 'mousemove' || e.type == 'mouseover'|| e.type=='mouseout' || e.type=='mouseenter' || e.type=='mouseleave') {
      out.x = e.pageX;
      out.y = e.pageY;
    }
    console.log(out.y)
    if(out.x > touchLeft && out.x < touchRight && out.y > touchTop && out.y < touchBottom){
      $("#bubble").html("<img width='65' src='"+imageRoot+"splatt2.gif'>");
      $("#bubble").css("left",""+(out.x-20)+"px");
      $("#bubble").css("top",out.y-110+"px");
      $("#lightbox").fadeTo( "slow", 1 );
      $("#submit-gif").css("z-index","99");
    }




  });
  $('#submit-gif').one( "touchstart mousedown", function(e){
    // Create the form object
    $("#bubble").hide()
    if(pageNo==12||pageNo==19||pageNo==22){
      ans=$("#textbox").val()
    }else if((pageNo==15||pageNo==16)){
      $('.inner input:checked').each(function() {
          lis.push($(this).attr('name'));
      });
      lis.push($("#textbox").val())
      ans=lis.toString()
    }
    else{
      ans=(out.x-margin)+","+out.y
    }
    console.log("submit")
    hiddenField.setAttribute("value", ans);
    hiddenField2.setAttribute("value", pageNo);
    form.appendChild(hiddenField);
    form.appendChild(hiddenField2);
    document.body.appendChild(form); // inject the form object into the body section
    form.submit();
  });


  $("#skip").on( "touchstart mousedown", function(e){
    console.log("skippping")
    hiddenField.setAttribute("value", "skip");
    hiddenField2.setAttribute("value", pageNo);
    form.appendChild(hiddenField);
    form.appendChild(hiddenField2);
    document.body.appendChild(form); // inject the form object into the body section
    form.submit();
  });
