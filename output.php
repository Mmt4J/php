<!DOCTYPE html>
<html>
<head>
	<title>Learning php: Ou</title>
</head>
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
</style>
<body>

<?php 

$variable = "A little lower than the angel";
$read = true;

if ($read) {
	$result = "You have read the book, $variable";
} else {
	$result = "You have not read the book, {$variable}";
}

echo $result;

?>

</body>
</html>