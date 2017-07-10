new Vue({
	el: '#app',
	
	data: {
		tasks: [
			{ body: 'Go to the store', completed: false },
			{ body: 'Finish Vue course', completed: false },
			{ body: 'Get mad money',  completed: true }
		]
	},

	methods: {
		toggleCompletedFor: function(task) {
			task.completed = !task.completed;
		}
	}
});