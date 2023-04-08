
var resident_masterlist = {
	table: {}
};

$(document).ready(function () {
	fetchResidents(getUserCityInfo()['city_code'], getUserBrgyInfo()['brgy_code'], 1);
});

function fetchResidents(city_code, brgy_code, page) {
	showLoading();
	$.get( gv.api + "cims/resident_masterlist?city_code=" + city_code + "&brgy_code=" + brgy_code, function (response) {
		resident_masterlist.table = response;
		hideLoading();
		appendResidentTable(response);
		console.log(response);
	});
}

function appendResidentTable(response) {
	var data = response.data;

	$(".js-jkhy4azxmf9g tbody").html('');
	$.each(data, function (i) {
		$(".js-jkhy4azxmf9g tbody").append(`<tr>
        <td>`+ (i + 1) +`</td>
        <td>`+ data[i]['lastname'] +`</td>
        <td>`+ data[i]['firstname'] +`</td>
        <td>`+ data[i]['middlename'] +`</td>
        <td>`+ data[i]['birthday'] +`</td>
        <td>`+ data[i]['mobile'] +`</td>
        <td>`+ data[i]['email'] +`</td>
        <td>`+ Plugin_datetime.dbDateOnly(data[i]['created_at']) +`</td>
        <td>
        	<select class="js-jkgbzxcvsdfd" style="border: none;">
        		<option value='0'>Select Action</option>
        		<option value='update_mobile'>Update Mobile</option>
        		<option value='update_email'>Update Email</option>
        		<option value='update_given_name'>Update Given name</option>
        		<option value='update_surname'>Update Surname</option>
        		<option value='update_middle_name'>Update Middle name</option>
        		<option value='update_gender'>Update Gender</option>
        		<option value='transfer'>Transfer</option>
        		<option value='print_profile'>Print Profile</option>
        	</select>
        </td>
      </tr>`);
	});
}

$(document).on("change",".js-jkgbzxcvsdfd", function () {
	
	var value 	= $(this).val();
	var index 	= $(".js-jkgbzxcvsdfd").index(this);
	var data 	= resident_masterlist.table.data[index];

	if(value == 'update_mobile') {
		
	}
	else if(value == 'update_email') {

	}
	else if(value == 'update_given_name') {
		Plugin_ui.editModalDataText(
		'plugin_user', 
		'reference_id', 
		data['reference_id'],
		'firstname',
		'Edit Given name: ' + data['firstname'],
		data['firstname'], 
		data['firstname'],
		function () { showLoading(); },
		function () { hideLoading(); },
		function (response) {
			if(response.success) {
				Swal.fire('Success', 'successfully updated', 'success').then( async () => {
					fetchResidents(getUserCityInfo()['city_code'], getUserBrgyInfo()['brgy_code'], resident_masterlist.table.current_page);
				});
			}
			else {
				Swal.fire('Warning', 'Unable to update record, please try again later.', 'warning');
			}
		});
	}
	else if(value == 'update_surname') {
		Plugin_ui.editModalDataText(
		'plugin_user', 
		'reference_id', 
		data['reference_id'],
		'lastname',
		'Edit Surname: ' + data['lastname'],
		data['lastname'], 
		data['lastname'],
		function () { showLoading(); },
		function () { hideLoading(); },
		function (response) {
			if(response.success) {
				Swal.fire('Success', 'successfully updated', 'success').then( async () => {
					fetchResidents(getUserCityInfo()['city_code'], getUserBrgyInfo()['brgy_code'], resident_masterlist.table.current_page);
				});
			}
			else {
				Swal.fire('Warning', 'Unable to update record, please try again later.', 'warning');
			}
		});
	}
	else if(value == 'update_middle_name') {
		Plugin_ui.editModalDataText(
		'plugin_user', 
		'reference_id', 
		data['reference_id'],
		'middlename',
		'Edit Middle name: ' + data['middlename'],
		data['middlename'], 
		data['middlename'],
		function () { showLoading(); },
		function () { hideLoading(); },
		function (response) {
			if(response.success) {
				Swal.fire('Success', 'successfully updated', 'success').then( async () => {
					fetchResidents(getUserCityInfo()['city_code'], getUserBrgyInfo()['brgy_code'], resident_masterlist.table.current_page);
				});
			}
			else {
				Swal.fire('Warning', 'Unable to update record, please try again later.', 'warning');
			}
		});
	}
	else if(value == 'update_gender') {

	}
	else if(value == 'transfer') {

	}
	else if(value == 'print_profile') {

	}
	else {

	}

});

