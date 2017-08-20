<?php


?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style>
	body {
		 background: #ff8989;
	}
	#main-view {
		text-align: center;
	    min-height:100vh;
	    background:white;
	}
	#inner-column {
		border-radius:5px;
		min-height: 95vh;
	}
	#upload-btn {
		margin:15px auto;
		
	}
	#upload-submit-btn {
		width:100px;
		margin:0 auto;
	}
</style>

</head>

<body>

<div class="container">
	<div id="main-view" class="col-sm-12">
		<div id="inner-column">
		<h1>Patient Tagger</h1>
		<h2>Step One: Upload Photo</h2>
		<form action="/action_page.php">
		  <input id="upload-btn" type="file" name="pic" accept="image/*">
		  <input id="upload-submit-btn" type="submit" class="form-control" value="upload">
		</form>
		</div>
	</div>
</div>

</body>
</html>
