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
		<ul>
			<li v-for="person in people | role 'admin'">@{{ person.name }}</li>
		</ul>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.13/vue.min.js"></script>
	<script src="/js/app.js"></script>
</body>
</html>