var txt;
$(".keys").on( "touchstart mousedown", function(e){
  var imgSrc=$(this).attr("src")
  imgSrc = imgSrc.substring(0, imgSrc.length - 3);
  $(this).attr("src",imgSrc+"png")

    });
  $(".keys").on( "touchend mouseup mouseleave mousemove", function(e){
    var imgSrc=$(this).attr("src")
    imgSrc = imgSrc.substring(0, imgSrc.length - 3);
    $(this).attr("src",imgSrc+"gif")

      });
  function clicked(val){
    console.log ($(this).attr("src"))

    txt = document.getElementById('textbox').value;
    if(val != 'delete'){
      txt = txt + '' + val;
    }else{
      txt = txt.substr(0,(txt.length)-1);
    }
  document.getElementById('textbox').value = txt;
  $('textarea').focus();
  }
  $('#submit-gif').one( "touchstart mousedown", function(e){
    var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", url);
    var hiddenField = document.createElement("input");
    var hiddenField2 = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "answer");
    hiddenField2.setAttribute("type", "hidden");
    hiddenField2.setAttribute("name", "page");
    hiddenField.setAttribute("value", txt);
    hiddenField2.setAttribute("value", pageNo);
    form.appendChild(hiddenField);
    form.appendChild(hiddenField2);
    document.body.appendChild(form); // inject the form object into the body section
    form.submit();
    });