<! DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Random Events</title>
  </head>
  <body>
    <?php
    //Jazmin Rodriguez Arevalo
    $score = 0;
    print("<table><tr><th> Player</th><th>Computer</th><th>Rounds</th></tr>\n"); // setting the score and creating a table
    // creating the loop so that there is 10 rounds and it compares the computer score to the player score
    for($round = 1; $round <= 10; $round++)
    {
        $playerscore = rand(1,100);
        $compscore = rand(1,100);
            print("<tr><td>$playerscore</td><td>$compscore</td>");
            //the following statement will check the scores and adjust the $score
            if($playerscore < $compscore)
            {
                print("<td>Player lost this round</td></tr>\n");
                $score--;
            }
            else if ($playerscore > $compscore)
            {
                print("<td>Player won this round</td></tr>\n");
                $score++;
            }
            else
            {
                print("<td>Player tied this round</td></tr>\n");
            }
    }
    print("<tr><td colspan=2>$score</td><td>Player Score</td></tr></table>\n");
    
    
    // Year of the---
    
    $year = date("Y");
    print("It is the year of the:<br>");
    switch ($year % 12)
        {
            case 0;
                echo 'Monkey';
                break;
            case 1;
                echo 'Rooster';
                break;
            case 2;
                echo 'Dog';
                break;
            case 3;
                echo 'Boar';
                break;
            case 4;
                echo 'Rat';
                break;
            case 5;
                echo 'Ox';
                break;
            case 6;
                echo 'Tiger';
                break;
            case 7;
                echo 'Rabbit';
                break;
            case 8;
                echo 'Dragon';
                break;
            case 9;
                echo 'Snake';
                break;
            case 10;
                echo 'Horse';
                break;
            case 11;
                echo 'Lamb';
                break;
            default:
                echo "Something Broke";
        }
    
    ?>     
  </body>
</html>
