<div id="footer">Copyright &copy; 2017 Mvule Safaris, All Rights Reserved | P.O. Box 67859-00870, Nairobi Kenya | Tel: +254 722859430, +254 717829380| <a href="mvulesafaris@gmail.com">mvulesafaris@gmail.com</a>| Developed by Santana.</div>

	<script type = "text/javascript">

	    function O(e) {return document.getElementById(e);}

	    function checkUser(user)
	    {

	      if (user.value == '')
	      {
	        O('info').innerHTML = '';
	        return;
	      }

	      var params  = "username=" + user.value;
	      var request = new XMLHttpRequest();
	      request.open("POST", "verifyuser.php", true);
	      request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	      // request.setRequestHeader("Content-length", params.length);
	      request.send(params);
	      // request.setRequestHeader("Connection", "close");

	      request.onReadyStateChange = function()
	      {
	        if (this.readyState == 4)
	          if (this.status == 200)
	            if (this.responseText != null)
	            	alert(this.responseText);
	              O('info').innerHTML = this.responseText;
	      }
	      // request.send(params);
	    }

	    function ajaxRequest()
	    {
	      try { var request = new XMLHttpRequest() }
	      catch(e1) {
	        try { request = new ActiveXObject("Msxml2.XMLHTTP") }
	        catch(e2) {
	          try { request = new ActiveXObject("Microsoft.XMLHTTP") }
	          catch(e3) {
	            request = false;
	      } } }

	      return request;
	    }
  </script>
</body>
</html>
			 


