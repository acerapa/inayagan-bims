
var barangay_purok = {
	table: {}
};

$(document).ready(function () {
	fetchPurok(getUserBrgyInfo()['brgy_code'], 1);
});

function fetchPurok(brgy_code, page) {
	var args = {
		table: "cims_purok",
		getClm: 'all',
		where: [
			["brgy_code", brgy_code],
			["status","1"]
		],
		orderByClm: 'name',
		orderBySort: 'asc',
		numOfRow: 1000,
		page: page
	};

	showLoading();
	$.get( gv.api + "api/plugin_query/getRowPaginate?" + $.param(args), function (response) {
		barangay_purok.table = response;
		hideLoading();
	  	appendPurokTable(response);
	});
}

function appendPurokTable(response) {
	var data = response.data;
	$(".js-hjgvfcdsews tbody").html('');
	$.each(data, function (i) {
		$(".js-hjgvfcdsews tbody").append(`<tr>
        <td>`+ (i + 1) +`</td>
        <td>`+ data[i]['reference_id'] +`</td>
        <td>`+ data[i]['name'] +`</td>
        <td>`+ Plugin_datetime.dbDateOnly(data[i]['created_at']) +`</td>
		<td>
			<select class="js-jkgbzxcvsdfd puroks" style="border: none;">
				<option value='0'>Select Action</option>
				<option value='`+i+`'>Population</option>
				<option value='`+JSON.stringify({id: i, action: 'edit'})+`'>Edit</option>
				<option value='`+JSON.stringify({id: i, action: 'delete'})+`'>Delete</option>
			</select>
		</td>
      </tr>`);
	
	  	$('.puroks').on('change', function () {
			let data = JSON.parse($(this).val());

			switch (data.action) {
				case 'edit':
					editData(data.id);
					break;
				case 'delete':
					deleteData(data.id);
					break;
			}
		});
	});
}


function editData(index) {
	var data = barangay_purok.table.data[index];
	Plugin_ui.editModalDataText(
		'cims_purok', 
		'reference_id', 
		data['reference_id'],
		'name',
		'Edit purok: ' + data['name'],
		data['name'], 
		'',
		function () { showLoading(); },
		function () { hideLoading(); },
		function (response) {
			if(response.success) {
				Swal.fire('Success', 'successfully updated', 'success').then( async () => {
					fetchPurok(getUserBrgyInfo()['brgy_code'], 1);
				});
			}
			else {
				Swal.fire('Warning', 'Unable to update record, please try again later.', 'warning');
			}
		});
}

function deleteData(index) {
	var data = barangay_purok.table.data[index];
	Plugin_ui.deleteModalWithPassword(
		"Delete confirmation", 
		"Delete sitio " + data['name'] + "?", 
		"cims_purok", 
		[['reference_id','=', data['reference_id']]],
		Plugin_auth.getLocalUser()['reference_id'], 
		function () {
			showLoading();
		}, 
		function () {
			hideLoading();
		},  
		function (response) {
			if(response.success) {
				Swal.fire('Success', response.message, 'success').then( async () => {
					fetchPurok(getUserBrgyInfo()['brgy_code'], 1);
				});
			}
			else {
				Swal.fire('Warning', response.message, 'warning');
			}
		}
	);
}
