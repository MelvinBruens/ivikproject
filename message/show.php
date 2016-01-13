<?php

/**
 * This will show a specific message.
 */
include_once'../includes/functions.php';
include_once'../includes/header.php';
include_once'../includes/navbarMessages.php';
?>


    
            <div id="container" class="container">
                <div class="col-md-8 col-md-offset-2">
                    <?php

                        $id = $_GET["id"];    
                    
                        foreach ($_SESSION['messages']  as $key => $message)
                        {
                            if($key == $id){

                                echo "<h1>" . $message['title'] . "</h1>";
                                echo "<p>" . $message['content'] . "</p>";
                                echo "<br>";

                            }
                        }
                    ?>
                </div>
            </div>

                                

<?php include_once'../includes/footer.php';