<?php

session_start();

/**
 * Limits a string to a specific amount of characters.
 * 
 * @param type $x
 * @param type $length
 */

function dbconnect(){
      
   $db = mysqli_connect("localhost", "root","", "phptraining") ;
   return $db;
	
}  

/**
 * Show one message.
 */
function showOne(){
  
    $id = $_GET["id"];
    
    $query = "SELECT * FROM `message` WHERE `id` = $id";
    $result = mysqli_query(dbconnect(), $query);
    
    while($row = $result->fetch_assoc())
    {    

        echo "<h1>" . $row['title'] . "</h1>";
        echo "<p>" . $row['content'] . "</p>";
        echo "<br>";
    }
}

/**
 * Shows all created messages in one list.
 */
function showAll(){
    
    $query = "SELECT * FROM `message`";
    $result = mysqli_query(dbconnect(), $query);
    
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) 
        { 
            echo "<h1>" . substr($row['title'],0, 25) . "</h1>";
            echo "<p>" . substr($row['content'], 0, 100) . "..." . "</p>";
            echo "<br>"; 
            echo "<a id='infoButton' class='btn btn-primary pull-right' href='edit.php?id=" . $row['id'] . "'>Edit message</a>";
            echo "<a id='infoButton' class='btn btn-primary pull-right' href='show.php?id=" . $row['id'] . "'>Hele bericht</a>";
            echo "<hr>";
        }
    } 
    else 
    {    
        echo "No messages found";
    }
    
}

/**
 * Create a message.
 */
function createMessage(){
    
    $title = $_GET['title'];
    $content = $_GET['content'];
            
    $query = "INSERT INTO `message` (`id`, `title`, `content`) VALUES ('', '$title', '$content')";
    mysqli_query(dbconnect(), $query);   
   
    header('location: index.php');
}

/**
 * get Edit a message.
 */
function editMessage(){
  
    $id = $_GET["id"];
    
    $query = "SELECT * FROM `message` WHERE `id` = $id";
    $result = mysqli_query(dbconnect(), $query);
   
    $row = $result->fetch_assoc();
    $title = $row['title'];
    $content = $row['content'];
    
   
    echo    "<div id='container' class='container'>  
            <div class='col-md-6 col-md-offset-3'>
            <form name='add'  action='edit.php?id=$id' method='POST'>";
    echo    "<div class='form-group'>";
    echo    "<label form='title'>Title</label>";
    echo    "<input name='title'type='text' class='form-control' id='title' value=$title>";
    echo    "</div>";
    echo    "<label for='content'>Content</label>
            <textarea name='content' rows='6' id='content' class='form-control' placeholder='content' >" . $content . "</textarea>";
    echo    "<button type='submit' name='action' value='Opslaan' class='btn btn-primary pull-right'>Save</button>";
    }


function updateMessage(){
    
    $id = $_GET['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    
    
    $query = "UPDATE `message` SET `title`='$title',`content`='$content' WHERE `id` = $id";
    mysqli_query(dbconnect(), $query);
    header('location:index.php');
     
}



