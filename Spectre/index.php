<!DOCTYPE html>
<html>
<head>
	<title>Spectre Exploit Proof-of-Concept</title>
</head>
<body style="text-align: center;margin: 0;overflow-x: hidden;background-color:#f8f8f8;font-family: sans;">
	<div style="text-align: center;float: center;">
		<a href="https://github.com/seandiggity/spectre" target="_blank"><img src="spectre.svg" style="float: center;border: none;width: 220px;padding: 22px;"></a>
		<form action="index.php" id="secret" method="post" name="secret">
			<input name="secret-text" placeholder="Your Secret Text Goes Here" style="width: 300px;font-size: 18px;padding: 6px;border: 1px solid #111;margin-bottom: 8px;" type="text"><br>
			<input name="submit" style="font-size: 18px;padding: 6px;border: 1px solid #111;margin-bottom: 8px;background-color: #fff;" type="submit" value="Save">
		</form><br>
		<?php
		$txt = "secret.txt";

		if(isset($_POST['submit'])&&!empty($_POST['secret-text'])) {
		    $fh = fopen($txt, 'w');
		    $txt = htmlspecialchars($_POST['secret-text']); 
		    fwrite($fh,$txt);
		    fclose($fh);
		    if($txt == false) {
		        die('Error writing the data.');
		    }
		    else {
		        echo "Success! ".mb_strlen($txt, '8bit')." bytes written.";
		        echo "<br><br>Your Secret: <strong>".$txt."</strong>";
		    }
		   unset($_POST);
		}
		if(isset($_POST['submit'])&&empty($_POST['secret-text'])) {
		   echo('No data to process!');
		   unset($_POST);
		}
		?>
	</div>
</body>
</html>
