<!DOCTYPE html>
<html>

<head>

    <style>
	
	body{
		background-image:url("http://www.wallpapereast.com/static/images/beauty-nature-reflections-wallpaper-high-quality-bk1vfmp010.jpg");
		font-color:White;
	
	
    h1{
		font-size:300%;
	}
	
	#wrapper {
        width:700px 50px 50px 50px;
        height:auto;
        padding: 50px 50px 50px 50px;
        margin-right:200px;
        margin-left:200px;
        margin-top:100px;
        margin-bottom:100px;
        background-color:009999;
        color:white;
        font-size:15;
        opacity:0.95;
	 }
	
	
	</style>
</head>

<body>

	<div id="page-wrap">
        <br></br>
		<h1><center>Your result is:</center></h1>
		<br></br>
		
		
		
        <?php
		
         error_reporting(0);

		
            
            $answer1 = $_POST['question1'];
            $answer2 = $_POST['question2'];
            $answer3 = $_POST['question3'];
            $answer4 = $_POST['question4'];
            $answer5 = $_POST['question5'];
			$answer6 = $_POST['question6'];
			$answer7 = $_POST['question7'];
			$answer8 = $_POST['question8'];
			$answer9 = $_POST['question9'];
			$answer10 = $_POST['question10'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "A") { $totalCorrect++; }
            if ($answer2 == "B") { $totalCorrect++; }
            if ($answer3 == "D") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5 == "C") { $totalCorrect++; }
			if ($answer6 == "C") { $totalCorrect++; }
			if ($answer7 == "B") { $totalCorrect++; }
			if ($answer8 == "D") { $totalCorrect++; }
			if ($answer9 == "A") { $totalCorrect++; }
			if ($answer10 == "C") { $totalCorrect++; }
            
			
			
            echo "<center><font face='Berlin Sans FB' size='5' color='white'>$totalCorrect / 10 correct</center></font>";
            
        ?>
	
	</div>
	
	

</body>

</html>