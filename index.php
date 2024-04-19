<?php

/*----------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 * Licensed under the MIT License. See LICENSE in the project root for license information.
 *---------------------------------------------------------------------------------------*/

function sayHello($name) {
	echo "Hello $name!";
}

?>

<html>
	<head>
		<title>Visual Studio Code Remote :: PHP</title>
	</head>
	<body>
		<?php 
			$arr = array(1, 2, 3);
			foreach($arr as $value)
			{
				echo $value. "\n ";
			}
		?>
		<?php
			$soluong = 11;
			$gia = 10000;
			if($soluong < 10)
				$thanhtien = $soluong * $gia;
			elseif ($soluong >= 10 and $soluong <= 20)
					$thanhtien = ($soluong * $gia) * 0.95;
			else
					$thanhtien = ($soluong * $gia) * 0.9;
			
			echo $thanhtien;
		?>
	<?php
	for ($i = 1; $i <= 20; $i++) {
		if ($i % 2 == 0) {
			echo '<span style="color:red; font-weight:bold;">' . $i . '</span> ';
		} else {
			echo '<span style="color:blue; font-style:italic;">' . $i . '</span> ';
		}
	}
	?>
	</body>
</html>