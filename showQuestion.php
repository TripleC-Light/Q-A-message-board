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
	table{
		border: 2px solid #000;
	    box-shadow: 5px 5px 5px rgba(50%,50%,50%,0.8);
	    width: 95%;
	    font-size: 20px;
		border-radius: 10px;
		margin-bottom: 10px;
	}
	tr, td {
		border: 0px solid #000;
		color: #555;
		word-break: break-all;
		vertical-align: top;
	}
	a{
		text-decoration:none;
		font-size: 20px;
		color: #00F;
	}

</style>
</head>
<body class="mainCSS">
<center>
	
<?PHP
	$myfile = fopen("messageTXT.txt", "r");
	$messenger = fread($myfile, filesize("messageTXT.txt"));
	$messenger = explode("[separate]", $messenger);
	fclose($myfile);
	echo "<div style='color:#F00;font-size:20px;'>共有 " . (count($messenger)-1) . " 筆留言</div>";
	echo "<div style='margin-bottom:15px;'><a href='index.php'><繼續留言></a></div>";
	for($i=0; $i<count($messenger)-1; $i++){
		echo "<table><tr><td style='width:30px;'>" . ($i+1) . ".</td><td>" . $messenger[$i] . "</td></tr></table>";
	}
?>
	
</center>

</body>
</html>
