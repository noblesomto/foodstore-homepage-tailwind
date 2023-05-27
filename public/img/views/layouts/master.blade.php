<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Task</title>

	@vite('resources/css/app.css')
    @yield('styles')
</head>
<body>
	<div class="container" id="app">
        @yield('content')
    </div>

	@vite('resources/js/app.js')
    @yield('scripts')
</body>
</html>