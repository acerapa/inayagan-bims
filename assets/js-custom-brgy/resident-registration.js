
$(document).ready(function () {
	$(".js-jkhytrsdfde4").html('');
	$(".js-jkhytrsdfde4").append("<option value='0'>Please wait..</option>");
	Plugin_geo.allCity(true, gv.city_code, function (list) {
		$(".js-jkhytrsdfde4").html('');
		$(".js-jkhytrsdfde4").append("<option value='0'>Select City</option>");
		$.each(list, function (i) {
			$(".js-jkhytrsdfde4").append("<option value='"+ list[i]['citymunCode'] +"'>"+  list[i]['citymunDesc'] +"</option>");
		});
	});
});

$(".js-hjgytrfdesw3").click(function () {
	showLoading();
	Plugin_ui.disableButton(".js-hjgytrfdesw3", "Wait...");
	registerResident(function (response) {
		hideLoading();
		Plugin_ui.enableButton(".js-hjgytrfdesw3", "Register");
		$(".js-user-basic-hjgtrfsdrwen")[0].reset();
		$(".js-user-location-jkhufcxdasew")[0].reset();
	});
});

$(".js-jkhytrsdfde4").change(function () {
	var city_code = $(this).val();
	$(".js-jkatycmcxazu").html('');
	$(".js-jkatycmcxazu").append("<option value='0'>Please wait..</option>");
	Plugin_geo.allActiveBarangay(true, city_code, function (list) {
		$(".js-jkatycmcxazu").html('');
		$(".js-jkatycmcxazu").append("<option value='0'>Select Barangay</option>");
		$.each(list, function (i) {
			$(".js-jkatycmcxazu").append("<option value='"+ list[i]['brgyCode'] +"'>"+  list[i]['brgyDesc'] +"</option>");
		});
	});
});

$(".inp-sitio_refid").html('');
$(".inp-sitio_refid").append("<option value='0'>Please wait..</option>");
fetchSitioForRegistration(getUserBrgyInfo()['brgy_code'], 1);

function fetchSitioForRegistration(brgy_code, page) {
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

	$.get( gv.api + "api/plugin_query/getRowPaginate?" + $.param(args), function (response) {
		$(".inp-sitio_refid").html('');
		$(".inp-sitio_refid").append("<option value='0'>Select Sitio</option>");
		response.data.forEach(sitio => {
			$(".inp-sitio_refid").append(`<option value='${sitio.reference_id}'>${sitio.name}</option>`);
		});
	});
}

fetchPurokForRegistration(getUserBrgyInfo()['brgy_code'], 1);

function fetchPurokForRegistration(brgy_code, page) {
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
	$('.inp-purok_refid').html('');
	$('.inp-purok_refid').html('<option value="0">Please wait ...</option>');
	$.get( gv.api + "api/plugin_query/getRowPaginate?" + $.param(args), function (response) {
		$('.inp-purok_refid').html('');
		$('.inp-purok_refid').append("<option value='0'>Select Purok</option>");
		response.data.forEach(purok => {
			$(".inp-purok_refid").append(`<option value='${purok.reference_id}'>${purok.name}</option>`);
		})
	});
}

fetchHouseholdForRegistration(getUserCityInfo()['city_code'], getUserBrgyInfo()['brgy_code'], 1);

function fetchHouseholdForRegistration(city_code, brgy_code, page) {

	$('.inp-household_refid').html('');
	$('.inp-household_refid').html('<option value="0">Please wait ...</option>');
	Plugin_query.getRecordPaginate("cims_household", "all", [["city_code","=",city_code],["brgy_code","=",brgy_code]], "name", "asc", 25, page, function (response) {
		$('.inp-household_refid').html('');
		$('.inp-household_refid').html('<option value="0">Select Household</option>');
		response.data.forEach(household => {
			$('.inp-household_refid').append(`<option value='${household.reference_id}'>${household.name}</option>`);
		});
	});
}

function saveLocal() {
	var user_refid = Plugin_refid.generateLocal('USR');
	var data = {
		user_basic: {
			reference_id: user_refid,
			firstname: $('.inp-firstname').val(),
			lastname: $('.inp-lastname').val(),
			middlename: $('.inp-middlename').val(),
			gender: $(".inp-gender").val(),
			birthday: $('.inp-birthday').val(),
			mobile: $('.inp-mobile').val(),
			email: $('.inp-email').val(),
			created_by: Plugin_auth.getLocalUser()['reference_id']
		},
		user_location: {
			city_code: $(".inp-city_code").val(),
			brgy_code: $(".inp-brgy_code").val(),
			sitio_refid: $(".inp-sitio_refid").val(),
			purok_refid: $(".inp-purok_refid").val(),
			household_refid: $(".inp-household_refid").val(),
			created_by: Plugin_auth.getLocalUser()['reference_id']
		}
	};
	Plugin_storage.setItem('resident-reg-form', data, gv.time.hr_01);
}

function registerResident(callback) {
	var data = Plugin_storage.getItem("resident-reg-form");
	$.get( gv.api + "cims/resident_registration?" + $.param(data), function (response) {
		localStorage.removeItem("resident-reg-form");
		callback(response);
	});
}

