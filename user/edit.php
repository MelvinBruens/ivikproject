<?php

/**
 * This will show a specific message.
 */
include_once'../includes/user.functions.php';
include_once'../templates/header.php';
include_once'../templates/navbarUser.php';


if (@$_POST['action']=="Opslaan")
{
    updateUser();
}
else
{
    editUser();
}

                                
 include_once'../templates/footer.php'; 