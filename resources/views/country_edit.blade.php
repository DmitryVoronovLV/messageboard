We will edit a country <b>{{ $country->country_name }}</b>:
<table>
<tr>
	<td>country Name<td>
	<td>:</td>
	<td><input type="text" id="country_name"></td>
	<td><input type="text" id="country_code"></td>
	<td><input type="button" value="edit" onclick="changeCountry()"></td>
</tr>
</table>
<script>
	function changeCountry() {
		var countryName=document.getElementById("country_name").value.trim();
		if (countryName.length==0) {
			alert("Please enter a country name");
			document.getElementById("country_name").focus();
			return false;
		}
		var countryCode=document.getElementById("country_code").value.trim();
		if (countryCode.length==0) {
			alert("Please enter a country name");
			document.getElementById("country_name").focus();
			return false;
		}
		window.location.href="/country/update/"+{{$country->country_id}}+"/"+countryName+"/"+countryCode.toUpperCase();
	}
</script>
