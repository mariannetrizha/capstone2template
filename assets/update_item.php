<?php 

$item_id = $_POST['item_id'];
$productname =$_POST['productname'];
$image= $_POST['image'];
$price= $_POST['price']; 
$description= $_POST['description']; 
$itemCategory= $_POST['item-category'];

$file = file_get_contents('items.json');
$items = json_decode($file, true);

$items[$item_id]['item_id'] = $item_id;
$items[$item_id]['productname'] = $productname;
$items[$item_id]['image'] = 'assets/images/'.$image;
$items[$item_id]['price'] = $price;
$items[$item_id]['description'] =  $description;
$items[$item_id]['item_category'] = $item_category; 

$jsonFile = fopen('items.json', 'w'); 
fwrite($jsonFile, json_encode($items, JSON_PRETTY_PRINT)); 
fclose($jsonFile);

header("location: ../item.php?id=$item_id");


