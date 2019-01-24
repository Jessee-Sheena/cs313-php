/*******************************************
 * validateForm:
 * makes sure form is not empty if trying to submit
 * ******************************************/
$(document).ready(function () {
	$(".buttons").on("click", function (event) {

		var id = $(this).id;
		var price = $(this).val();

		$.ajax({
			url: 'Cart.php',
			type: 'POST',
			data: { name: id, cost: price },
			success: function (data) {

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


/*********************************************
 * current date
 * puts the current date in the footer
 *********************************************/
function currentDate() {
    var today = new Date();
    var day = today.getDay();
    var date = today.getDate();
    var month = today.getMonth();
    var year = today.getFullYear();

    //get the day of the week
    var weekday = new Array(7);
    weekday[0] = "Sunday";
    weekday[1] = "Monday";
    weekday[2] = "Tuesday";
    weekday[3] = "Wednesday";
    weekday[4] = "Thursday";
    weekday[5] = "Friday";
    weekday[6] = "Saturday";
    var dayweek = weekday[day];

    //get the month
    var whatMonth = new Array(12)
    whatMonth[0] = "January";
    whatMonth[1] = "February";
    whatMonth[2] = "March";
    whatMonth[3] = "April";
    whatMonth[4] = "May";
    whatMonth[5] = "June";
    whatMonth[6] = "July";
    whatMonth[7] = "August";
    whatMonth[8] = "September";
    whatMonth[9] = "October";
    whatMonth[10] = "November";
    whatMonth[11] = "December";
    var mon = whatMonth[month];

    document.getElementById('date').innerHTML = dayweek + ", " + date + " " + mon + " " + year;

}


