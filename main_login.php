<html>
    <head>
       <title>login using hello.js</title>
       <!--The below included script contain hello.login() function which get triggered when the uer clicks on the button -->
    	<script src='hello.js/dist/hello.all.js'></script>
    	<!-- Below code use to display the data inconsole as the data have different character encoding -->
    	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<meta content="utf-8" http-equiv="encoding">
    </head>
    <!-- This hello.on function is used to display the user information after login in the div with id 'profile' -->
    <script>
    	//On the event of auth.login there is an anonymous callback function 
    	hello.on('auth.login', function(auth){
	
			// call user information, for the given network
			hello( auth.network ).api( '/me').then( function(r){
				// Inject it into the container
				var label = document.getElementById( "profile_"+ auth.network );
				if(!label){
					label = document.createElement('div');
					label.id = "profile_"+auth.network;
					document.getElementById('profile').appendChild(label);
				}
				//this will display the thumbnail, name and email in the div with id 'profile'
				label.innerHTML = '<img src="'+ r.thumbnail +'" /> Hey '+r.name+ 'your email is' +r.email;
				console.log(r.name);
			});
		});
    </script>
    <!-- This will initialize the the network with the correspoinding id -->
    <script>
	    hello.init({ 
				facebook : '610639722414832'
				//windows  : WINDOWS_CLIENT_ID,
				//google   :'809847866008-jlakg2v517dleolfk084h90jj94c0i5s.apps.googleusercontent.com'
			},{ scope : 'email', redirect_uri:'http://localhost/loginphp/checklogin.php' }
		);
    </script>
    <body>
    	<button onclick="hello( 'facebook' ).login()">facebook</button>
    	<!-- The following div displays the content obtained in hello.api() -->
    	<div id="profile">
    		
    	</div>
    </body>
</html>