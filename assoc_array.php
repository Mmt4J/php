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
			'purchaseUrl' => 'example.com'
		],
		[
			'name' => 'A little lower than the angel',
			'authour' => 'Bisi Adedini',
			'purchaseUrl' => 'example.com'
		],
		[
			'name' => 'Juices',
			'authour' => 'Samson Adedokun',
			'purchaseUrl' => 'example.com'
		]
	] ;
?>

<ul>
	<?php foreach ($books as $book) : ?>

		<li>
			<a href="<?= $book['purchaseUrl'] ?>">
			<?= $book['name'] ?>
		</a>
		</li>

	<?php endforeach ?>
</ul>


</body>
</html>