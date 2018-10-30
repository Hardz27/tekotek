<!DOCTYPE html>
<html>
<head>
	<title>Belajar php</title>

</head>
<body>
	<?php
		for ($i=100;$i>=1;$i--) {
			if ($i % 2 == 0) {
				$color = "red";
			} else {
				$color = "blue";
			}
			echo "<span style='color:$color; font-family: Helvetica'>$i</span><br>";
		}
	?>
</body>
</html>

