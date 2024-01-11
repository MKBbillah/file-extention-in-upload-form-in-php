<?php

function fileUpload($dirname="studentimage",$type=array("jpg","JPG","png","PNG"),$filename){
    $file_extension= $type;

    $filebase_name = basename($filename['name']);

    $file_array_name = explode(".",$filebase_name);

    $file_size = $filename['size'];

if(in_array($file_array_name[1],$file_extension)){
    $file_destination = "$dirname/".basename($filename['name']);;
    $file_tem_name = $filename['tmp_name'];
    
    move_uploaded_file($file_tem_name,$file_destination);

    return $file_destination;
}
else{
    return  "not supported";
}

}

$exten = array("jpg","PNG");

$filename = $_FILES['userimage'];

$filedir = "image";

$filename = $_FILES['userimage'];

echo fileUpload("image",$exten,$filename);
?>