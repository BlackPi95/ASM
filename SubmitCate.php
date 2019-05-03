<?php
    require_once('./dbconnector.php');

    if (isset($_POST['Submit'])) {

    $CateID = $_GET['CateID'];
    $CateName = $_POST['CateName'];

    $sql = "UPDATE categories SET CateName = '".$CateName."' WHERE CateID = $CateID"; 

    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    header('location:ManagerCate.php');   

    }
?>
