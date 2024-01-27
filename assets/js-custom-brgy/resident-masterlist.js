
var resident_masterlist = {
	table: {}
};

$(document).ready(function () {
	fetchResidents(getUserCityInfo()['city_code'], getUserBrgyInfo()['brgy_code'], 1);
});

$(".js-hjaxcnmvbzse").click(function () {
	var city_code 	= getUserCityInfo()['city_code'];
	var brgy_code 	= getUserBrgyInfo()['brgy_code'];
	var surname 	= $(".js-mkxcbnzxvbdf").val();
	var firstname 	= $(".js-gxcva7yszxcn").val();
	showLoading();
	Plugin_ui.disableButton(".js-hjaxcnmvbzse", "Searching...");
	$.get( gv.api + "cims/resident_search?city_code="+ city_code +"&brgy_code="+ brgy_code +"&surname="+ surname +"&firstname=" + firstname, function (response) {
		Plugin_ui.enableButton(".js-hjaxcnmvbzse", "Search");
		resident_masterlist.table = response;
		hideLoading();
		appendResidentTable(response);
	});
});

function fetchResidents(city_code, brgy_code, page) {
	showLoading();
	$.get( gv.api + "cims/resident_masterlist?city_code=" + city_code + "&brgy_code=" + brgy_code, function (response) {
	// $.get( gv.api + "cims/resident_masterlist", function (response) {
		resident_masterlist.table = response;
		hideLoading();
		appendResidentTable(response);
	});
}

function appendResidentTable(response) {
	var data = response;

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
        		<option value='add_as_staff'>Add as Staff</option>
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


function bulkRegisterResident(data, callback) {
	let formated_data = [];
	console.log(data[0]); 
	data.shift().forEach(resident => {
		let resident_data = {
			user_basic: {
				reference_id: Plugin_refid.generateLocal('USR'),
				firstname: resident.firstname,
				lastname: resident.lastname,
				middlename: resident.middlename,
				gender: resident.gender,
				birthday: resident.birthday,
				mobile: resident.mobile,
				email: resident.email,
				created_by: Plugin_auth.getLocalUser()['reference_id']
			},
			user_location: {
				city_code: resident.city,
				brgy_code: resident.barangay,
				sitio_refid: resident.sitio,
				purok_refid: resident.purok,
				household_refid: resident.household,
				created_by: Plugin_auth.getLocalUser()['reference_id']
			}
		}

		formated_data.push(resident_data);
	})

	$.get( gv.api + "cims/resident_bulk_registration",
		{
			data: formated_data
		},
		function (response) {
			// save response to localstorage
			let response_compilation = localStorage.getItem('bulk_response_compilation');
			response_compilation = response_compilation ? JSON.parse(response_compilation) : [];

			response_compilation.push(response);
			localStorage.setItem('bulk_response_compilation', JSON.stringify(response_compilation));

			if (!data.length) {
				console.log(JSON.parse(localStorage.getItem('bulk_response_compilation')));
				Swal.fire('Uploaded Successfull', 'Residents already uploaded!', 'success')
					.then(() => {
						window.location.href="/inayagan-bims/barangay/resident-masterlist.php"
					});
			}

			callback(data);
		}
	);
}

function callback_for_bulk_registration(data) {
	if (data.length) {
		bulkRegisterResident(data, callback_for_bulk_registration);
	}
}

$('#upload-residents').on('click', function () {
	// limit row per api call is 50

	// reset the result_compilation
	localStorage.setItem('bulk_response_compilation', JSON.stringify([]));

	let data = format_data_by_limit();
	
	bulkRegisterResident(data, callback_for_bulk_registration);
});

function format_data_by_limit() {
	let data = [];
	let limit_50 = [];
	let data_length = Math.floor(residents_bulk_data.length / 50);

	residents_bulk_data.forEach((resident, index) => {
		if (data.length != data_length) {
			if (((index+1) % 50) != 0) {
				limit_50.push(resident);
			} else {
				limit_50.push(resident)
				data.push(limit_50)
				limit_50 = []
			}
		} else {
			limit_50.push(resident)
		}
	});

	data.push(limit_50);
	limit_50 = [];

	return data;
}

var residents_bulk_data = [];

$('#resident-bulk-upload').on('change', function () {
	let file = this.files[0];

	if (file.type != 'text/csv') {
		Swal.fire('Unsupported format', 'Only accepts csv files!', 'error');
	}

	if (file) {
		$('#upload-residents')
			.removeClass('opacity-50')
			.removeClass('pointer-events-none');

		Papa.parse(
			file,
			{
				download: true,
				header: true,
				skipEmptyLines: true,
				complete(results) {
					$('#rows-to-upload').text(`Rows: ${results.data.length}`);
					appendResidentsToUpload(results.data);
					residents_bulk_data = results.data;
				}
			}
		)
	}
});

function appendResidentsToUpload(data) {
	$("#to-be-upload-residents tbody").html('');
	$.each(data, function (i) {
		$("#to-be-upload-residents tbody").append(`<tr>
        <td>`+ (i + 1) +`</td>
        <td>`+ data[i]['lastname'] +`</td>
        <td>`+ data[i]['firstname'] +`</td>
        <td>`+ data[i]['middlename'] +`</td>
        <td>`+ data[i]['birthday'] +`</td>
        <td>`+ data[i]['mobile'] +`</td>
        <td>`+ data[i]['email'] +`</td>
        <td>`+ Plugin_datetime.dbDateOnly(data[i]['created_at']) +`</td>
      </tr>`);
	});
}
