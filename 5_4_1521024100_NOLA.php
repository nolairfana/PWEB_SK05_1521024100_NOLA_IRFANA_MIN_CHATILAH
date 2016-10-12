!DOCTYPE html>
<html>
<head>
<body>
	<?php
		$Bilangan = array 
		{
		array ("Baris 0",30,35,40),
		array ("Baris 1",26,31,36),
		array ("Baris 2",17,22,27),
		array ("Baris 3",18,23,28),
		array ("Baris 4",29,34,39),
		array ("Baris 5",10,15,20),
		array ("Baris 6",11,16,21),
		array ("Baris 7",100,105,110)
	};
	echo $Bilangan[0][5].": 30 ".$Bilangan[0][6].",35 ".$Bilangan[0][7].". <br>";
	echo $Bilangan[1][4].": 26 ".$Bilangan[1][5].", 31 ".$Bilangan[1][6].". <br>";
	echo $Bilangan[2][2].": 17 ".$Bilangan[2][3].", 22".$Bilangan[2][4].". <br>";
	echo $Bilangan[3][2].": 18 ".$Bilangan[3][3].", 23".$Bilangan[3][4].". <br>";
	echo $Bilangan[4][2].": 29 ".$Bilangan[4][3].", 34".$Bilangan[4][4].". <br>";
	echo $Bilangan[5][0].": 10 ".$Bilangan[5][1].", 15".$Bilangan[5][2].". <br>";
	echo $Bilangan[6][0].": 11 ".$Bilangan[6][1].", 16".$Bilangan[6][2].". <br>";
	echo $Bilangan[7][2].": 100 ".$Bilangan[7][3].", 105".$Bilangan[7][4].". <br>";

	?>
</body>
</head>
</html>