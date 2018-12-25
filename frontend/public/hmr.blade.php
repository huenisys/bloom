<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="rO0T7x5KlkJpb8sPwpn49C16Icy48yrEx0kOVYcx">

    <title>{{ config('bloom.headline') }} | {{ config('bloom.sitename') }}</title>

		<link rel="icon" type="image/x-icon" href="{{ config('bloom.favicon_file') }}" />

		<!-- Fonts -->
		<link rel="dns-prefetch" href="//fonts.gstatic.com">

	</head>
	<body>
    <bloom></bloom>
    <script type="text/javascript" src="http://localhost:8080/app.js"></script>
	</body>
</html>
