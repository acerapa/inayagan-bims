
$(document).ready(function () {
	$(".js-nmxaxnsdjfgr").text("Cebu");
	$(".js-jkaxndtq1zma").text("City of Talisay");
	$(".js-hbzxcvdfgftre").text( getUserBrgyInfo()['brgy_name']);

	var report_refid 	= Plugin_refid.generateLocal('BIR');
	$(".js-jkas7yasgcvz").text(report_refid);


	fetchBrgyProfileLocal(function (brgy_profile) {
		appendIncidentTypeList(brgy_profile, '0');
	});
});

$(".js-klzxnmdfge3w").click(function () {
	Swal.fire({
		title: "New Incident Type",
		text: "Provide option that currently doesn't exist from the list",
		input: 'text',
		inputAttributes: {
			autocapitalize: 'off',
			autocomplete: 'off'
		},
		showCancelButton: true,
		confirmButtonText: 'OK'
	})
	.then((result) => {
        if (result.isConfirmed) {
            if(result.value == '') {
                Swal.fire("Warning", "Input is required", "warning");
            }
            else {
            	var refid 	= Plugin_refid.generateLocal('IRT');
                var args 	= {
                    table: "cims_brgy_incident_report_type ",
                    column: {
                        reference_id: refid,
                        name: result.value,
                        city_code: getUserCityInfo()['city_code'],
                        brgy_code: getUserBrgyInfo()['brgy_code'],
                        created_by: Plugin_auth.getLocalUser()['reference_id']
                    }
                };
                
                showLoading();
                Plugin_ui.disableButton(".js-klzxnmdfge3w","Wait...");
                $.get( gv.api + "api/plugin_query/insertGetId?" + $.param(args), function (response) {
                	fetchBrgyProfile(function (brgy_profile) {
                		Plugin_ui.enableButton(".js-klzxnmdfge3w","Add Option");
                		hideLoading();
                		appendIncidentTypeList(brgy_profile, refid);
                	});
                });

            }
        }
    });
});

$(".js-jkatrsdfgder").click(function () {
	Swal.fire({
		title: 'Submit Incident report?',
		showCancelButton: true,
		confirmButtonText: 'Submit'
	}).then((result) => {
		if (result.isConfirmed) {
			var reference_id = Plugin_refid.generateLocal('BIR');
			var args = {
				reference_id: reference_id,
				city_code: getUserCityInfo()['city_code'],
				brgy_code: getUserBrgyInfo()['brgy_code'],
				incident_type: $(".js-jkazxbndfghr").val(),
				incident_date: $(".js-hjafcxdfsrde").val(),
				incident_time: $("js-nmzw39pfzw7f").val(),
				location_text: $(".js-kla490cgdsew").val(),
				location_lat: $(".js-jkagxzb9akme").val(),
				location_lon: $(".js-mzxndgw38xsf").val(),
				incident_narrative: $(".js-jafgxdfrse34").val(),
				action_taken: $(".js-ud29zasjkfgr").val(),
				recomendation: $(".js-jkaxnmfghder").val(),
				prepared_date: $(".js-ko56sdfgder4").val(),
				prepared_by: $(".js-klayudrtefger").val(),
				created_by: Plugin_auth.getLocalUser()['reference_id']
			};

			showLoading();
			$.get( gv.api + "cims/incident_report_registration?" + $.param(args), function (response) {
				hideLoading();
				console.log(response);
			});
		}
	})
});

function appendIncidentTypeList(brgy_profile, selected) {
	var list = brgy_profile['barangay']['incident_rep_type'];
	console.log(list);
	$(".js-jkazxbndfghr").html('');
	$(".js-jkazxbndfghr").append(`<option value="0">Select Type</option>`);
	$.each(list, function (i) {
		if( list[i]['reference_id'] == selected) {
			$(".js-jkazxbndfghr").append(`<option value='`+ list[i]['reference_id'] +`' selected>`+ list[i]['name'] +`</option>`);
		}
		else {
			$(".js-jkazxbndfghr").append(`<option value='`+ list[i]['reference_id'] +`'>`+ list[i]['name'] +`</option>`);
		}
	})
}
