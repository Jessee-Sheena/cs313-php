/*******************************************
 * takeAction:
 * selects which action the user wants to take
 * ******************************************/
function takeAction(action, id) {
	var query = "";
	var pagePathName = window.location.pathname;
	switch (action) {
		case "add":
			query = 'action=' + action + '&id=' + id;
			break;
		case "remove":
			query = 'action' + action + '&id=' + id;
			break;
		case "empty":
			query = 'action' + action;
			break;


	}
	$.ajax({		
		url: "action.php",
		data: query,
		type: "POST",
		success: function (data) {
			$('#itemInCart').html("data");
		}
	});

}






