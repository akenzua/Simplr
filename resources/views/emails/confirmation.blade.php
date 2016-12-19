<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Confirmation Email</title>
</head>
<body>
	<h1>Thank you for Signing Up</h1>
	<p>
		You need to <a href='{{ url("register/confirm/{$user->token}")}}'>confrim your email address</a>
	</p>

</body>
</html>