<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>Final Quiz for Lip building</h1>
		
        <?php
		
		$con = mysql_connect("localhost","se215093","password");
        if(!$con){
        die("Can not connect: ". mysql_error());
}

mysql_select_db("C230_Database1",$con);

$sql = "INSERT INTO Table1(question1,question2,question3,
question4,question5)
 VALUES ('$_POST[question1]','$_POST[question2]','$_POST[question3]','$_POST[question4]','$_POST[question5]')";

mysql_query($sql,$con);

mysql_close($con);
            
            $answer1 = $_POST['question1'];
            $answer2 = $_POST['question2'];
            $answer3 = $_POST['question3'];
            $answer4 = $_POST['question4'];
            $answer5 = $_POST['question5'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "A") { $totalCorrect++; }
            if ($answer2 == "B") { $totalCorrect++; }
            if ($answer3 == "D") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5 == "C") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            
        ?>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>