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

if(pageNo==15||pageNo==16||pageNo==19||pageNo==22||pageNo==12){
  butt='#next'
}else{
  butt='#survey img'
}

  $(butt).one( "touchstart mousedown", function(e){
    var out = {x:0, y:0};
    if(e.type == 'touchstart' || e.type == 'touchmove' || e.type == 'touchend' || e.type == 'touchcancel'){
      var touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
      out.x = touch.pageX;
      out.y = touch.pageY;
    } else if (e.type == 'mousedown' || e.type == 'mouseup' || e.type == 'mousemove' || e.type == 'mouseover'|| e.type=='mouseout' || e.type=='mouseenter' || e.type=='mouseleave') {
      out.x = e.pageX;
      out.y = e.pageY;
    }
    //
    //
    //
    var margin = 128;
    //
    //
    //
    $("#bubble").html("<img src='"+imageRoot+"splatt.gif'>");
    $("#bubble").css("left",""+(out.x+70)+"px");
    $("#bubble").css("top",out.y-60+"px");
    $("#lightbox").fadeIn()
    if(pageNo==12||pageNo==19||pageNo==22){
      ans=$("#textbox").val()
    }else if((pageNo==15||pageNo==16)){
      // console.log("refresh")
      $('.inner input:checked').each(function() {
          lis.push($(this).attr('name'));
      });
      lis.push($("#textbox").val())
      ans=lis.toString()
    }
    else{
      ans=(out.x-margin)+","+out.y
    }
    // Create the form object
    setTimeout(function() {
      hiddenField.setAttribute("value", ans);
      hiddenField2.setAttribute("value", pageNo);
      form.appendChild(hiddenField);
      form.appendChild(hiddenField2);
      document.body.appendChild(form); // inject the form object into the body section
      form.submit();
    }, 80);

  });


  $("#skip").one( "touchstart mousedown", function(e){
    hiddenField.setAttribute("value", "skip");
    hiddenField2.setAttribute("value", pageNo);
    form.appendChild(hiddenField);
    form.appendChild(hiddenField2);
    document.body.appendChild(form); // inject the form object into the body section
    form.submit();
  });
