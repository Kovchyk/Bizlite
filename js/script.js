$(function() {

	$("form").submit(function() {
		$(".error").remove();

		if ( $("#name").val() === "" ) {
			$("#name").before('<span class="error">Enter a name</span>');
			return false;
		} else if ( $("#email").val() === "" ) {
			$("#email").before('<span class="error">Enter an Email</span>');
			return false;
		} else if ( $("#subject").val() === "" ) {
			$("#subject").before('<span class="error">Enter a subject</span>');
			return false;
		} else if ( $("#desctiption").val() === "" ) {
			$("#desctiption").before('<span class="error">Enter a desctiption</span>');
			return false;
		} else {
			$.post( "js/test.php", $(this).serialize() ).done(function(data) {
				console.log(data);
			});
		}

		return false;
	});
});