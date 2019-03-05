<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	@include('admin.partials.head')
</head>
<body>
	<div class="wrapper">
		@include('admin.partials.sidebar')

		@yield('content')
		
		@include('admin.partials.footer')
	</div>
	@include('admin.partials.scripts')
</body>
</html>