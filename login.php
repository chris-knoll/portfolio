<?
// This page processes the login formsubmission.
// Upon successful login, the user is redirected.
// Two included files are necessary.
// Send NOTHING to the Web browser prior to the setcookie( ) lines!

//Check if the form has been submitted:
if(isset($_POST['submit']))
{
	//For processing the login
	require('./inc/login_functions.inc.php');

	// Include the db connection
	require('../../../db.php');

	// Check the login:
	list ($check, $data) = check_login($connection, $_POST['user'], $_POST['pass']);

	if($check) // If their user / pass is good
	{
		// Set the cookies:
		setcookie('user', $data['user']);

		//Redirect
		logged_in();
	}
	else //Bad login info
	{
		// Assign $data to $errors for error reporting in the login_page.inc.php file
		$errors = $data;
      echo "<p>Incorrect username / password.</p>";
	}

	mysqli_close($connection); // Close database connection
}

?>
<!-- Login form -->
<form action="" method="POST">
   User <input type="text" name="user" required>
   Password <input type="password" name="pass" required>
   <input type="submit" name="submit" value="Login">
</form>
