<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>ADMIN</title>
</head>
<body>
	<h1>Zone Admin</h1>

	<?php
	$json = file_get_contents(__DIR__.'/../data/last_message.json');
	$msg = json_decode($json);
	?>
	<div>
		<div>Nom
			<span><?= $msg->name ?></span>
		</div>
		<div>Message
			<span><?= $msg->message ?></span>
		</div>
	</div>

</body>
</html>