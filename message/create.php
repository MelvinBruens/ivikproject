<?php

/**
 * This file wil create a new message.
 */
 include_once'../includes/header.php';
 include_once'../includes/navbarMessages.php';
?>

        <div id="container" class="container">  
            <div class="col-md-6 col-md-offset-3"
                <form method="post" action="insert.php">
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input name="title"type="text" class="form-control" id="title" placeholder="title">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" rows="6" id="content" class="form-control" placeholder="content..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </form>
            </div>
        </div>

        
<?php include_once'../includes/footer.php'; ?>
