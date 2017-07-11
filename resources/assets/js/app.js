Vue.component('home-page', {
});

Vue.component('about-page', {
	methods: {
		doSomething: function() {
			alert("hello");
		}
	}
});

new Vue({
	el: '#app',

	data: {
		currentView: 'home-page'
	}
})