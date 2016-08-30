<!DOCTYPE html>
<html>

	<head>
		<title><?php echo $title; ?></title>
		<link href="{{URL::asset('css/main.css')}}" rel="stylesheet" type="text/css">
		<link href="{{URL::asset('css/header.css')}}" rel="stylesheet" type="text/css">
		<link href="{{URL::asset('css/body.css')}}" rel="stylesheet" type="text/css">
		<link href="{{URL::asset('css/footer.css')}}" rel="stylesheet" type="text/css">
		
		<link href="{{URL::asset('bootstrap-3.3.7-dist\css\bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="workspcace">
	
	
@include ('components.header.header')
@include ('components.body.body')
@include ('components.footer.footer')


		</div>
	</body>

</html>