
$(document).ready(function () {
	$(".js-hjyt5redsww23").html('');
	$(".js-hjyt5redsww23").append("<option value='0'>Please wait..</option>");
	Plugin_geo.allCity(true, '0722', function (list) {
		$(".js-hjyt5redsww23").html('');
		$(".js-hjyt5redsww23").append("<option value='0'>Select City</option>");
		$.each(list, function (i) {
			$(".js-hjyt5redsww23").append("<option value='"+ list[i]['citymunCode'] +"'>"+  list[i]['citymunDesc'] +"</option>");
		})
	});
});

$(".js-hjyt5redsww23").change(function () {
	var city_code = $(this).val();
	console.log("city_code", city_code);
	$(".js-kiytgsdfe4w3").html('');
	$(".js-kiytgsdfe4w3").append("<option value='0'>Please wait..</option>");
	Plugin_geo.allActiveBarangay(true, city_code, function (list) {
		$(".js-kiytgsdfe4w3").html('');
		$(".js-kiytgsdfe4w3").append("<option value='0'>Select Barangay</option>");
		$.each(list, function (i) {
			$(".js-kiytgsdfe4w3").append("<option value='"+ list[i]['brgyCode'] +"'>"+  list[i]['brgyDesc'] +"</option>");
		});
	});
});

$(".js-ihgdxcfsde4u").click(function () {
	Plugin_ui.disableButton(".js-ihgdxcfsde4u", "Please wait...");
	var data 		= $(".js-jky6abnxvsde").serialize();
	var device 		= window.navigator.userAgent;
	var uri 		= gv.api + "cims/auth_brgy?"+ data +"&device="+ device +"&datetime=" + Plugin_datetime.getDateTime();
	console.log(uri);
	Plugin_ui.disableButton(".js-ihgdxcfsde4u", "Please wait...");
	$.get( uri, function (response) {
		console.log(response);
		Plugin_ui.enableButton(".js-ihgdxcfsde4u", "Sign In");
		if(response.success) {
			localStorage.setItem("user-data", JSON.stringify(response['user_data']));
            localStorage.setItem("user-token", JSON.stringify(response['token']));
            $(".js-jky6abnxvsde")[0].reset();
            window.location.href = "home.php";
		}
		else {
			Swal.fire('','','').then( async () => {
				$(".js-jky6abnxvsde")[0].reset();
			});
		}
	})
});