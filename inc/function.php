<?php

function uploadFile($file) {

    $imgName = $_FILES[$file]["name"];
    $imgLoc = $_FILES[$file]["tmp_name"];
    $imgNewName = time().rand().$imgName;

    $path = "images/$imgNewName";
    move_uploaded_file($imgLoc, $path);
    return $path;
 
}
