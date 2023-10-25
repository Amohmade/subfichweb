<?php 

$dir = "imgusers\";

if(isset($_FILES["imgs"])){

    foreach($_FILES["imgs"]["name"] as $key => $value){

        foreach($_FILES["imgs"]["tmp_name"] as $key => $tmp_value){

            if(file_exists($_FILES[$dir.$tmp_value])){
                echo "Ya existe un archivo con ese nombre.";
            }
            else{
                move_uploaded_file($tmp_value,$dir.'/'.$value);
            }
        }
    }
    echo "Se han subido los archivos correctamente.";
}

?>