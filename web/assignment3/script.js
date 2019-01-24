

/*******************************************
 * validateForm:
 * makes sure form is not empty if trying to submit
 * ******************************************/
$(document).ready(function () {
$(".buttons").on("click", function (event) {
		event.stopPropagation();
		event.stopImmediatePropagation();

		var id = $(this).attr('id');
		var price = $(this).val();

		$.ajax({
			url: 'Cart.php',
			type: 'POST',
			data: { 'name' : id, 'cost' : price },
			success: function (data) {
				alert('Data: ' + data);
			}
		})
	});
});

/*******************************************
 * validateForm:
 * makes sure form is not empty if trying to submit
 * ******************************************/
function validateForm() {
    var dom = document.cart;
    var count = 0;
    var errormessage = document.getElementsByClassName("error");
    var isvalid = true;
    for (i = 0; i < dom.forminput.length; i++) {
        if (dom.forminput[i].value == "") {
            isvalid = false;
            errormessage[i].style.visibility = "visible";
            count++;
            if (count == 1) {
                dom.forminput[i].focus();
            }
        }
    }
    var count = 0;
    for (i = 0; i < dom.creditcards.length; i++) {
        if (dom.creditcards[i].checked == false) {
            document.getElementById('radioerror').style.visibility = "visible";
        }
        else {
            count = 1;
            document.getElementById('radioerror').style.visibility = "hidden";
            break;
        }
    }
    if (count == 0) {
        isvalid = false;
    }

    return isvalid;
}
/*******************************************
 * resetFeilds 
 * all fields are reset & focus set to first field
 * ******************************************/
function resetFields() {
    var dom = document.cart;
    var errormessage = document.getElementsByClassName("error");
    for (i = 0; i < dom.forminput.length; i++) {
        errormessage[i].style.visibility = "hidden";
    }
	document.getElementById('radioerror').style.visibility = "hidden";
	document.getElementById('output').innerHTML = "0.00";
    document.getElementById('first_name').focus();
}
/*******************************************
 * phoneValidation() 
 * makes sure the phone input is in valid form
 * ******************************************/
function phoneValidation() {
    var phoneCheck = document.getElementById('phone');
    var errormessage = document.getElementsByClassName("error");
    var phoneSearch = phoneCheck.value.search(/^\d{3}-\d{3}-\d{4}$/);
    if (phoneSearch != 0) {
        errormessage[3].style.visibility = "visible";
        document.getElementById('phone').focus();
        return false;
      
    }
    else {
        errormessage[3].style.visibility = "hidden";
        return true;

    }
}





