<?php

/**
 * This will show a specific message.
 */
include_once'../includes/user.functions.php';
include_once'../templates/header.php';
include_once'../templates/navbarUser.php';
?>

            <div id="container" class="container">
                <div class="col-md-8 col-md-offset-2">
                    <?php

                        showOne();
                        
                    ?>
                </div>
            </div>

<?php include_once'../templates/footer.php';