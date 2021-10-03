<html>
	<header><a class="active" href="dashboard">Home</a></header>
</html>
<?php // CST-256 page by team.
	use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;

	$controller = new AdminController();
	$controller->adminPanel();
?>

<html>
	<br><br>
	<form action='deleteUser' method='POST'>
		<label for='userID'>Enter an ID to Delete:</label>
		<input id='userID' name='userID'>@csrf
		<button type='submit' class='btn btn-primary'>Delete User</button>
	</form>

</html>