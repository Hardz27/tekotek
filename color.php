<!DOCTYPE html>
<html>
<head>
	<title>Belajar php</title>

</head>
<body>
	<p>Tekotek-kotek anak ayam turun 100</p>
	<?php
		for ($i=99;$i>=1;$i--) {
			if ($i % 2 == 0) {
				$color = "red";
			} else {
				$color = "orange";
			}
			echo "<span style='color:$color; font-family: Helvetica'>Mati satu tinggal $i</span><br><br>";
		}
	?>
</body>
</html>

