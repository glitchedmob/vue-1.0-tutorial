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
		<form action="/posts/1" method="POST" v-ajax complete="I deleted the post">
			{{ method_field('DELETE') }}
			{{ csrf_field() }}
			<button type="submit">Delete Post</button>
		</form>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.15/vue.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.6.1/vue-resource.min.js"></script>
	<script src="/js/app.js"></script>
</body>
</html>