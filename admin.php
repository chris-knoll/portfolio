<?php
if (!isset($_COOKIE['user']))
{
	// Need the functions:
	require('./inc/login_functions.inc.php');
	redirect_user();
}
else {
	$loggedin = "Logged in as <b>" . $_COOKIE['user'] . "</b> ";
}

// Include the database
require_once('../../../db.php');
?>
<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="./css/table.css">
</head>
<body>
<?php echo $loggedin; ?>
<!-- Logout link -->
<br /><a href="./logout.php">Logout</a>

<!-- Database table -->
<div id="tablewrapper">
	<table id="messages" class="display">
		<thead>
			<th>Name</th>
			<th>Email</th>
			<th>Message</th>
		</thead>
		<?php
		//Query the database for all of the volunteers
		$query = "SELECT name, email, message FROM cknoll_grcc.messages ";

		//Send the query to the database
		$rows = mysqli_query($connection, $query);

		//Loop through each result and display in a row on the table
		while($row = mysqli_fetch_array($rows))
		{
		$id = $row['id'];
			echo "<tr>";
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['email'] . "</td>";
				echo "<td>" . $row['message'] . "</td>";
			echo "</tr>";
		}
		?>

	</table>
</div>

<!-- Scripts for DataTable jquery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function(){
	    $('#messages').DataTable();
	});
</script>
</body>
