<?php
    require_once('config.php');

    if(isset($_GET['caller.id'])){
    	$action = $_GET['caller.id'];

    	switch($action){
    		case 'logout':
    		logged_out();
    		break;
    	}
    }