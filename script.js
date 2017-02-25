Vue.filter('uppercase', function(value){
	return value.toUpperCase();
});
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