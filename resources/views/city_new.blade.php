We will add a city for <b>{{ $country_name }}</b>:
<table>
<tr>
	<td>City Name<td>
	<td>:</td>
	<td><input type="text" id="city_name"></td>
	<td><input type="button" value="add" onclick="addCity()"></td>
</tr>
</table>
<script>
	function addCity() {
		var cityName=document.getElementById("city_name").value.trim();
		if (cityName.length==0) {
			alert("Please enter a city name");
			document.getElementById("city_name").focus();
			return false;
		}
		window.location.href="/city/insert/"+{{$country_id}}+"/"+cityName;
	}
</script>
