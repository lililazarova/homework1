<html>
<body>
<table border="1">
	<tr>
		<td>фигура</td>
		<td>формула</td>
	</tr>
	<tr>
		<td>Лице на квадрат</td>
		<td>
		<?php
		header('Content-Type: text/html; charset=utf-8');
		$name = "S = a*a";
		$id = "first";
		echo "<div id=$id>".$name. "</td>" . "</div>";
		?>
		</td>
	</tr>
	<tr>
		<td>Лице на правоъгълник</td>
		<td>
		<?php
		$name = "S = a*b";
		$id = "second";
		echo "<div id=$id>" .$name. "</td>" . "</div>";
		?>
		</td>
	</tr>
	<tr>
		<td>Лице на трапец</td>
		<td>
		<?php
		$name = "S = ((a+b)*h)/2";
		$id = "tirth";
		echo "<div id=$id>".$name. "</td>" . "</div>";
		?></td>
	</tr>
</table>
<style>
#first {
    color: red;
}
#second {
	color: blue;
}
#tirth {
	color: lightpink;
}
</style>
</body>
</html>