<?php

include 'config.php';


$product_name = $_POST["product_name"];
$product_desc= $_POST["product_desc"];
$product_code = $_POST["product_code"];
$product_img_name= $_FILES['file']['name'];
$price= $_POST["price"];
$qty = $_POST["qty"];
// $target_dir = "images/products/";
// $target_file = $target_dir.basename($_FILES["file"]["product_img_name"]);
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// $extensions_arr = array("jpg","jpeg","png","gif");


$target_dir = "images/products/";
$target_file = $target_dir . basename($_FILES["file"]["product_img_name"]);

// Select file type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif");

// Check extension
if( in_array($imageFileType,$extensions_arr) ){
   // Upload file
   if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
      // Insert record
        if($mysqli->query("INSERT INTO products (product_name, product_desc, product_code, product_img_name, price, qty) VALUES('$product_name', '$product_desc', '$product_code', '$product_img_name', '$price', '$qty' )")){
            echo 'Data inserted';
            echo '<br/>';
            
            header ("location:index.php");
        } else {
            echo 'Data NOT inserted';
            echo '<br/>';
        }
    } else {
        echo 'Image NOT inserted';
        echo '<br/>';
    }
} else {
    echo 'File not an image';
    echo '<br/>';
}

?>
