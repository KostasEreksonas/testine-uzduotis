<!DOCTYPE HTML>
<!-- -->
<!-- -->
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Elektronikos prekių parduotuvė</title>
		<link rel="stylesheet" type="text/css" href="stiliai.css" />
	</head>
	<body>
		<?php include "db-vartotojas.php"; $conn = OpenCon(); $sql = "SELECT * FROM Prekes"; $user = $conn -> query($sql); while($row = $user -> fetch_assoc()) {$rows[] = $row;}  ?>
		<button class="button" type="button" id="atsijungimas" onclick="location.href='index.html'">Atsijungti</button>
		<table>
			<tr>
				<th>ID</th>
				<th>Kategorija</th>
				<th>Modelis</th>
				<th>Gamintojas</th>
				<th>Sandelyje</th>
			</tr>
			<?php foreach ($rows as $row) {print "<tr><td>".$row['ID']."</td><td>".$row['kategorija']."</td><td>".$row['modelis']."</td><td>".$row['gamintojas']."</td><td>".$row['yraSandelyje']."</td></tr>";} ?>
		</table>
		<?php CloseCon($conn); ?>
	</body>
</html>
