<?php
	require_once("../classes/author_class.php");
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Authors in My Library</title>
</head>
<body>
	<h2>Authors in My Library</h2>
<?php
	$author = new Author;
	$authors = $author->get_authors();
	
	var_dump($authors);
	
	//display here a table listing the author name with links to edit and delete the author
	
	//create a form to add author here	
?>
</body>
</html>

