var store = {
	state: {
		username: 'levi_zitting'
	},

	updateUserName: function(username) {
		this.state.username = username;
	}
}


new Vue({
	el: '#app',

	data: {
		shared: store.state
	},

	components: {
		notification: {
			data: function() {
				return store.state;
			},
			template: '<h2>{{ username }}: <slot></slot></h2>'
		}
	}
})