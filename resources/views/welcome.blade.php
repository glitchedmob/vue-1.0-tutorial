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
		<message @new-message="handleNewMessage"></message>
	</div>

	<template id="message-template">
		<input type="text" v-model="message" @keyup.enter="storeMessage">
	</template>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.13/vue.min.js"></script>
	<script src="/js/app.js"></script>
</body>
</html>