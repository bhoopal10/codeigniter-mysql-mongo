<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.equal-col{
			width: 39%;
			border:1px dashed #000000;
		}
	</style>
</head>
<body>
	<div class="equal-col">
		<h2>Form</h2>
		<form action="store-user" method="post">
			<input type="text" placeholder="First Name" name="first_name"> <br>
			<input type="text" placeholder="Last Name" name="last_name"> <br>
			<input type="text" placeholder="Email" name="email"> <br>
			<input type="submit" value="submit" name="submit"> <br>
		</form>
	</div>
	<div class="equal-col">
		<h2>Mysql</h2>
		<ul>
			<?php foreach($mysql as $sql) { ?>
			<li><?php echo json_encode($sql) ?></li>
			<?php } ?>

		</ul>
	</div>
	<div class="equal-col">
		<h2>Mongo</h2>
		<ul>
			<?php foreach($mongod as $mongo) { ?>
			<li><?php echo json_encode($mongo) ?></li>
			<?php } ?>

		</ul>
	</div>
</body>
</html>