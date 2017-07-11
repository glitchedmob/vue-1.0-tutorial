Vue.component('home-page', {
	template: '<h1>Home Page</h1>'
});

Vue.component('about-page', {
	template: '<h1>About Page</h1>'
});

new Vue({
	el: '#app',

	data: {
		currentView: 'home-page'
	}
})