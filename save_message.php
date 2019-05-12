<!DOCTYPE html>
<html lang="zh-Hant">
<head>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
<title>聯合大學演講 解密電機X現在X未來 問題留言</title>
<style>
	@import url(https://fonts.googleapis.com/earlyaccess/notosanstc.css);
	.mainCSS {
		font-family: 'Noto Sans TC', sans-serif;
	}
	table, tr, td {
		border: 0px solid #000;
		color: #00F;
	}
	a{
		text-decoration:none;
		font-size: 20px;
		color: #00F;
	}
	.showOK {
	    border: 2px solid #F00;
	    box-shadow: 5px 5px 5px rgba(50%,50%,50%,0.8);
		border-radius: 10px;
		font-size: 25px;
		color: #F00;
	    vertical-align: middle;
		width: 50%;
		height: 50px;
		padding-top: 10px;
		border-style:dashed;
	}

</style>
</head>
<body class="mainCSS">
<center>
<?PHP
	$name = $_GET["name"];
	$messanger = $_GET["message"];
	date_default_timezone_set("Asia/Taipei");
	$dateTime = date("Y/m/d") . " " . date("h:i:sa");
	$saveMessenge = $dateTime . "<br>" . $name . "<br>" . $messanger . "<br>" . "[separate]";

	$myfile = fopen("messageTXT.txt", "a");
	fwrite($myfile, $saveMessenge);
	fclose($myfile);
?>
	<br><br><br><br><br><div class="showOK">留言完成</div><br>
	<table>
		<tr>
			<td><a href="index.php">←繼續留言</a></td>
			<td style="width:50px;"></td>
			<td><a href="showQuestion.php">觀看留言→</a></td>
		</tr>
	</table>
</center>

</body>
</html>
