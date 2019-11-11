<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home Page</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="data.php" method="POST" enctype="mutipart/form-data" accept-charset="utf-8">
		<input type="file" onchange="loadFile(event)" id="InputFile">
		<label for="InputFile" class="imagelink">+</label>
		<img id="output" width="200" height="200">
	</form>
	<script>
	  var loadFile = function(event) {
	    var reader = new FileReader();
	    reader.onload = function(){
	      var output = document.getElementById('output');
	      output.src = reader.result;
	    };
	    reader.readAsDataURL(event.target.files[0]);
	  };
	</script>
</body>
</html>