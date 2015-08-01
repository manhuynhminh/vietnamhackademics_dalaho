<!DOCTYPE html>
<link type="text/css" rel="stylesheet" href="/css/index.css" media="screen" />
<link type="text/css" rel="stylesheet" href="/css/jquery.fullPage.css" media="screen" />

<meta charset="utf-8">
<meta name="description" content="Input Desire Learning">            

<html lang="en">
<head>
	<title>Result</title>
</head>
<body id="mainsite" onload="initTitle()">
	<div id="section5" class="section">
		 <h2> 
			<label id="title"></label>
          </h2>
		<label id="result">
						<?php 
						// fomular
						if (isset($_GET['btn_submit'])) 
						{ 
							$temp = (int)$_GET['your_number'];
							
							$datefile = fopen("days/file_date.txt","r");
							$valuedate = fgets($datefile);
							if($valuedate < 1)
							{
								echo "Result date ".$valuedate.": ".$temp."%<br/><br/>"; 
								$filetemp = fopen("result.txt","w");
								fwrite($filetemp,$temp);
								fclose($filetemp);
							}
							else
							{
								$filetemp = fopen("result.txt","r");
								$oldresult = fgets($filetemp);
								$newresult = (int)($oldresult + $temp)/2;//wrong fomular >.< @!%
								echo "Result date ".$valuedate.": ".$newresult."%<br/><br/>";
								fclose($filetemp);
								$filetemp = fopen("result.txt","w");
								fwrite($filetemp,$newresult);
								fclose($filetemp);									
							}
				
				
						echo "You should be try to learn :) ";  //xuat cau khuyen ran (call the advice from database)
						}
					else
					{
						$filetemp = fopen("result.txt","r");
						$oldresult = fgets($filetemp);
						
						echo "Old Result: ".$oldresult."%<br/><br/>";
						fclose($filetemp);
						echo "Your preview result is good, but you can try to better >_>";	
					}
			?>
		<br><br><br><br><br><br><br><br><br><br>
		 <bottom> <a href="mainpage.php" text-align:bottom >Return main page</a></bottom>
	</div>
  
</body>
</html>
<script type="text/javascript">
    function initTitle() {
        document.getElementById('title').innerHTML = JSON.parse(localStorage.getItem('LearningTitle'));
    }
</script>
