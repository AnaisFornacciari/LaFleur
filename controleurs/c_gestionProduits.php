<?php
$action = $_REQUEST['action'];
switch($action)
{
	case 'administrateur':
	{
		include("vues/v_administrateur.php");
		break;
	}
}
?>