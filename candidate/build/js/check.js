$(function(){
	$("basic_form").validate({
		rules: {
			email: {
				required: true,
				email: true
			}
		},
		messages: {
			email: {
				required: 'email is required',
				email: 'please enter a valid email'
			}
		}
	});
});