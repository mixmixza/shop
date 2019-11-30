<?php 
    include("connect.php");
    echo ini_get("upload_max_filesize")."<br>";
    $allowedType=["jpg","jpeg","gif","png","tif","tiff"];
    $fileType=explode("/",$_FILES["filePic"]["type"]);
    $size = $_FILES["filePic"]["size"]/1024/1024;
    if(!in_array($fileType[1],$allowedType)){
        echo "Non-image file is not allower.";
    }
    else if($size>1.00){
        echo "File size exceeds the maximum treshold.";
    }
    else{
        $name = $_POST['txtName'];
        $desc = $_POST['txtdescription'];
        $price = $_POST['txtPrice'];
        $unitInStock = $_POST['txtStock'];
        $filename = $_FILES['filePic']['name'];
    //echo "Type:" .$_FILES["filePic"]["type"] ."<br>";
    //echo "Name:" .$_FILES["filePic"]["name"] ."<br>";
    //echo "Size:" .$_FILES["filePic"]["size"] ."<br>";
    //echo "Temp name:" .$_FILES["filePic"]["tmp_name"] ."<br>";
    //echo "Error:" .$_FILES["filePic"]["error"] ."<br>";

    move_uploaded_file($_FILES["filePic"]["tmp_name"],"images/products/" .$_FILES["filePic"]["name"]);
    $sqlInsert = "INSERT INTO product (name,description,price,unitInStock,picture)VALUES('$name','$desc',$price,$unitInStock,'$filename')";
    $result = $conn->query($sqlInsert);
    if($result){
        echo"<script> alert('Upload Complete');</script>";
        header("Location: newproduct.php");
    }
    else{
        echo "Error during insert: ".$conn->error;
    }
}
    
?>