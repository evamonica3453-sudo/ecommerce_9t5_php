<?php include "connection.php";

$name_category = $_POST["category_name"];
$img_category = $_FILES["category_img"];

if($img_category["size"]>0){
if(!file_exists("../assets/dashboard_assets/images/category")){
    mkdir("../assets/dashboard_assets/images/category",0777,true);
}

$img_tmp_name = $img_category["tmp_name"];
$img_name = $img_category["name"];
$img_path = "../assets/dashboard_assets/images/category/".$img_name;

move_uploaded_file($img_tmp_name,$img_path);

$query = "INSERT INTO category_tb (category_name,category_image) value($name_category,$img_path)";

mysqli_query($connection_db,$query);













}
else{
    header("Location: category_insert.php");
}



?>