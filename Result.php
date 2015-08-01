<!DOCTYPE html>
<link type="text/css" rel="stylesheet" href="/css/index.css" media="screen" />
<link type="text/css" rel="stylesheet" href="/css/jquery.fullPage.css" media="screen" />

<meta charset="utf-8">
<meta name="description" content="Input Desire Learning">            

<html lang="en">
<head>
	<title>Result</title>
</head>
<body id="mainsite">
<?php 
	if (isset($_GET['submit_button_rate']))
	{ 
		echo "result today: ".$_GET['your_rate']."<br/>";
		echo "You should be (call the advice from database)";
	}
	else
		echo "Your preview result is good, but you can try to better >_>";
	
?>

</body>

</html>
