<html>
    <head>
       <title>login using hello.js</title>
    	<script src='hello.js/dist/hello.all.js'></script>
    </head>
    <script>
    	hello.on('auth.login', function(auth){
	
			// call user information, for the given network
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
		});
    </script>
    <script>
	    hello.init({ 
				facebook : '613820598746423',
				//windows  : WINDOWS_CLIENT_ID,
				google   :'809847866008-jlakg2v517dleolfk084h90jj94c0i5s.apps.googleusercontent.com'
			},{ scope : 'email', redirect_uri:'http://localhost/loginphp/intermediate.php' }
		);
    </script>
    <body>
    	<button onclick="hello( 'google' ).login()">Google+</button>
    </body>
</html>