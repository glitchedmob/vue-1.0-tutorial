<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<title>Laravel</title>

</head>
<body>
	<div class="container" id="app">
		<tasks></tasks>
	</div>

	<template id="tasks-template">
		<h1>My Tasks</h1>
		<ul class="list-group">
			<li class="list-group-item"
				v-for="task in list"
			>
				@{{ task.body }}

				<strong @click="delete(task)">x</strong>
			</li>
		</ul>
	</template>

	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.8/vue.js"></script>
	<script src="/js/main.js"></script>
</body>
</html>
