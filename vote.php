<!DOCTYPE html>
<link type="text/css" rel="stylesheet" href="/css/index.css" media="screen" />
<link type="text/css" rel="stylesheet" href="/css/jquery.fullPage.css" media="screen" />

<meta charset="utf-8">
<meta name="description" content="Input Desire Learning">            

<html lang="en">>
<head>
	<title>Result</title>
</head>
<body id="mainsite">
	<div id="section4" class="section">
	<!--<div class="your_vote">Learning PHP</div>-->
		<form class="data" name="formdata" method="post" action="result.php">
            <div class="gauge_1">
                <div class="indicator_1">
                    <div class="bar_second_1"></div>
                </div>
                <div class="your_input">	
                    <input class="input_style intput_1" id="your_number" name="your_number" type="number" placeholder="your number" onkeyup="this.value = minmax(this.value, 0, 100)"/>
                    <br/>
                    <input class="btn_createquestion" type="button" value="Create Question" onclick="javascript:CreateQuestion()" />	  
                    <input class="btn_submit" type="button" value="Submit" onclick="javascript:Confirm()" />	  	  
                </div>
            </div>
		</form>
	</div>
</body>
<script src='js/jquery.min.js'></script>
<script src="js/index.js"></script>
<script type="text/javascript">
	function Confirm()
    {
		var your_number = document.getElementById('your_number');		
		var strconfirm = confirm("Your learning: " + your_number.value);
		if (strconfirm == true)
            {				
                return true;
            }
    }

	function minmax(value, min, max) 
	{
		if(parseInt(value) < min || isNaN(value)) 
			return 0; 
		else if(parseInt(value) > max) 
			return 100; 
		else return value;
	}
</script>
</html>
