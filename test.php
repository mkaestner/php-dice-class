<?php

include('class.Dice.php');

?>
<html>
<head>
	<title>php-dice-class</title>
</head>
<body>
	<p>Roll 1d6: <?php echo Dice::roll('1d6'); ?></p>
	<p>Roll 2d6: <?php echo Dice::roll('2d6'); ?></p>
	<p>Roll 1d12: <?php echo Dice::roll('1d12'); ?></p>
	<p>Roll 2d12: <?php echo Dice::roll('2d12'); ?></p>
	<p>Roll 4d8: <?php echo Dice::roll('4d8'); ?></p>
</body>
</html>