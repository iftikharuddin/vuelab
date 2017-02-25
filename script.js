new Vue({
	el: '#app',
	data: {
		title: 'testing',
	},
	computed: {
		theTitle: function(){
			return this.title.toLowerCase();
		}
	}

	
});