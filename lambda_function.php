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

<?php 
	$books =[
		[
			'name' => 'The new generation',
			'authour' => 'Matthew Alabi',
			'releasedYear' => '2024',
			'purchaseUrl' => 'example.com'
		],
		[
			'name' => 'A little lower than the angel',
			'authour' => 'Bisi Adedini',
			'releasedYear' => '2019',
			'purchaseUrl' => 'example.com'
		],
		[
			'name' => 'Juices',
			'authour' => 'Samson Adedokun',
			'releasedYear' => '2014',
			'purchaseUrl' => 'example.com'
		]
	] ;

	$filter = function ($items, $key, $value)
	{
		$filter = [];

		foreach ($items as $item) {
			if( $item[$key] === $value ){
				$result[] = $item;
			}
		}
		return $result; 
	};

	$filterBooks = $filter($books, 'releasedYear','2024')
?>

<ul>
	<?php foreach ($filterBooks as $book) : ?>

		<li>
			<a href="<?= $book['purchaseUrl'] ?>">
			<?= $book['name'] ?> (<?= $book['releasedYear'] ?>) by <?= $book['authour'] ?>
		</a>
		</li>

	<?php endforeach ?>
</ul>


</body>
</html>