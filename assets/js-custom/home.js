
var brgy_home = {
	profile: {}
};

$(document).ready(function () {
	fetchBrgyProfile(function (response) {
		brgy_home.profile = response;
	});
});

