
var barangay_sitio = {
	table: {}
};

$(document).ready(function () {
	fetchSitio(getUserBrgyInfo()['brgy_code'], 1);
});

function fetchSitio(brgy_code, page) {
	var args = {
		table: "cims_sitio",
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
		barangay_sitio.table = response;
		hideLoading();
	  appendSitioTable(response);
	});
}

function appendSitioTable(response) {
	var data = response.data;
	$(".js-hjgvfcdsews tbody").html('');
	$.each(data, function (i) {
		$(".js-hjgvfcdsews tbody").append(`<tr>
        <td>`+ (i + 1) +`</td>
        <td>`+ data[i]['reference_id'] +`</td>
        <td>`+ data[i]['name'] +`</td>
        <td>`+ Plugin_datetime.dbDateOnly(data[i]['created_at']) +`</td>
        <td><button class="btn btn-info btn-sm">Population</button></td>
        <td><button class="btn btn-primary btn-sm" onclick="editData(`+i+`)">Edit</button></td>
        <td><button class="btn btn-danger btn-sm" onclick="deleteData(`+i+`)">Delete</button></td>
      </tr>`);
	});
}

function editData(index) {
	var data = barangay_sitio.table.data[index];
	Plugin_ui.editModalDataText(
		'cims_sitio', 
		'reference_id', 
		data['reference_id'],
		'name',
		'Edit sitio: ' + data['name'],
		data['name'], 
		'',
		function () { showLoading(); },
		function () { hideLoading(); },
		function (response) {
			if(response.success) {
				Swal.fire('Success', 'successfully updated', 'success').then( async () => {
					fetchSitio(getUserBrgyInfo()['brgy_code'], 1);
				});
			}
			else {
				Swal.fire('Warning', 'Unable to update record, please try again later.', 'warning');
			}
		});
}

function deleteData(index) {
	var data = barangay_sitio.table.data[index];
	Plugin_ui.deleteModalWithPassword(
		"Delete confirmation", 
		"Delete purok " + data['name'] + "?", 
		"cims_sitio", 
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
					fetchSitio(getUserBrgyInfo()['brgy_code'], 1);
				});
			}
			else {
				Swal.fire('Warning', response.message, 'warning');
			}
		}
	);
}