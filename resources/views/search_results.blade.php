@if (isset($countries))
	@if ( count($countries)==0)
		<p color='red'> There is no record in the database!</p>
	@else
		<table border="1"> 
			<tr> 
				<td> Country Id </td> 
				<td> Country Name </td> 
				<td> Country Code </td>
				<td> cities </td>
			</tr>
		@foreach ($countries as $country)
			<tr> 
				<td> {{ $country->country_id }} </td>
				<td> {{ $country->country_name }} </td>
				<td> {{ $country->country_code }} </td>
				<td> <input type="button" value="show" onclick="showCities({{ $country->country_id }})"> </td>
			</tr>
		@endforeach
		</table>
	@endif
@endif


@if (isset($cities))
	@if (count($cities)==0)	
		<p color='red'> There is no city in the database!</p>
	@else
		<table border="1"> 
			<tr> 
				<td> City Id </td> 
				<td> City Name </td> 
				<td> Country Id </td>
				<td>  </td>
			</tr>
		@foreach ($cities as $city)
			<tr> 
				<td> {{ $city->city_id }} </td>
				<td> {{ $city->city_name }} </td>
				<td> {{ $city->country_id }} </td>
				<td> <input type="button" value="other cities of the country" onclick="showOtherCities({{ $city->country_id }})"> </td>
			</tr>
		@endforeach
		</table>
	@endif
@endif
<a href="{{url('/')}}">Countries</a>

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
	function showOtherCities(countryID) {
		window.location.href="/city/"+countryID;
	}
	function deleteCountry(countryID) {
		window.location.href="/country/delete/"+countryID;
	}
</script>
