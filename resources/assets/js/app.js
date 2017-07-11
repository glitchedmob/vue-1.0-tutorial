Vue.transition('fade', {
	enterClass: 'fadeInUp',
	leaveClass: 'fadeOutLeft'
})

new Vue({
	el: '#app',
	data: {
		show: true
	}
})