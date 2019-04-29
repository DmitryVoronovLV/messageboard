Make a search by the name of the:
<select id="sel_parametre">
  <option value="country">Country</option>
  <option value="city">City</option>
</select>
<br>
<table>
<tr>
	<td>Name<td>
	<td>:</td>
	<td><input type="text" id="search_string"></td>
	<td><input type="button" value="search" onclick="search()"></td>
</tr>
</table>
<a href="{{url('/')}}">Countries</a>

<script>
	function search() {
		var selectElement = document.getElementById('sel_parametre');
		var selectedOption = selectElement.options[selectElement.selectedIndex].value;
		if(selectedOption==-1){
				alert("Please select a search parametre");
				return false;
		}
		var searchString=document.getElementById("search_string").value.trim();
		if (searchString.length==0) {
			alert("Please enter a country name");
			document.getElementById("search_string").focus();
			return false;
		}
		window.location.href="/search/results/"+selectedOption+"/"+searchString;
	}
</script>
