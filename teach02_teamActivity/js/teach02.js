// Your code here!
function clicked() {
	alert("CLICKED!");
}
/*function changeTheColor() {
	var dom = document.getElementById("colorChange").value;
	document.getElementById("firstDiv").style.color = dom;
}*/
$(document).ready(function () {
	$("#colorButton").click(function () {
		$("#firstDiv").attr("style", "color: " + $("#colorChange").val());
	});
});

$(document).ready(function () {
	$("#thirdButton").click(function () {
		$("#thirdDiv").fadeToggle('slow');

	});
});

