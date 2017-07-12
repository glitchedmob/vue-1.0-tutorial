<template>
	<div :class="['alert', 'alert-' + type]"
		v-show="show"
		transition="fade"
	>
		<slot></slot>
		<span class="alert-close" @click="show = false">&times;</span>
	</div>
</template>


<script>
	export default {
		props: {
			type: {	default: 'primary' },
			timeout: { default: 3000 },
			important: {
				type: Boolean,
				default: false
			}
		},

		data: function() {
			return {
				show: true
			}
		},

		mounted: function() {
			if (this.important) return;

			setTimeout(
				() => this.show = false,
				this.timeout
			);
		}
	}
</script>


<style>
	.alert {
		padding: 10px;
		position: relative;
		margin-bottom: 20px;
		border: 1px solid transparent;
		border-radius: 4px;
	}

	.alert-close {
		position: absolute;
		top: 5px;
		right: 5px;
		font-weight: bold;
		font-size: 1.2rem;
		cursor: pointer;
	}

	


	.alert-success {
		color: #3c763d;
		background-color: #dff0d8;
		border-color: #d6e9c6;
	}

	.alert-primary {
		color: #31708f;
		background-color: #d9edf7;
		border-color: #bce8f1;
	}

	.alert-warning {
		color: #8a6d3b;
		background-color: #fcf8e3;
		border-color: #faebcc;
	}

	.alert-danger {
		color: #a94442;
		background-color: #f2dede;
		border-color: #ebccd1;
	}

	.fade-transition {
		transition: all 1s ease;
	}

	.fade-leave-active {
		opacity: 0;
	}
</style>
