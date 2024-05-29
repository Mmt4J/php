<!DOCTYPE html>
<html>
<head>
	<title>Advance Php: Array</title>
</head>
<body>

<?php 

$books = [
	"The new generation",
	"A little lower than the angel",
	"Juices",
	"How to deal with demons"
]
?>

<ul>
	<?php foreach ($books as $book):?>

	<li><?= $book ?></li>

	<?php endforeach?>
</ul>
</body>
</html>