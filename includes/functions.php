<?php

session_start();

/**
 * Limits a string to a specific amount of characters.
 * 
 * @param type $x
 * @param type $length
 */
function character_limit($x, $length)
{
  if(strlen($x)<=$length)
  {
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    echo $y;
  }
}

/**
 * 
 * Shows all created messages in one list.
 * 
 */
function showAll()
{ 
     if ( empty($_SESSION))
        {
            echo "There are no messages found!";
        }
    
        else
        {   
            foreach ($_SESSION['messages']  as $key => $message) 
            {
                echo "<h1>" . $message['title'] . "</h1>";
                character_limit($message['content'], 100);
                echo "<br>";

                echo "<a id='infoButton' class='btn btn-primary pull-right' href='show.php?id=$key'>Hele bericht</a>";
                echo "<hr>";
            }

        }
}


