


<?php

/**
 *  this file will show all messages
 */
?>

<html>
    <head>
        <!-- bootstrap  -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <header>
            
        </header>
        <aside>
            
        </aside>
        
            <div class="container">
                <form method="post" action="insert.php" id="lel">
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input name="title" type="title" class="form-control" id="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                      <label for="content">content</label>
                      <textarea name="content" type="text" class="form-control" id="content" placeholder="voer hier de content in"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <input type="file" id="exampleInputFile">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Check me out
                      </label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        
           
         
       
    </body>
</html>

 

