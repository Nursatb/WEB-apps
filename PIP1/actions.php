<?php
	session_start();
	$tm = microtime(true);
	$ts = date('m/d/Y h:i:s a');
	$X = $_GET["Xvalue"];
	$Y = $_GET["Yvalue"];
	$R = $_GET["R"];
	$tr = false;
	$right = is_numeric($X) && is_numeric($Y) && is_numeric($R) &&
	 in_array($Y, array("-5","-4","-3","-2","-1","0","1","2","3")) && floatval($X) >=-3 && floatval($X) <= 3 &&
	in_array($R, array("1", "1.5","2", "2.5", "3"));
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body>
	<table border="1px">
		<tr>
	        <td>
	          X
	        </td>
	        <td>
	          Y
	        </td>
	        <td>
	          R
	        </td>
	        <td>
	          Result
	        </td>
	        <td>
	          Current time
	        </td>
	        <td>
	          Execution time
	        </td>

	        <td>
	        	TR
	        </td>
      </tr>


      <?php
       if ($right) {
        $X = (double)$_REQUEST['Xvalue'];
        $Y = (double)$_REQUEST['Yvalue'];
        $R = (double)$_REQUEST['R'];
        $_SESSION['len']++;
        $len = $_SESSION['len'];
        $_SESSION['X'.$len] = $X;
        $_SESSION['Y'.$len] = $Y;
        $_SESSION['R'.$len] = $R;
		if(($R*$R >=  $X*$X + $Y*$Y)  && ($Y >= 0 && $X <= 0)){ //circle
			$tr = true;
		} else if (($R >= $X && $R/2 >= $Y) && ($X >= 0 && $Y >= 0)){ //прямоуг
			$tr=true;
		} else if ( ($Y >= -($X/2 + $R)) && ($X <= 0 && $Y <= 0)) {
			$tr = true;
		}
        else $tr = false;
        $_SESSION['tr'. $len] = $tr;
        $rt = number_format(1000 * (microtime(true)-$tm),5) . ' msec';
        $_SESSION['ts' . $len] = $ts;
        $_SESSION['rt' . $len] = $rt;
    	}
      for($i = $len; $i > 0; $i--){
        $X = $_SESSION['X'.$i];
        $Y = $_SESSION['Y'.$i];
        $R = $_SESSION['R'.$i];
        $tr = $_SESSION['tr'.$i];
        $ts = $_SESSION['ts'.$i];
        $rt = $_SESSION['rt'.$i];
      ?>


		<tr>
			<td>
				<?php
				echo $X; ?>
			</td>
				
			<td>
				<?php
				echo $Y; ?>
			</td>

			<td>
				<?php
				echo $R; ?>				
			</td>

			<td>
				<?php
					if ($tr == true ) {
						echo "попал";
					} else { echo "не попал";}
				 ?>
			</td>

			<td>
				<?php
				echo $ts; ?>
			</td>

			<td>
				<?php
				echo $rt; ?>
			</td>

			<td>
				<?php
					echo $tr;
				 ?>
			</td>


		</tr>
	<?php } ?>
	</table>


</body>
</html>