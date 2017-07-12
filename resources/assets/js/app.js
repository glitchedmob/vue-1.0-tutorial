import Vue from 'vue';

import HomeView from './components/HomeView.vue';
import AboutView from './components/AboutView.vue';

new Vue({
	el: '#app',

	components: {
		HomeView,
		AboutView
	}
});