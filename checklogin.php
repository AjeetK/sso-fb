<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<script type="text/javascript" src='hello.js/dist/hello.all.js'></script>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">
</head>
<body>

</body>
</html>

    
 <?php

session_start();

  ?>
  <script type="text/javascript">
  		hello( auth.network ).api( '/me' ).then( function(r){
				// Inject it into the container
				var label = document.getElementById( "profile_"+ auth.network );
				if(!label){
					label = document.createElement('div');
					label.id = "profile_"+auth.network;
					document.getElementById('profile').appendChild(label);
				}
				label.innerHTML = '<img src="'+ r.thumbnail +'" /> Hey '+r.name;
				console.log(r.name);
			});
  </script>
<?php
  echo $_GET['username'];


?>