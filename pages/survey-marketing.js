$("#survey").fadeIn(1000)
// $( "#lightbox" ).append("<img width='128px' id='submit-gif' src='"+imageRoot+"keys/submit.gif'>");
// $("#submit-gif").css("margin-left","1130px");
// $("#submit-gif").css("margin-top","600px");

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


  $('#submit-gif').one( "touchstart mousedown", function(e){
    // Create the form object
    e.preventDefault();
    $("#submit-gif").attr("src",imageRoot+"keys/submit.png");

    $('.inner input:checked').each(function() {
        lis.push($(this).attr('name'));
    });
    lis.push($("#textbox").val())
    ans=lis.toString()
    console.log("submit")
    hiddenField.setAttribute("value", ans);
    hiddenField2.setAttribute("value", pageNo);
    form.appendChild(hiddenField);
    form.appendChild(hiddenField2);
    document.body.appendChild(form); // inject the form object into the body section
    form.submit();
  });


  $("#skip").on( "touchstart mousedown", function(e){
    e.preventDefault();
    hiddenField.setAttribute("value", "skip");
    hiddenField2.setAttribute("value", pageNo);
    form.appendChild(hiddenField);
    form.appendChild(hiddenField2);
    document.body.appendChild(form); // inject the form object into the body section
    form.submit();
  });
