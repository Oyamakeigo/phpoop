<?php

require_once "classes/Item.php";

$item = new Item;

if($_GET['action'] == 'add'){
    $itemname = $_POST['itemname'];
    $category = $_POST['category'];
    $itemdescription = $_POST['itemdescription'];
    $itemprice = $_POST['itemprice'];
    $result = $item->save($category,$itemname,$itemdescription,$itemprice);

    if($result){
        echo "<script>window.location.replace('items.php')</script>";
    }else{
        echo "Error!!";
    }
}elseif($_GET['action'] =='update'){
    $item_id = $_POST['item_id'];
    $itemname = $_POST['itemname'];
    $itemdescription = $_POST['itemdescription'];
    $itemprice = $_POST['itemprice'];
    $result = $item->update($item_id,$itemname,$itemdescription,$itemprice);

    if($result){
        echo "<script>window.location.replace('items.php')</script>";
    }
}elseif($_GET['action'] =='delete'){
    $item_id = $_GET['item_id'];
    $result = $item->delete($item_id);
    if($result){
        echo "<script>windod.location.replace('items.php')</script>";
    }
}

?>