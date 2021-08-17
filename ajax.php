<html>
	<head>
		<script>
			function load()
			{
				var name=document.getElementById('name').value;
				var xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					 document.getElementById("result").innerHTML = this.responseText;
					}
				  };
				  xhttp.open("GET", "ajax-search.php?name="+name, true);
				  xhttp.send();
							
			}
		</script>
	</head>
	
	<body>
		Search Here
		<input type="text" id="name" onkeyup="load()" ><br>
		<div id="result">
		
		</div>
	</body>
</html>