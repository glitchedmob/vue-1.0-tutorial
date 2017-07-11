<template>
	<div :class="['alert', type]" v-show="show">
		<slot></slot>
		<span class="close" @click="show = false">&times;</span>
	</div>
</template>

<script>
	export default {

		props: ['type'],

		data: function() {
			return {
				show: true
			}
		}
	};
</script>
