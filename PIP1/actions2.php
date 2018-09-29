<!DOCTYPE html>
<html>
<head>
	<?php
		$tm = microtime(true);
		$ts = date('m/d/Y h:i:s a');
		$X = (double)$_POST["Xvalue"];
		$Y = (double)$_POST["Yvalue"];
		$R = (double)$_POST["R"];
		$tr = false;
 


	if($R*$R >=  $X*$X + $Y*$Y  && $Y >= 0 && $X <= 0){
		$tr = true;
	}
	
	if ($X <= $R && $Y <= $R/2 && $X >= 0 && $Y >= 0){
		$tr=true;
	}

			
	if ($Y = -($X/2 + $R) && $X <= 0 && $Y <= 0) {
		$tr = true;
	}


	if ($tr == true ) {
		echo "попал";
		echo $X;
		# code...
	} else { echo "не попал";}

	?>
</head>
<body>
	<table>
		<tr>
			<td>
				LOL1
			</td>			
			<td>
				LOL2
			</td>

		</tr>
	</table>

</body>
</html>
