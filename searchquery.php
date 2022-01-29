<?php 


	require 'connect.php';
	require 'functions.php';

	$s = clean($_GET['s']);

	$query = "SELECT id, firstname, lastname, email, contactno, address, city, province, zipcode, country, CONCAT(firstname, ' ', lastname) as fullname 
	FROM profileinfo WHERE CONCAT(firstname, ' ', lastname) LIKE '".$s."%' OR lastname LIKE '".$s."%' ORDER BY date_joined DESC LIMIT 5";

	if($result = mysqli_query($con, $query)) {

		if(mysqli_num_rows($result) == 0) {
			echo "<ul><li class='none'>No results to display</li></ul>";
		} else {

			echo "<ul>";

			while($row = mysqli_fetch_assoc($result)) {
				echo "<li style='font-size: 13px; margin:0;'>";
				echo "<span class='name'>".$row['fullname']."</span>";

				echo "</div></li>";

			}

			echo "</ul>";

		}

	} else {
		die("Error with the query");
	}

	mysqli_close($con);

?>
