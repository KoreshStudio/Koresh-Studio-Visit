<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Блог</title>
</head>

<body>
<?php
require "header.php";
?>

<center><h1>Блог</h1></center>

<?php
$blog = new mysqli('localhost', 'root', 'root', 'blogkoreshstudio');
$blog->query('SET NAMES "utf8"');

$notes = $blog->query('SELECT `name`, `text`, `date` FROM `notes`');

if($notes->num_rows > 0) {
	while($result = $notes->fetch_assoc()) {
		echo '<h3>'.$result['name'].'</h3>';
		echo $result['text'].'<br>';
		echo "Опубликовано: ".$result['date'].'<br>';
	}
}

$blog->close();
?>

</body>

</html>