<!DOCTYPE html>
<link type="text/css" rel="stylesheet" href="/css/index.css" media="screen" />
<link type="text/css" rel="stylesheet" href="/css/jquery.fullPage.css" media="screen" />
<link rel="shortcut icon" href="/favicon.ico">

<html lang="en">
<head>
	<title>Tracking Learning</title>
</head>
<body id="mainsite">
     <div id="section3" class="section">
        <h2>Learning Goal</h2>
           <input type="text" name ="title_wish" class="textbox" readonly value="<?php echo $_GET['title_wish'] ?>"/>
        <div id="times">
          <a href="hackathon.html">
			  <?php 
                  date_default_timezone_set('Asia/Ho_Chi_Minh');
                  $datesys = date('d/m/Y');
                  $dataapp = (int)($datesys - date('01/08/2015'));
                  echo $dataapp;
              ?> days
           </a>
          <img />
        </div>
     </div>
</body>
</html>