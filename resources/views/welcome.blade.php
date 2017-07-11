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
		<div class="animated" transition="fade" v-show="show">Hello World</div>
		<button @click="show = !show">Toggle</button>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.15/vue.min.js"></script>
	<script src="/js/app.js"></script>
</body>
</html>