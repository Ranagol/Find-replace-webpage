<?php

if (isset($_POST)) {
	$text = $_POST["text"];
	$searchFor = $_POST["searchFor"];
	$replaceWith = $_POST["replaceWith"];
	
} else {
	echo "shit";
}

if (empty($text)||empty($searchFor)||empty($replaceWith)) {
	echo "Please fill in all data fields.";
}

$newText = str_replace($searchFor,$replaceWith,$text);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Find & Replace</title>
</head>
<body>
<h3>Find & Replace</h3>



<form action="index.php" method="post" >
	<textarea rows="10" cols="50" name="text">
		<?php 
			echo $newText; 
		?>
	</textarea>
	<p>Search for:</p>
	<input type="text" name="searchFor" >
	<p>Replace with:</p>
	<input type="text" name="replaceWith">
	<p> </p>
	<input type="submit" value="Search and replace" name="submit">
</form>
<p>The quick brown fox jumped over the lazy dog.</p>
<p>Search for: fox</p>
<p>Replace with: monkey</p>

</body>
</html>


