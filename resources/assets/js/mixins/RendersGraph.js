export default {
	created() {
		console.log('mixin created method was called');
	},

	methods: {
		render() {
			alert('render the chart')
		}
	}
}