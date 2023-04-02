
const gv = {
	api: "http://127.0.0.1:8000/"
};

$(document).ready(function () {
	var user = Plugin_auth.getLocalUser();
	$(".js-name-hjfrdsaqwuif").text(user['lastname'] + " " + (user['firstname']).substring(0,1)+".");
});