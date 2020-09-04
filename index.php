<!DOCTYPE html>
<html>

	<head>
		<title>My site</title>
	</head>



	<body>
		<?php
		echo 'Hello, world!';//Вывод
		?></br>
		<?php
		$a = 100;
		echo $a;
		$b = array(1, 2, 3, 4, 5);
		?></br>
		<?php
		echo $b[2];
		?>
		<?php
			$w = 'Rac';
			$e = 'War';
			echo $w.' '.$e;
		?><br>
		<?php
			$w= 5;
			$t = 7;
			if (2+2 == 5){
				echo $w;
			} else 
			{ echo $t;
		};
		?>
		<?php
		for($i = 0; $i <= 10; $i++)
		{echo 'Hello<br>';}
		?>

	</body>

</html>