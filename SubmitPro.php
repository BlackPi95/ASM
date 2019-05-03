<?php
    require_once('./dbconnector.php');

    if (isset($_POST['Submit'])) {

    $productID = $_GET['productID'];
    $productName = $_POST['productName'];
    $image = $_POST['image'];
    $price = $_POST['price'];
    $describe = $_POST['describe'];
    $CateID = $_POST['CateID'];

    $sql = "UPDATE products SET productName = '".$productName."', image = '".$image."', price ='".$price."',describe = '".$describe."',CateID= ".$CateID." WHERE productID =  $productID";

    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    header('location:ManagerPro.php');   
    }
?>
