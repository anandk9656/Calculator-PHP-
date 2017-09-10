/* global Event, a */ 
function keyboard(e) 
{
      var evt = (e) ? e : window.event;
      var key = (evt.keyCode) ? evt.keyCode : evt.which;

      if(key !== null) 
      {
        key = parseInt(key, 10);
        
        if((key < 48 || key > 57) && (key < 96 || key > 105)) 
        {
          if(!is_any_Char(key))
            return false;
        }
        else 
        {
          if(evt.shiftKey)
            return true;
        }
      }
      return true;      
}

function is_any_Char(val)
{
 if((val === 8) || (val === 9) || (val === 13) || (val === 45)  || (val === 46) || (val === 107) || (val === 109) || (val === 106) || (val === 111) || (val === 110) || (val === 187) || (val === 189))
     return true;     
    
    if((val > 16 && val < 21) || (val > 34 && val < 41))
      return true;
    
      return false; 
}

function getParameterByName(name, url) 
{
    if (!url) 
    {
      url = window.location.href;
    }
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

//document.addEventListener("mousedown",function ()
//{
//    alert("mouse is clicked");
//});
//
//document.addEventListener("keydown",function()
//{
//    alert("key is pressed");
//});

//window.onload = function()
//{
//    if(getParameterByName("input"))
//      {
//          var a = getParameterByName("input");
//          document.getElementById("display").value = eval(a);
//      }
//};

function c()
{
   window.captureEvents(Event.keydown);
   window.onkeydown = document.getElementById("display").focus();
}