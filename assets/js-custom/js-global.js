
const gv = {
	city_code: '0722',
	location: {
		barangay_text: 'Barangay Inayagan',
		city_text: 'City of Naga, Cebu',
		lat: 0,
		lng: 0
	},
	api: "http://127.0.0.1:8000/",
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

$(document).ready(function () {
	var user = Plugin_auth.getLocalUser();
	$(".js-name-hjfrdsaqwuif").text(user['lastname'] + " " + (user['firstname']).substring(0,1)+".");
});

$(".js-hjgftrdeswoi").click(function () {
	showLoading();
	Plugin_auth.logout(function (response) {
		hideLoading();
		localStorage.clear();
		window.location.href = "./";
	});
});