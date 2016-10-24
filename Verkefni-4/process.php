
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
	<body>
		<?php
			$path = $_POST['imageurl'];
			$name = $_POST['imagename'];
			$description = $_POST['description'];
		?>
		<img src="<?= $path ?>" style="width:420px;height:420px;border:0";><br>
		<pre>
			<?php
			echo $name;
			echo $description;
			?>
		</pre>
	</body>
</html>
