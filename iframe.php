<?php 
	session_start();

	if (($_SERVER['REQUEST_METHOD'] == 'GET') && (isset($_GET['go']))) {

		$_SESSION['url'] = $_GET['url'];

		echo "<iframe src='" . $_SESSION['url'] . "'></iframe>";
	}
?>
	<div class="title">Clickjacing Tester</div>
	<form method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
		<input type="text" placeholder="Write your url here to test it..."  name="url">
		<input type="submit" name="go" value="Go">
	</form>
