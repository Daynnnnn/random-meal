<?php
	function Generate () {
		$EatsJson = file_get_contents("meals.json");
		$EatsArray = json_decode($EatsJson, true);
		$EatsAmount = count($EatsArray);
		$SelectedEats = (rand(1, $EatsAmount) - 1);

		echo $EatsArray[$SelectedEats]["eats"] . PHP_EOL;
	}
?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>MealGen™</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body><center>
	<div>
  		<h1>MealGen™</h1>
  		<p><?php Generate(); ?></p>
	</div>
	
</center></body>
</html>
