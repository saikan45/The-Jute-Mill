<!DOCTYPE html>
<html lang="en">
<head>
	@yield('Header')
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>App.blade</title>
</head>
<body>
<div class="container">
	<!-- @yield('content') -->

	<h5>This text exists in 'app.blade.php' file</h5>

	@yield('content')

</div>
	


	@yield('footer')
</body>
</html>
