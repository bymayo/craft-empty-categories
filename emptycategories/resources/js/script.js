$(function() {

	$('.js-emptycategories-empty')
		.click(
			function(event){
				
				if (confirm('Are you sure you want to clean up the empty categories?')) {
				    return true;
				} else {
					return false;
				}
				
				event.preventDefault();
				
			}
		)

});