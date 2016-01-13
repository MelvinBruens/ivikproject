<?php


/**
 * This will show all the messages.
 */
include_once'../includes/functions.php';
include_once'../includes/header.php';
include_once'../includes/navbarMessages.php';
?>

            <div id="container" class="container">    
                <div class="col-md-8 col-md-offset-2">   
                    <?php 
                
                        showAll();
            
                    ?>
                </div>
            </div>

<?php include_once'../includes/footer.php'; ?>