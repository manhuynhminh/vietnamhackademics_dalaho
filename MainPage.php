<!DOCTYPE html>
<link type="text/css" rel="stylesheet" href="/css/index.css" media="screen" />
<link type="text/css" rel="stylesheet" href="/css/jquery.fullPage.css" media="screen" />

<html lang="en">
<head>
	<title>Tracking Learning</title>
</head>
<body id="mainsite">
     <div id="section3" class="section">
        <h2><?php echo $_GET['title_wish'] ?></h2>        
        <br/>
        <div id="times">
          <a href="index.php">
			  <?php 
                  date_default_timezone_set('Asia/Ho_Chi_Minh');
                  $datesys = date('d/m/Y');
                  $dataapp = (int)($datesys - date('01/08/2015'));
                  echo $dataapp;
              ?> 
			  <br>
			  days
           </a>
          <img />
        </div>
		<br/>
		<div id="buttondiv">
			<a href="rate.html"><input type="button" name="resultbutton" value="Result" class="btnResult" /> </a>
            
          
			<a href="result.php"><input type="button" name="reportbutton" value="Report" class="btnReport" />
            
		</div>
     </div>
</body>
</html>