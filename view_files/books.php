<?php
	require_once("../classes/book_class.php");
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Books in My Library</title>
</head>
<body>
	<h2>Books in My Library</h2>
<?php
	$book = new Book;
	$books = $book->get_books();
	
	var_dump($books);
	
	//display here a table listing the book title, author info and genre with links to edit and delete the author
	
	//create a form to add book here
?>
</body>
</html>