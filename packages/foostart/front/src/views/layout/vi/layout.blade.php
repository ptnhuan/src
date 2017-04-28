<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@yield('style')
	@yield('script')
</head>
<body>
	@yield('header')
	@yield('content')
	@yield('footer')
</body>
</html>