
const gv = {
	city_code: '0722',
	location: {
		barangay_text: 'Barangay Inayagan',
		city_text: 'City of Naga, Cebu',
	},
	api: "http://localhost:8000/",
	time: {
		hr_01: 3600000
	}
};

function getUserCityInfo() {
	var data = localStorage.getItem("user-city_info");
	if(data) {
		return JSON.parse(data);
	}
	else {
		return null;
	}
}

function getUserBrgyInfo() {
	var data = localStorage.getItem("user-brgy_info");
	if(data) {
		return JSON.parse(data);
	}
	else {
		return null;
	}
}

function fetchBrgyProfile(callback) {
	showLoading();
	$.get( gv.api + "cims/barangayProfile?user_refid="+ Plugin_auth.getLocalUser()['reference_id'] +"&city_code="+ getUserCityInfo()['city_code'] +"&brgy_code=" + getUserBrgyInfo()['brgy_code'], function (response) {
		hideLoading();
		localStorage.setItem("user_brgy_profile", JSON.stringify(response));
		callback(response);
	});
}

function fetchBrgyProfileLocal(callback) {
	var data = localStorage.getItem("user_brgy_profile");
	if(data) {
		callback(JSON.parse(data));
	}
	else {
		callback(null);
	}
}

function getPurokName(purok_refid) {
	var data = localStorage.getItem("user_brgy_profile");
	if(data) {
		data = JSON.parse(data);
		var purok_list =  data.barangay.purok_list;
		for(let i = 0; i < purok_list.length; i++) {
			if(purok_refid == purok_list[i]['reference_id']) {
				return purok_list[i]['name'];
			}
		}
		return purok_refid;
	}
	else {
		fetchBrgyProfile(function (profile) {
			var purok_list =  profile.barangay.purok_list;
			for(let i = 0; i < purok_list.length; i++) {
				if(purok_refid == purok_list[i]['reference_id']) {
					return purok_list[i]['name'];
				}
			}
			return purok_refid;
		});
	}
}

function getSitioName(sitio_refid) {
	var data = localStorage.getItem("user_brgy_profile");
	if(data) {
		data = JSON.parse(data);
		var sitio_list =  data.barangay.sitio_list;
		for(let i = 0; i < sitio_list.length; i++) {
			if(sitio_refid == sitio_list[i]['reference_id']) {
				return sitio_list[i]['name'];
			}
		}
		return sitio_refid;
	}
	else {
		fetchBrgyProfile(function (profile) {
			var sitio_list =  profile.barangay.sitio_list;
			for(let i = 0; i < sitio_list.length; i++) {
				if(sitio_refid == sitio_list[i]['reference_id']) {
					return sitio_list[i]['name'];
				}
			}
			return sitio_refid;
		});
	}
}

function ownershipName(code) {
	if(code == 'OWN') {
		return 'Owned';
	}
	else if(code == 'RNT') {
		return 'Renting';
	}
	else {
		return code;
	}
}

$(document).ready(function () {
	var user = Plugin_auth.getLocalUser();
	if(user) {
		$(".js-name-hjfrdsaqwuif").text(user['lastname'] + " " + (user['firstname']).substring(0,1)+".");
	}

	var city_info = localStorage.getItem("user-city_info");
	var brgy_info = localStorage.getItem("user-brgy_info");

	if(city_info && brgy_info) {
		city_info = JSON.parse(city_info);
		brgy_info = JSON.parse(brgy_info);
		$(".js-city-brgy-name-hjagxcvsfder").text(brgy_info['brgy_name'] +", "+ city_info['city_name']);
	}
});

$(".js-hjgftrdeswoi").click(function () {
	showLoading();
	Plugin_auth.logout(function (response) {
		hideLoading();
		localStorage.clear();
		window.location.href = "./";
	});
});