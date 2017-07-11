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

		<component :is="currentView"></component>

		<a href="#" @click="currentView = 'home-page'">Home</a> |
		<a href="#" @click="currentView = 'about-page'">About</a>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.16/vue.min.js"></script>
	<script src="/js/app.js"></script>
</body>
</html>