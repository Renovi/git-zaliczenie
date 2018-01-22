<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" >
<title>Wczytywanie danych z bazy danych</title>
</head>
<body>
<div class = "container">
<?php
$link = mysqli_connect("127.0.0.1", "root", "", "git_zaliczenie");
$link->set_charset("utf8");
if(!$link) echo 'Nie połączono z bazą danych';

$result = $link->query("SELECT name, mail, sex FROM users");

if($result)
{
	while($newtab = $result->fetch_assoc())
	{
		echo $newtab['name'] ." ".$newtab['mail']." ".$newtab['sex'] ."<br>";
	}
}
?>
</div>
</body>
</html>
