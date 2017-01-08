<?php 
$user = getUserData(); ?>

<h1>Bio</h1>

<h2><? $user['name'] ?><?php $user['first_name'] ?></h2>


<h3><? $user['occupation'] ?></h3>

<?php
foreach($user['experiences'] as $experience) : ?>
	<li><i><?= $experience['year'] ?></i> | <?= $experience['company'] ?></li>
	<?php endforeach; ?>