<?php
function validate_image( $path,$files )
{

    $target = $path;

    $default = "ethiojob.jpg";
    $filename = basename($files['name']);
 
    $targetpath = $target . $filename;
    
    $filetype =  strtolower( pathinfo($targetpath, PATHINFO_EXTENSION));
    if(!empty($filename)){
        $allowtype = array("jpg", "png", "jpeg", "gif");
        if(in_array( $filetype, $allowtype)){
            if (move_uploaded_file($files['tmp_name'], $targetpath)) {
                return $targetpath;
             }
     
        } else
            return '';
    }
  
    return $path . $default;
}

function validate_text($text){
    if (!empty($text)) {
        $trim_txt=trim($text);
        return filter_var($trim_txt,FILTER_SANITIZE_STRING);
    }
}







