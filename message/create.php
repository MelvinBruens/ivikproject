<?php

/**
 * This file wil create a new message.
 */
 include_once'../templates/header.php';
 include_once'../templates/navbarMessages.php';
include_once'../includes/message.functions.php';

 if (@$_GET['action']=="Opslaan")
{
    createMessage();
}
 else
{
     ?>
          <div id="container" class="container">  
            <div class="col-md-8 col-md-offset-2">
                <form name="add" action="<?php echo $_SERVER['PHP_SELF']; ?>" action="save" method="GET">
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input name="title"type="text" class="form-control" id="title" placeholder="title">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" rows="6" id="content" class="form-control" placeholder="content..."></textarea>
                    </div>
                    <button type="submit" name="action" value="Opslaan" class="btn btn-primary pull-right">SAVE</button>
                </form>
            </div>
        </div> 
    <?php
 }
        
    include_once'../templates/footer.php'; ?>
