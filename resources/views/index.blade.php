<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	 <!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Laravel</title>

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/invoice.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
	<script>$(document).ready( function () {
			$('.table').DataTable();
		} );
	</script>
	<script>@yield('script')</script>
</head>
<body>
		
	<div class="nav">
		<a href="{{route('allinvoice')}}">Invoices</a> |
		<a href="{{route('company') }}">Company</a> |	
		<a href="{{route('customer.index') }}">Customer</a> |
		<a href="{{route('order.index') }}">Order</a> |
		<a href="{{route('statement')}}">Statement</a>
	</div>
	
		
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				@yield('content')
			</div>
		</div>
	</div>
	
</body>
</html>
