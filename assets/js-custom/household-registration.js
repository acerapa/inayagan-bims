
$(document).ready(function () {
	saveLocalHousehold();
	$(".js-kmvbxzvbxsde").html('');
	$(".js-kmvbxzvbxsde").append("<option value='0'>Please wait..</option>");
	Plugin_geo.allCity(true, gv.city_code, function (list) {
		$(".js-kmvbxzvbxsde").html('');
		$(".js-kmvbxzvbxsde").append("<option value='0'>Select City</option>");
		$.each(list, function (i) {
			$(".js-kmvbxzvbxsde").append("<option value='"+ list[i]['citymunCode'] +"'>"+  list[i]['citymunDesc'] +"</option>");
		});
	});
});

$(".js-kmvbxzvbxsde").change(function () {
	var city_code = $(this).val();
	$(".js-jkagxcnmdfge").html('');
	$(".js-jkagxcnmdfge").append("<option value='0'>Please wait..</option>");
	Plugin_geo.allActiveBarangay(true, city_code, function (list) {
		$(".js-jkagxcnmdfge").html('');
		$(".js-jkagxcnmdfge").append("<option value='0'>Select Barangay</option>");
		$.each(list, function (i) {
			$(".js-jkagxcnmdfge").append("<option value='"+ list[i]['brgyCode'] +"'>"+  list[i]['brgyDesc'] +"</option>");
		});
	});
});

$(".js-jkagxcnmdfge").change(function () {
	var brgy_code = $(this).val();

	$(".js-jkavbcmzbgs5").html('');
	$(".js-jkavbcmzbgs5").append("<option value='0'>Please wait..</option>");
	Plugin_query.getRowMultiWhere("cims_sitio", "reference_id,name,city_code,brgy_code", [["status","=","1"],["brgy_code","=",brgy_code]], "name", "asc", function (sitio_list) {
		$(".js-jkavbcmzbgs5").html('');
		$(".js-jkavbcmzbgs5").append("<option value='0'>Select Sitio</option>");
		$.each(sitio_list, function (i) {
			$(".js-jkavbcmzbgs5").append("<option value='"+ sitio_list[i]['reference_id'] +"'>"+  sitio_list[i]['name'] +"</option>");
		});
			$(".js-jkavbcmzbgs5").append("<option value='NA'>Not Applicable</option>");
	
		$(".js-hjasbnzxnhdfe4").html('');
		$(".js-hjasbnzxnhdfe4").append("<option value='0'>Please wait..</option>");
		Plugin_query.getRowMultiWhere("cims_purok", "reference_id,name,city_code,brgy_code", [["status","=","1"],["brgy_code","=",brgy_code]], "name", "asc", function (purok_list) {
			$(".js-hjasbnzxnhdfe4").html('');
			$(".js-hjasbnzxnhdfe4").append("<option value='0'>Select Purok</option>");
			$.each(purok_list, function (j) {
				$(".js-hjasbnzxnhdfe4").append("<option value='"+ purok_list[j]['reference_id'] +"'>"+  purok_list[j]['name'] +"</option>");
			});
				$(".js-hjasbnzxnhdfe4").append("<option value='NA'>Not Applicable</option>");
		});
	});
});

$(".js-hjgacvxfsder4").click(function () {
	var data 		= Plugin_storage.getItem("household-reg-form");
	var column 		= data['household'];

	if(column['name'] == '') {
		Swal.fire("Warning", "Household name is required", "warning");
	}
	else if(column['ownership'] == '0') {
		Swal.fire("Warning", "Ownership is required", "warning");
	}
	else if(column['city_code'] == '0') {
		Swal.fire("Warning", "City is required", "warning");
	}
	else if(column['brgy_code'] == '0') {
		Swal.fire("Warning", "Barangay is required", "warning");
	}
	else if(column['sitio_refid'] == '0') {
		Swal.fire("Warning", "Sitio is required", "warning");
	}
	else if(column['purok_refid'] == '0') {
		Swal.fire("Warning", "Purok is required", "warning");
	}
	else if((column['latitude'] == '') || (column['longitude'] == '')) {
		Swal.fire("Warning", "Please provide geolocation.", "warning").then( async () => {
			showModalGeoPicker('.js-jknzxbbasdfwe', '.js-jkbncxujashd');
		});
	}
	else {
		Plugin_ui.disableButton(".js-hjgacvxfsder4", "Please wait...");
		Plugin_query.insertRecord("cims_household", column, function (response) {
			Plugin_ui.enableButton(".js-hjgacvxfsder4", "Register");
			if(response.success) {
				clearHouseholdForm();
				Swal.fire("Success", "Household successfully registered", "success").then( async () => {
					fetchBrgyProfile(function (res_household) {
						
					});
				});
			}
			else {
				Swal.fire("Warning", "Something went wrong, please try again later.", "warning");
			}
		});
	}
});

function saveLocalHousehold() {
	var data = {
		household: {
			reference_id: Plugin_refid.generateLocal('RHH'),
			name: $(".js-jkbnzvxcdsfr").val(),
			ownership: $(".js-bnxvzxnmsghas").val(),
			city_code: $(".js-kmvbxzvbxsde").val(),
			brgy_code: $(".js-jkagxcnmdfge").val(),
			sitio_refid: $(".js-jkavbcmzbgs5").val(),
			purok_refid: $(".js-hjasbnzxnhdfe4").val(),
			latitude: $(".js-jknzxbbasdfwe").val(),
			longitude: $(".js-jkbncxujashd").val(),
			created_by: Plugin_auth.getLocalUser()['reference_id']
		}
	};
	Plugin_storage.setItem('household-reg-form', data, gv.time.hr_01);
}

function clearHouseholdForm() {
	$(".js-jkbnzvxcdsfr").val('');
	$(".js-bnxvzxnmsghas").val('0');
	$(".js-kmvbxzvbxsde").val('0');
	$(".js-jkagxcnmdfge").val('0');
	$(".js-jkavbcmzbgs5").val('0');
	$(".js-hjasbnzxnhdfe4").val('0');
	$(".js-jknzxbbasdfwe").val('');
	$(".js-jkbncxujashd").val('');
	localStorage.removeItem("household-reg-form");
}

