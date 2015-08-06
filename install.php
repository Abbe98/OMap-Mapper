<?php
require 'core/int.php';

try {
  $pdo = SimplePDO::getInstance('mysql:host=' . HOST . ';dbname=' . DBNAME, USERNAME, PASSWORD);
} catch(PDOException $e) {
  echo '<p class="notification red">Error: could not connect to Database.<br>"' . $e . '"<p>';
}

  #TODO 
  //check if installed

?>
<!doctype HTML>
<html>
		<head>
			<title>Install</title>
			<meta charset="UTF8" />
			<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
			<link rel="stylesheet" type="text/css" href="ui/style.css">
		</head>
	<body>
		<header>
			<h1>Install OMap Mapper</h1>
			<p>Some nice string</p>
		</header>
		<main>

			<h2>Language</h2>
				<form>
				<label>Language:<br>
				<select>
					<?php
					foreach ($languages as $language) {
						echo '<option value="' . $language . '">' . langcode($language) . '</option>';
					}
					?>
				</select>
				</label>
			</form>

			<h2>Admin</h2>
			<p class="notification green">admin story</p>
			<form action="" method="post">
				<label>Password:<br>
					<input type="password" name="password" />
				</label><br>
				<input type="submit" />
			</form>
		</main>
	</body>
</html>