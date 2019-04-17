<?php
	require("../lib/emoji.php");

	// New Directory
	mbsEmoji::attr("directory", "emoticons/");
?>
<!DOCTYPE html>
<html>
<head>
	<title>MBS Emojis</title>
</head>
<body>
	<?php
		$text = "Merhaba dünya nasılsın ben bu aralar pek iyi değilim :( veya iyim ya :))";
		echo mbsEmoji::using($text);
	?>
</body>
</html>