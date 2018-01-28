<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" >
		<title>Wczytywanie danych z bazy danych</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
<body>

<div id = "container">
	<div id="content">
			<?php
			$link = mysqli_connect("127.0.0.1", "root", "", "git_zaliczenie");
			$link->set_charset("utf8");
			if(!$link) echo 'Nie połączono z bazą danych';

			$result = $link->query("SELECT name, mail, sex FROM users");
			?>

		<span class="middletitle"><center>Nasi klienci</center></span>
			<div id = "klienci">
			<table border = "1" align="center">
				<tr><th>Imię i nazwisko</th><th>Mail</th><th>Płeć</th></tr>
					<?php
					if($result)
					{
						echo "<tr>";
						while($newtab = $result->fetch_assoc())
						{
							echo "<td>".$newtab['name'] ."</td>"."<td>".$newtab['mail']."</td>"."<td>".$newtab['sex'] ."</td>";
						}
						echo "</tr>";
					}
					?>
			</table>

			<a href="index.html">Cofnij</a>
			</div>
	</div>
</div>
</body>
</html>
