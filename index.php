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


$filteredBooks = array_filter($books, function ($book){
	return $book['releasedYear'] >= 2019;
});



require('index.view.php'); 
