<?php

/**
 * This will show a specific message.
 */
include_once'../includes/message.functions.php';
include_once'../templates/header.php';
include_once'../templates/navbarMessages.php';


if (@$_POST['action']=="Opslaan")
{
    updateMessage();
}
else
{
    editMessage();
}

                                
 include_once'../templates/footer.php'; 