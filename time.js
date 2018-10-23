// ******day vs night*******
$(document).ready(function(){
	var d = new Date();
	var n = d.getHours();
	if (n >= 22 || n < 4)
	  // If time is after 8PM or before 5AM, apply night theme to ‘body’
	  document.body.className = "night";
	else if (n >= 16 && n < 22)
	  // If time is between 4PM – 7PM sunset theme to ‘body’
	  document.body.className = "evening";
	else if (n >= 10 && n < 16)
	  // Else use ‘day’ theme
	  document.body.className = "noon";
  else
    document.body.className = "morning"
});
