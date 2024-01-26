
var brgy_home = {
	profile: {}
};

$(document).ready(function () {
	fetchBrgyProfile(function (response) {
		brgy_home.profile = response;
		appendDashboardCounter(response);
	});
});

function appendDashboardCounter(response) {
	$(".js-jkaxbzmcbdxi").text(response['dashboard']['population']);
	$(".js-gfazxcvdfhjgr").text(response['dashboard']['household']);
	$(".js-fgxzcvsdfger").text(response['dashboard']['announcement']);
	$(".js-baxcbcnvgdfhr").text(response['dashboard']['blotter']);
}

