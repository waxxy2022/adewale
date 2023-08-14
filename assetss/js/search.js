$(document).ready(function() {
	$("#search-box").keyup(function() {
		$(".img-url").show();
		$.ajax({
			type : "POST",
			url : "ajax-endpoint/get-search-result.php",
			data : 'keyword=' + $(this).val(),
			success : function(data) {
				$("#suggesstion-box").show();
				$("#suggesstion-box").html(data);
				$("#search-box").css("background", "#FFFfff");

			}
		});
	});
});
