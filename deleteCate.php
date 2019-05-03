<?php 
	require_once('./dbconnector.php');

	$ID=$_GET['CateID'];
    $sql="DELETE FROM categories WHERE CateID = $ID";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);    
    header('location:ManagerCate.php'); 
 ?>