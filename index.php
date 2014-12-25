<?php 
	require ('DevTest.php');
	
	$txt = isset($_POST["txt"]) ? $_POST["txt"] : "";
	
	if ($txt) {
		$devtxt = new DevTest($txt);
		$reservetxt = $devtxt->reverse();
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="asserts/css/style.css"  />
		<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
		<script type="text/javascript" src="asserts/js/script.js"></script>
		<title>
			Dev Test Sample
		</title>
	</head>
	
	<body>
		<div class="container">
			<h1>
				Dev Test Sample
			</h1>
			<div class="content">
			<?php if ($txt) :?>
				<label>This is result:</label><br/>
				<h3><?php echo $reservetxt; ?></h3><br/>
				<form action="">
					<input type="submit" value="back"/>
				</form>
			<?php else :?>
				<form id="form1" action="" method="post">
					<label for="String">Text:</label></br>
					<input type="text" id="txt" name="txt" placeholder="Please input the string" />
					<br/>
					<input type="submit" value="Submit" />
				</form>
			<?php endif;?>
			</div>
		</div>
	</body>
</html>
