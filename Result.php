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
	<div id="section5" class="section">
		<h2>  <?php 
					$writefiel = fopen("title.txt","r");
						echo fgets($writefiel);
					fclose($writefiel);
				?> 
                </h2>
		<label>
		<?php 
			if (isset($_GET['btn_submit']))
			{ 
				echo "result today: ".$_GET['your_number']."<br/><br/>"; //xuat kqua
				echo "You should be (call the advice from database)";  //xuat cau khuyen ran
			}
			else
				echo "Your preview result is good, but you can try to better >_>";	
		?>
		</label>
	</div>
</body>

</html>
