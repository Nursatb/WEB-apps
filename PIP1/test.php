
<!-- <!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
$X;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $X = test_input($_POST["name"]);
}

function test_input($data) {
  return $data;
}
?>


<form method="post" action="<?php  echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $X;
echo "<br>";
?>

</body>
</html> -->

<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <title>Селекторы атрибутов</title>
  <style>
   Q {
    font-style: italic; /* Курсивное начертание */
    quotes: "\00AB" "\00BB"; /* Меняем вид кавычек в цитате */
   }
   Q[title] {
    color: maroon; /* Цвет текста */
   }
  </style>
 </head>
 <body>

  <p>Продолжая известный закон Мерфи, который гласит: <q>Если неприятность 
   может случиться, то она обязательно случится</q>, можем ввести свое наблюдение: 
  <q title="Из законов Фергюссона-Мержевича">После того, как веб-страница 
   будет корректно отображаться в одном браузере, выяснится, 
   что она неправильно показывается в другом</q>.</p>

 </body>
</html>