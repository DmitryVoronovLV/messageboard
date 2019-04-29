@if (count($countries)==0)
	<p color='red'> There is no record in the database!</p>
@else
	<table border="1"> 
		<tr> 
			<td> Country Id </td> 
			<td> Country Name </td> 
			<td> Country Code </td>
			<td> cities </td>
			<td>  </td>
		</tr>
	@foreach ($countries as $country)
		<tr> 
			<td> {{ $country->country_id }} </td>
			<td> {{ $country->country_name }} </td>
			<td> {{ $country->country_code }} </td>
			<td> <input type="button" value="show" onclick="showCities({{ $country->country_id }})"> </td>
			<td> 
				<input type="button" value="update" onclick="updateCountry({{ $country->country_id }})"> 
				<input type="button" value="delete" onclick="deleteCountry({{ $country->country_id }})"> 
			</td>
		</tr>
	@endforeach
	</table>
@endif
<p> <input type="button" value="New Country" onClick="createCountry()"> </p>
<p> <input type="button" value="Search" onClick="search()"> </p>

<script>
	function search() {
		window.location.href="/search/";
	}
	function createCountry() {
		window.location.href="/country/new/";
	}
	function showCities(countryID) {
		window.location.href="/city/"+countryID;
	}
	function updateCountry(countryID) {
		window.location.href="/country/edit/"+countryID;
	}
	function deleteCountry(countryID) {
		window.location.href="/country/delete/"+countryID;
	}
</script>
