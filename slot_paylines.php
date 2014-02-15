<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Nelson Ricardo: Multi-line Slot Machine Paylines (5 reels, 3 positions per reel, 243 lines total)</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="slotstyle.css">
	</head>

	<body>

		<h2>Nelson Ricardo: Multi-line Slot Machine Paylines<br/>(5 reels, 3 positions per reel, 243 lines total)</h2>

<?php
for ($A = 11; $A <= 13; $A++) {
	for ($B = 21; $B <= 23; $B++) {
		for ($C = 31; $C <= 33; $C++) {
			for ($D = 41; $D <= 43; $D++) {
				for ($E = 51; $E <= 53; $E++) {
					echo "\t\t<h3>$A, $B, $C, $D, $E</h3>\n\n";
					echo "\t\t<table>\n";
						echo "\t\t\t<tr>\n";
							echo "\t\t\t\t<td"; if ($A === 11) {echo " class = \"hit\"";} echo ">&nbsp;</td>\n";
							echo "\t\t\t\t<td"; if ($B === 21) {echo " class = \"hit\"";} echo ">&nbsp;</td>\n";
							echo "\t\t\t\t<td"; if ($C === 31) {echo " class = \"hit\"";} echo ">&nbsp;</td>\n";
							echo "\t\t\t\t<td"; if ($D === 41) {echo " class = \"hit\"";} echo ">&nbsp;</td>\n";
							echo "\t\t\t\t<td"; if ($E === 51) {echo " class = \"hit\"";} echo ">&nbsp;</td>\n";
						echo "\t\t\t</tr>\n";
						echo "\t\t\t<tr>\n";
							echo "\t\t\t\t<td"; if ($A === 12) {echo " class = \"hit\"";} echo ">&nbsp;</td>\n";
							echo "\t\t\t\t<td"; if ($B === 22) {echo " class = \"hit\"";} echo ">&nbsp;</td>\n";
							echo "\t\t\t\t<td"; if ($C === 32) {echo " class = \"hit\"";} echo ">&nbsp;</td>\n";
							echo "\t\t\t\t<td"; if ($D === 42) {echo " class = \"hit\"";} echo ">&nbsp;</td>\n";
							echo "\t\t\t\t<td"; if ($E === 52) {echo " class = \"hit\"";} echo ">&nbsp;</td>\n";
						echo "\t\t\t</tr>\n";
						echo "\t\t\t<tr>\n";
							echo "\t\t\t\t<td"; if ($A === 13) {echo " class = \"hit\"";} echo ">&nbsp;</td>\n";
							echo "\t\t\t\t<td"; if ($B === 23) {echo " class = \"hit\"";} echo ">&nbsp;</td>\n";
							echo "\t\t\t\t<td"; if ($C === 33) {echo " class = \"hit\"";} echo ">&nbsp;</td>\n";
							echo "\t\t\t\t<td"; if ($D === 43) {echo " class = \"hit\"";} echo ">&nbsp;</td>\n";
							echo "\t\t\t\t<td"; if ($E === 53) {echo " class = \"hit\"";} echo ">&nbsp;</td>\n";
						echo "\t\t\t</tr>\n";
					echo "\t\t</table>\n\n";
				}
			}
		}
	}
}
?>
	</body>

</html>