<?php 

include('includes/navbar.php');

?>

<br>
<br>

<section id="search_store">
		<h2 style="text-align: center;">Search For The Book Store</h2>
		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Book Store" title="Type in a name">

		<table id="myTable">
		  <tr class="header">
		    <th style="width:60%;">Name</th>
		    <th style="width:40%;">Country</th>
		  </tr>
		  <tr>
		    <td>Alfreds Futterkiste</td>
		    <td>Germany</td>
		  </tr>
		  <tr>
		    <td>Berglunds snabbkop</td>
		    <td>Sweden</td>
		  </tr>
		  <tr>
		    <td>Island Trading</td>
		    <td>UK</td>
		  </tr>
		  <tr>
		    <td>Koniglich Essen</td>
		    <td>Germany</td>
		  </tr>
		  <tr>
		    <td>Laughing Bacchus Winecellars</td>
		    <td>Canada</td>
		  </tr>
		  <tr>
		    <td>Magazzini Alimentari Riuniti</td>
		    <td>Italy</td>
		  </tr>
		  <tr>
		    <td>North/South</td>
		    <td>UK</td>
		  </tr>
		  <tr>
		    <td>Paris specialites</td>
		    <td>France</td>
		  </tr>
		</table>
	</section>

<script>
	function myFunction() {
	  var input, filter, table, tr, td, i, txtValue;
	  input = document.getElementById("myInput");
	  filter = input.value.toUpperCase();
	  table = document.getElementById("myTable");
	  tr = table.getElementsByTagName("tr");
	  for (i = 0; i < tr.length; i++) {
	    td = tr[i].getElementsByTagName("td")[1]; //1 for places and 0 for names
	    if (td) {
	      txtValue = td.textContent || td.innerText;
	      if (txtValue.toUpperCase().indexOf(filter) > -1) {
	        tr[i].style.display = "";
	      } else {
	        tr[i].style.display = "none";
	      }
	    }       
	  }
	}
</script>

<?php 

include('includes/footer.php');

?>