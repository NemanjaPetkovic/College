<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
 
    <div id="page-wrap">  
        <form action="grade.php" method="post" id="quiz">    
            <ul id="test-questions">
                 
                <li>              
                    <h3>What do you enjoy watching on TV?</h3>
                    <div align="center">
                    <img src="Capture.jpg">
                    </div>
                    <div class="mtm">
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A" class="fwrd labela">a.  Science Fiction movies</label>
                    </div>
                     
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B" class="fwrd labelb">b.  CNN and MSNBC</label>
                    </div>
                     
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C" class="fwrd labelc">c.  History Channel</label>
                    </div>
                    <p class="quiz-progress">1 of 5</p>
                </li>
                 
                <li>
                    <h3>What&#8217;s your preferred method of travel?</h3>
                    <div align="center">
                    <img src="Capture.jpg">
                    </div>
                     
                    <div class="mtm">
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A" class="fwrd labela">a.  Riding a Harley Davidson</label>
                    </div>
                     
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B" class="fwrd labelb">b.  Offroading in a 4 by 4</label>
                    </div>
                     
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C" class="fwrd labelc">c.  Piloting my own plane</label>
                    </div>
                     
                    <p class="quiz-progress">2 of 5</p>
                </li>
                 
                <li>
                    <h3>What&#8217;s your favorite piece of clothing that you wear?</h3>
                    <div align="center">
                    <img src="Capture.jpg">
                    </div>
                     
                    <div class="mtm">
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A" class="fwrd labela">a.  My leather jacket</label>
                    </div>
                     
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B" class="fwrd labelb">b.  A dress shirt or nice pair of jeans</label>
                    </div>
                                         
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D" class="fwrd labeld">d.  Custom handmade clothing by a local artisan</label>
                    </div>
                    <p class="quiz-progress">3 of 5</p>
                </li>
                 
                <li>
                    <h3>Out of these, what is your favorite type of music?</h3>
                    <div align="center">
                    <img src="Capture.jpg">
                    </div>
                     
                    <div class="mtm">
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A" class="fwrd labela">a.  Softer rock, like Fleetwood Mac or folk music</label>
                    </div>
                                         
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C" class="fwrd labelc">c.  70s hard rock and arena rock</label>
                    </div>
                     
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D" class="fwrd labeld">d.  Classical music from the masters</label>
                    </div>
                    <p class="quiz-progress">4 of 5</p>
                </li>
                 
                <li>
                    <h3>If you could meet anyone from history, who would you choose?</h3>
                    <div align="center">
                    <img src="Capture.jpg">
                    </div>
                     
                    <div class="mtm">
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">a.  Someone mythic, like Nostradamus or Rasputin</label>
                    </div>
                     
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">b.  A famous writer, like John Steinbeck</label>
                    </div>
                                         
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">d.  One of the Egyptian Pharaoahs</label>
                    </div>
                    <p class="quiz-progress">5 of 5</p>
                </li>
 
                <li>
                    <h3 class="anticipate">Now it&#8217;s time to see your results...</h3>
                    <input type="submit" value="Submit Quiz" id="submit-quiz" />
                </li>
            </ul>
         
        </form>
             
    </div>
 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
    <?php
    /**
         * This quiz uses jQuery to move the questions up each time you click an answer.
         * You can change the layout of the quiz, but you may need to adjust the $mt variable.
         * The $mt variable is the margin-top of the quiz.
         * This gives the illusion of each question being on a separate page.
         * It is actually one page, just this element moves.
         * Quiz-takers need to get to the end and hit the Submt button to see results.
         * The answers get stored and sent to grade.php for evaluation.
         * 
         */
        ?>
    <script>
           (function($) {
              var timeout= null;
              var $mt = 0;
              $("#quiz .fwrd").click(function(){
                clearTimeout(timeout);
                timeout = setTimeout(function(){ 
                    $mt = $mt - 430;
                    $("#test-questions").css("margin-top", $mt); 
                }, 333);
              });
           }(jQuery))
    </script>
</body>
</html>