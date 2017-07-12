<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/app.css" rel="stylesheet">
</head>
<body>
	<div id="app">
		@if(isset($vueView))
			<component is="{{ $vueView }}" inline-template>
				@yield('content')
			</component>
		@endif
	</div>
	<script src="/js/app.js"></script>
</body>
</html>