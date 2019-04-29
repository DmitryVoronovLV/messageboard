We will add a new Country:
<table>
<tr>
	<td>Country Name<td>
	<td>:</td>
	<td><input type="text" id="country_name"></td>
	<td><input type="text" id="country_code"></td>
	<td><input type="button" value="add" onclick="addCountry()"></td>
</tr>
</table>
<script>
	function addCountry() {
		var countryName=document.getElementById("country_name").value.trim();
		if (countryName.length==0) {
			alert("Please enter a country name");
			document.getElementById("country_name").focus();
			return false;
		}
		var countryCode=document.getElementById("country_code").value.trim();
		if (countryCode.length==0) {
			alert("Please enter a country Code");
			document.getElementById("country_name").focus();
			return false;
		}
		window.location.href="/country/insert/"+countryName+"/"+countryCode.toUpperCase();
	}
</script>
