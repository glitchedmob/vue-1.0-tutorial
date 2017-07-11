Vue.component('message', {
	template: '#message-template',

	data: function() {
		return {
			message: ''
		}
	},

	methods: {
		storeMessage: function() {
			this.$dispatch('new-message', this.message);

			this.message = '';
		}
	}
});


new Vue({
	el: '#app',

	data: {
		messages: []
	},

	methods: {
		handleNewMessaage: function(message) {
			console.log('Parent is handeling ' + message);
			this.messages.push(message);
		}
	}
});