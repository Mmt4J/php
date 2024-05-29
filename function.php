<!DOCTYPE html>
<html>
<head>
	<title>Learning php: Assoc</title>

	<style>
	body{
		background-color: black;
		color: gray;
		display: grid;
		justify-content: center;
		align-items: center;
		height: 100vh;
		font-size: 36px;
		font-family: sans-serif;
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

	function filterByAuthour ($books, $authour)
	{
		$filter = [];

		foreach ($books as $book) {
			if( $book['authour'] === $authour ){
				$filter[] = $book;
			}
		}
		return $filter;
	}
?>

<ul>
	<?php foreach (filterByAuthour($books, 'Samson Adedokun') as $book) : ?>

		<li>
			<a href="<?= $book['purchaseUrl'] ?>">
			<?= $book['name'] ?> (<?= $book['releasedYear'] ?>) by <?= $book['authour'] ?>
		</a>
		</li>

	<?php endforeach ?>
</ul>


</body>
</html>