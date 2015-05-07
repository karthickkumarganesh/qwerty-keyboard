var input;
$(":button").on('click', function() {
	console.log($(this).val());
	input.concat($(this).val());
	console.log(input);
});
