<?php


/**
 * This will show all the messages.
 */
include_once'../includes/user.functions.php';
include_once'../templates/header.php';
include_once'../templates/navbarUser.php';
?>

            <div id="container" class="container">    
                <div class="col-md-10 col-md-offset-1">   
                    <?php 
                
                        showAll();

                    ?>
                </div>
            </div>

<?php include_once'../templates/footer.php'; ?>