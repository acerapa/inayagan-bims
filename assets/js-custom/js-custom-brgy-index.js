
$(document).ready(function () {
	$(".js-hjyt5redsww23").html('');
	$(".js-hjyt5redsww23").append("<option value='0'>Please wait..</option>");
	Plugin_geo.allCity(true, gv.city_code, function (list) {
		$(".js-hjyt5redsww23").html('');
		$(".js-hjyt5redsww23").append("<option value='0'>Select City</option>");
		$.each(list, function (i) {
			$(".js-hjyt5redsww23").append("<option value='"+ list[i]['citymunCode'] +"'>"+  list[i]['citymunDesc'] +"</option>");
		})
	});
	$(".js-hjagbdfgr47o").text(gv.location.barangay_text);
	$(".js-jkuy7edghsxc").text(gv.location.city_text);
});

$(".js-hjyt5redsww23").change(function () {
	var city_code = $(this).val();
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
	Plugin_ui.disableButton(".js-ihgdxcfsde4u", "Please wait...");
	$.get( uri, function (response) {
		Plugin_ui.enableButton(".js-ihgdxcfsde4u", "Sign In");
		if(response.success) {
			localStorage.setItem("user-data", JSON.stringify(response['user_data']));
            localStorage.setItem("user-token", JSON.stringify(response['token']));

            var city_info = {
            	city_code: $('.js-hjyt5redsww23').val(),
            	city_name: $('.js-hjyt5redsww23 option:selected').text()
            };

            var brgy_info = {
            	brgy_code: $('.js-kiytgsdfe4w3').val(),
            	brgy_name: $('.js-kiytgsdfe4w3 option:selected').text()
            };

            localStorage.setItem("user-city_info", JSON.stringify(city_info));
            localStorage.setItem("user-brgy_info", JSON.stringify(brgy_info));

            $(".js-jky6abnxvsde")[0].reset();
            window.location.href = "home.php";
		}
		else {
			Swal.fire('Warning', response.message,'warning').then( async () => {
				$(".js-jky6abnxvsde")[0].reset();
			});
		}
	})
});