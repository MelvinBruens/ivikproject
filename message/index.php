<?php
session_start();
    if ( empty($_SESSION))
        {
            echo "The array is currently empty.";
        }
    
    else
        {
           foreach ($_SESSION['messages']  as $key => $message) 
            {
                echo "<h1>" . $message['title'] . "</h1>";
                echo "<h2>" . $message['content'] . "</h2>";
            }
        
        }
        
?>