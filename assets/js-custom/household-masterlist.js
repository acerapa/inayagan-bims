
var household_masterlist = {
	table: {}
};

$(document).ready(function () {
	fetchHousehold(getUserCityInfo()['city_code'], getUserBrgyInfo()['brgy_code'], 1);
});


function fetchHousehold(city_code, brgy_code, page) {
	showLoading();
	Plugin_query.getRecordPaginate("cims_household", "all", [["city_code","=",city_code],["brgy_code","=",brgy_code]], "name", "asc", 25, page, function (response) {
		hideLoading();
		appendHouseholdRows(response);
	});
}



function appendHouseholdRows(response) {
	household_masterlist.table = response;
	var data = response.data;
	$(".js-hjgva8iasdhjd tbody").html('');
	$.each(data, function (i) {
		$(".js-hjgva8iasdhjd tbody").append(`
			<tr>
        		<td>`+ (i + 1) +`</td>
        		<td>`+ data[i]['reference_id'] +`</td>
        		<td>`+ data[i]['name'] +`</td>
        		<td>`+ ownershipName(data[i]['ownership']) +`</td>
        		<td>`+ getSitioName(data[i]['sitio_refid']) +`</td>
        		<td>`+ getPurokName(data[i]['purok_refid']) +`</td>
        		<td>`+ data[i]['latitude'] +`</td>
        		<td>`+ data[i]['longitude'] +`</td>
        		<td>`+ Plugin_datetime.dbDateOnly(data[i]['created_at']) +`</td>
        		<td>
        			<select class="js-hjvzxbnsfgde4" style="border: none;">
        				<option value='0'>Select Action</option>
        				<option value='update_name'>Update Name</option>
        				<option value='update_ownership'>Update Ownership</option>
        				<option value='change_sitio'>Change Sitio</option>
        				<option value='change_purok'>Change Purok</option>
        				<option value='change_geo'>Change Geolocation</option>
        				<option value='delete'>Delete</option>
        			</select>
        		</td>
        	</tr>`);
	});
}