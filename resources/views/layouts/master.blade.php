<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('dsgin/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('dsgin/css/all.min.css')}}">
</head>
<body>
@include('layouts.navbar')
<div class="container">
	@yield('content')
</div>




<script type="text/javascript" src="{{asset('dsgin/js/jq.js')}}"></script>
<script type="text/javascript" src="{{asset('dsgin/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dsgin/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/myscript.js')}}"></script>
@include('layouts.footer')
</body>
</html>