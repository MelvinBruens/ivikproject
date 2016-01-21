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
    
    $query = "SELECT * FROM `users` WHERE `id` = $id";
    $result = mysqli_query(dbconnect(), $query);
    
    while($row = $result->fetch_assoc())
    {    

        echo "<h1>" . $row['name'] . "</h1>";
        echo "<p>" . $row['email'] . "</p>";
        echo "<br>";
    }
}

/**
 * Shows all created messages in one list.
 */
function showAll(){
    
    $query = "SELECT * FROM `users`";
    $result = mysqli_query(dbconnect(), $query);
    
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) 
        { 
            echo "<h1>" . $row['name'] . "</h1>";
            echo "<p>" . $row['email'] . "</p>";
            echo "<br>"; 
            echo "<a id='infoButton' class='btn btn-primary pull-right' href='edit.php?id=" . $row['id'] . "'>Edit user</a>";
            echo "<a id='infoButton' class='btn btn-primary pull-right' href='show.php?id=" . $row['id'] . "'>User info</a>";
            echo "<hr>";
        }
    } 
    else 
    {    
        echo "No users found";
    }
    
}

/**
 * Create a message.
 */
function createUser(){
    
    $name = $_GET['name'];
    $email = $_GET['email'];
            
    $query = "INSERT INTO `users` (`id`, `name`, `email`) VALUES ('', '$name', '$email')";
    mysqli_query(dbconnect(), $query);   
   
    header('location: index.php');
}

/**
 * get Edit a message.
 */
function editUser(){
  
    $id = $_GET["id"];
    
    $query = "SELECT * FROM `users` WHERE `id` = $id";
    $result = mysqli_query(dbconnect(), $query);
   
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $email = $row['email'];
    
   
    echo    "<div id='container' class='container'>  
            <div class='col-md-6 col-md-offset-3'>
            <form name='add'  action='edit.php?id=$id' method='POST'>";
    echo    "<div class='form-group'>";
    echo    "<label form='title'>Name</label>";
    echo    "<input name='name'type='text' class='form-control' id='name' value=$name>";
    echo    "</div>";
    echo    "<label for='content'>Email</label>
            <textarea name='email' rows='6' id='email' class='form-control' placeholder='content' >" . $email . "</textarea>";
    echo    "<button type='submit' name='action' value='Opslaan' class='btn btn-primary pull-right'>Save</button>";
    }


function updateUser(){
    
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    
    $query = "UPDATE `users` SET `name`='$name',`email`='$email' WHERE `id` = $id";
    mysqli_query(dbconnect(), $query);
    header('location:index.php');
     
}



