function redirectToViewTopic(get) {
    window.location.href = "../controller/controllerViewTopic.php?idPost=" + get;
}

$('#SearchBar').on('input', function(e) {
	var value = $(this).val().toLowerCase();
	
	$("tbody tr").filter(function() {
		$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	});
});