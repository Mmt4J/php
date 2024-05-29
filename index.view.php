<!DOCTYPE html>
<html>
<head>
	<title>Learning php: lambdaFunction</title>

	<style>
		body{
			background-color: black;
			color: gray;
			display: grid;
			justify-content: center;
			align-items: center;
			height: 100vh;
			font-size: 36px;
			margin: 0;
		}
		a{
			text-decoration: none;
		}
		ul{
			list-style: none;
		}
	</style>
</head>
<body>


<ul>
	<?php foreach ($filteredBooks as $book) : ?>

		<li>
			<a href="<?= $book['purchaseUrl'] ?>">
			<?= $book['name'] ?> (<?= $book['releasedYear'] ?>) by <?= $book['authour'] ?>
		</a>
		</li>

	<?php endforeach ?>
</ul>


</body>
</html>