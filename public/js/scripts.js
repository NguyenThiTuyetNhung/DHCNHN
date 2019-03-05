$(document).ready(function() {
	$('.btn-delete').click(function(event) {
		event.preventDefault();
		var action = $(this).attr('href');
		$('.modalDelete').find('form').attr('action', action);
	});
});