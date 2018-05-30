<!DOCTYPE HTML> 
<html> 
<head> 
	<title>Game</title> 
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/style.css"> 
</head> 
<body class="menu"> 	
<script src="script.js"></script>
<?php
	include_once("quest.php");
?>

	<?php
		$errors ="";
		$i = rand(0,1);
		if(isset($_POST['otv']))
		{
			$otvet =$_POST['otvet'];
			if ($pravOtv[$i] == $otvet)
				$errors = "Вы правильно ответили";
			
		}
	
	?>
	<div>
	<div> <?=$pravOtv[$i] ?> </div>
	<table border="1">	
		<tr>
			<th colspan="2"><?php echo $vopros[$i]?></th>
		</tr>
		<tr>	
			<th><a>A: <?php echo $variantA[$i]?></a></th>
			<th><a>B: <?php echo $variantB[$i]?></a></th>
		</tr>
		<tr>		
			<th><a>C: <?php echo $variantC[$i]?></a></th>
			<th><a>D: <?php echo $variantD[$i]?></a></th>
		</tr>
		<tr>	
		<form action="game.php" method="POST">
			<th><input type="text" id="otvet" name="otvet" /></th>
			<th><input type="submit" id ="otv" name="otv" value="Ответить"/></th>
			</form>
		</tr>	
	</table>		
	</div>
	
</body>
</html>
