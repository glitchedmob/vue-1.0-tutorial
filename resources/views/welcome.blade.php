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
		<alert type="success">Correct</alert>
		<alert type="primary">information</alert>
		<alert type="warning">Warning!</alert>
		<alert type="danger">Error!</alert>
	</div>

	<template id="alert-template">
		<div :class="['alert', type]" v-show="show">
			<slot></slot>
			<span class="close" @click="show = false">&times;</span>
		</div>
	</template>

	<script src="/js/app.js"></script>
</body>
</html>