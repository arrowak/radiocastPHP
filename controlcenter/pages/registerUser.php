<?php 
	$fullname = $_POST['txtFullname'];
	$username = $_POST['txtUsername'];
	$password = $_POST['txtPassword'];
	
	set_include_path ( "../classes" );
	spl_autoload_register ();
	
	$globalsObj = new Globals ();
	$result = $globalsObj->register($username,$password,$fullname,"RJ");
	if($result == 1) {
		return 1;
		}
	elseif($result == 2) {
			return 2;
			}
	else{ 
		return 0;
		}
?>