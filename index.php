<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel</title>
    <script src="https://www.gstatic.com/firebasejs/8.4.2/firebase.js"></script>
	<script src="https://www.gstatic.com/firebasejs/4.8.2/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/ui/4.8.0/firebase-ui-auth.js"></script>
	<link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/4.8.0/firebase-ui-auth.css" />
    
</head>
<style>
	body {
		background-image: url('images/steak-1.jpg');
		background-attachment: fixed;
		background-size: cover;
	}
	h1 {
    font-size: 40px;
    color: white;
	text-decoration: none;
	}
</style>
<body>
    <!-- The surrounding HTML is left untouched by FirebaseUI.
         Your app may use that space for branding, controls and other customizations.-->
         <h1 style="text-align: center;">Welcome to our Hotel Reservation Site</h1>
         <div id="firebaseui-auth-container"></div>

<script>
	var fireBase = fireBase || firebase;
var hasInit = false;
var config = {
    apiKey: "AIzaSyCA34h3SwPvf5dPUxsExf05W0qwKzaDR6s",
    authDomain: "reservation-74e12.firebaseapp.com",
    databaseURL: "https://reservation-74e12-default-rtdb.firebaseio.com",
    projectId: "reservation-74e12",
    storageBucket: "reservation-74e12.appspot.com",
    messagingSenderId: "822665539583",
  };
if(!hasInit){
    firebase.initializeApp(config);
    hasInit = true;
}
</script>
<script src="login.js"></script>
</body>
</html>
