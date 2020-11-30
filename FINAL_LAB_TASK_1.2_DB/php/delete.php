<?php
    require_once('../php/header.php');
	require_once('../models/usersService.php');
	$id =$_REQUEST['id'];
    deleteUsers($id);
    echo "Done";
?>
 <br/><a href="../view/userlist.php">Back</a>