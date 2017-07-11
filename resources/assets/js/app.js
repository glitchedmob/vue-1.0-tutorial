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
		shared: store
	},

	components: {
		notification: {
			data: function() {
				return store;
			},
			template: '<h2>{{ username }}: <slot></slot></h2>'
		}
	}
})