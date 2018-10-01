<?php
session_start();
$tm = microtime(true);
$ts = date('m/d/Y h:i:s a');
$x = $_REQUEST['xin'];
$y = $_REQUEST['yin'];
$r = $_REQUEST['rin'];
//echo in_array(xin, array("-3","-2","-1","0","1","2","3","4","5"))
$right = is_numeric($x) && is_numeric($y) && is_numeric($r) &&
	 in_array($x, array("-3","-2","-1","0","1","2","3","4","5")) && floatval($y) >=-3 && floatval($y) <= 5 &&
	in_array($r, array("1", "1.5","2", "2.5", "3"));
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style type="text/css">
      table {
        width: 100%;
        table-layout: fixed;
        text-align: center;
      }
      tr:first-child {
        background-color: #555 !important;
      }
      tr:nth-child(odd) {
        background-color: #fee;
      }
      table
    </style>
  </head>
  <body>
    <table>
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
      </tr>
      <?php
      
        $x = (double)$_REQUEST['xin'];
        $y = (double)$_REQUEST['yin'];
        $r = (double)$_REQUEST['rin'];
        $_SESSION['len']++;
        $len = $_SESSION['len'];
        $_SESSION['x'.$len] = $x;
        $_SESSION['y'.$len] = $y;
        $_SESSION['r'.$len] = $r;
        if($x >= 0 && $y >= 0 && $x*$x +$y*$y <= $r*$r)
          $z = true;
        else if ($x >= 0 && $y <= 0 && $y >= 2 * $x - $r)
          $z = true;
        else if ($x < 0 && $y >= 0 && $x >= -$r && $y <= $r/2)
          $z = true;
        else $z = false;
        $_SESSION['z'.$len] = $z;
        
        $rt = number_format(1000 * (microtime(true)-$tm),5) . ' msec';
        $_SESSION['ts' . $len] = $ts;
        $_SESSION['rt' . $len] = $rt;
      
      for($i = $len; $i > 0; $i--){
        $x = $_SESSION['x'.$i];
        $y = $_SESSION['y'.$i];
        $r = $_SESSION['r'.$i];
        $z = $_SESSION['z'.$i];
        $ts = $_SESSION['ts'.$i];
        $rt = $_SESSION['rt'.$i];
      ?>
      <tr>
        <td>
          <?php
          echo $x;
          ?>
        </td>
        <td>
          <?php
          echo $y;
          ?>
        </td>
        <td>
          <?php
          echo $r;
          ?>
        </td>
        <td>
          <?php
          if($z)
          echo 'Inside';
          else echo 'Outside';
          ?>
        </td>
        <td>
          <?php
          echo $ts;
          ?>
        </td>
        <td>
          <?php
          echo $rt;
          ?>
        </td>
      </tr>
      <?php
        }
       ?>
      </table>
    <p>

    </p>
    </body>
</html>
