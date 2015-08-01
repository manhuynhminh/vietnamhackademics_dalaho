<!DOCTYPE html>
<link type="text/css" rel="stylesheet" href="/css/index.css" media="screen" />
<link type="text/css" rel="stylesheet" href="/css/jquery.fullPage.css" media="screen" />

<html lang="en">
<body>
                <h2>Theo dõi kết quả thực hiện</h2><br />
				<h2><?php echo $_GET['title_wish'] ?></h2>
                <div id="checkinresultsample">
                <?php 
					date_default_timezone_set('Asia/Ho_Chi_Minh');
					$datesys = date('d/m/Y');
					$dataapp = (int)($datesys - date('01/08/2015'));
					echo $dataapp;
				?><a href="hackathon.html">Days</a>
                    <img />
                </div>
</body>
</html>