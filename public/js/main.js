Vue.component('tasks', {
	template: '#tasks-template',

	data: function() {
		return {
			list: []
		}
	},

	created: function() {
		this.fetchTaskList();
	},

	methods: {
		fetchTaskList: function() {
			$.getJSON('api/tasks', function(data) {
				this.list = data;
			}.bind(this));
		}, 

		delete: function(task) {
			this.list.$remove(task);
		}
	}
});

new Vue({
	el: '#app',

});