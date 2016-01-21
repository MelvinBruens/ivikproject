<?php

/**
 * This file wil create a new message.
 */
 include_once'../templates/header.php';
 include_once'../templates/navbarUser.php';
include_once'../includes/user.functions.php';

 if (@$_GET['action']=="Opslaan")
{
     createUser();
}
 else
{
     ?>
          <div id="container" class="container">  
            <div class="col-md-8 col-md-offset-2">
                <form name="add" action="<?php echo $_SERVER['PHP_SELF']; ?>" action="save" method="GET">
                    <div class="form-group">
                      <label for="title">Name</label>
                      <input name="name"type="text" class="form-control" id="name" placeholder="Name...">
                    </div>
                    <div class="form-group">
                        <label for="content">Email</label>
                        <input name="email" rows="6" id="email" class="form-control" placeholder="Email...">
                    </div>
                    <button type="submit" name="action" value="Opslaan" class="btn btn-primary pull-right">SAVE</button>
                </form>
            </div>
        </div> 
    <?php
 }
        
    include_once'../templates/footer.php'; ?>
