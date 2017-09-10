/* global responseText */
function load()
{
    if(window.XMLHttpRequest)
    {
        var tmp = new XMLHttpRequest();
    }
    else
    {
        var tmp = new ActiveXObject("Microsoft.XMLHTTP");
    }
   tmp.onreadystatechange = function() 
   {
    if (this.readyState === 4 && this.status === 200) 
    {
      document.getElementById("demo").innerHTML =this.responseText;
    }
  };
  tmp.open("GET", "Cal_DB_data_fetch.php", true);
  tmp.send();
}