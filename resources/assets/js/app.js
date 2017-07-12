const RendersGraph = {
	methods: {
		render() {
			console.log("Render the chart");
		}
	}
}

const RevenueGraph = new Vue({
	el: '#app',

	mixins: [RendersGraph],

	ready() {
		this.render();
	}
});

const SignUpsGraph = new Vue({
	el: '#app',

	mixins: [RendersGraph],

	ready() {
		this.render();
	}

	
});
