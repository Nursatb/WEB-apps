<?php
	session_start();
	date_default_timezone_set("UTC");
	date_default_timezone_set('Europe/Moscow');
	$tm = microtime(true);
	$ts = date('m/d/Y h:i:s a');
	$X = $_REQUEST["Xvalue"];
	$Y = $_REQUEST["Yvalue"];
	$R = $_REQUEST["R"];
	$tr = false;
	$right = is_numeric($X) && is_numeric($Y) && is_numeric($R) && floatval($X) >=(-3) && floatval($X)<= 3 && in_array($Y, array("-5","-4","-3","-2","-1","0","1","2","3"))  &&
	in_array($R, array("1", "1.5","2", "2.5", "3"));

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<style type="text/css">
		table {
		    border-collapse: collapse;
		    width: 100%;
		}

		th, td {
		    text-align: left;
		    padding: 8px;
		}

		tr:nth-child(even){background-color: #f2f2f2}

		th {
		    background-color: rgb(95,151,252);
		    color: white;
		}
    </style>

</head>
<body>
	<table border="1px">
		<tr>
	        <th>
	          X
	        </th>
	        <th>
	          Y
	        </th>
	        <th>
	          R
	        </th>
	        <th>
	          Result
	        </th>
	        <th>
	          Current time
	        </th>
	        <th>
	          Execution time
	        </th>
      </tr>


      <?php
       
        $X = (double)$_REQUEST['Xvalue'];
        $Y = (double)$_REQUEST['Yvalue'];
        $R = (double)$_REQUEST['R'];
        $_SESSION['len']++;
        $len = $_SESSION['len'];
        $_SESSION['X'.$len] = $X;
        $_SESSION['Y'.$len] = $Y;
        $_SESSION['R'.$len] = $R;
		if($Y >= 0 && $X <= 0 && $R*$R >=  $X*$X + $Y*$Y){
			$tr = true;
		} else if ($X >= 0 && $Y >= 0 && $X <= $R && $Y <= $R/2){
			$tr=true;
		} else if ($Y = -(2*$X + $R) && $X <= 0 && $Y <= 0) {
			$tr = true;
		}
        else $tr = false;
        $_SESSION['tr'. $len] = $tr;
        $rt = number_format(1000 * (microtime(true)-$tm),5) . ' msec';
        $_SESSION['ts' . $len] = $ts;
        $_SESSION['rt' . $len] = $rt;
    	
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
					if ($tr) 
					echo "попал";
					else  echo "не попал";
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
		</tr>
	<?php } ?>
	</table>


</body>
</html>