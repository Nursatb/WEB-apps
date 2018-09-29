<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="./LS1.js"></script>
</head>
<body>
	<style type="text/css">
	</style>

	<table width="100%"  border="1">
		<tr>
			<td colspan="4">
				<a href="https://vk.com/nursat.baigenzheev"> <font face="serif"> Nursat Baigenzheyev GROUP P3211 </font><a>
			</td>
		</tr>
	</table>

	<table width="100%" border="1" style="float: left;">
		<form method="get" action="actions.php" onsubmit="return Durakfunc()">

		<tr>
			<td id="forX" width="160px" height="0px">
				<p>Значения для X:</p>

			</td>

			<td>
				
				<input id="Xvalue" type="text" name="Xvalue" placeholder="-3.....3"/>					
				
			</td>

			<td rowspan="4" align="right">
				<img src="areas.png" width="600px">
			</td>

		</tr>






		<tr>
			<td id="forY" width="160px" height="0px">
				<p>Значения для Y:</p>
			</td>

			<td align="center">
								
					<select name="Yvalue">
						<option value="-5">-5</option>
						<option value="-4">-4</option>
						<option value="-3">-3</option>
						<option value="-2">-2</option>
						<option value="-1">-1</option>
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				
			</td>
		</tr>



		<tr>
			<td id="forR" width="160px" height="0px">
				<p>Значения для R:</p>

			</td>

			<td align="center">
				
					<p><input type="radio" name="R" value="1">1.0</p>
					<p><input type="radio" name="R" value="1.5">1.5</p>
					<p><input type="radio" name="R" value="2">2.0</p>
					<p><input type="radio" name="R" value="2.5">2.5</p>
					<p><input type="radio" name="R" value="3">3.0</p>
				
				
			</td>

		</tr>

		

		<tr>
			<td colspan="2" align="center">
				
					<button id='finally' name="finallbutton">
						Проверить
					</button>
				
			</td>
		</tr>
		</form>

		
	</table>









</body>
</html>
