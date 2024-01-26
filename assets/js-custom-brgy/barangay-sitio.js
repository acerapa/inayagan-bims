
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
		<td>
			<select class="js-jkgbzxcvsdfd sitios" style="border: none;">
				<option value='0'>Select Action</option>
				<option value='`+i+`'>Population</option>
				<option value='`+JSON.stringify({id: i, action: 'edit'})+`'>Edit</option>
				<option value='`+JSON.stringify({id: i, action: 'delete'})+`'>Delete</option>
			</select>
		</td>
      </tr>`);

	   $('.sitios').on('change', function () {
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