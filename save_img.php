<?php
    function makeDir($path){
        return is_dir($path) || mkdir($path);
    }
    // create new imges capture method
    $dirname = "captured/";
    $img1    = $_POST['image'];
    $img2    = $_POST['image2'];
    $img3    = $_POST['image3'];
    $folderPath = "./";

    $image_parts1 = explode(";base64,", $img1);
    $image_parts2 = explode(";base64,", $img2);
    $image_parts3 = explode(";base64,", $img3);

    $image_type_aux1 = explode("image/", $image_parts1[0]);
    $image_type_aux2 = explode("image/", $image_parts2[0]);
    $image_type_aux3 = explode("image/", $image_parts3[0]);

    $image_type1 = $image_type_aux1[1];
    $image_type2 = $image_type_aux2[1];
    $image_type3 = $image_type_aux3[1];
    
    $image_base64a = base64_decode($image_parts1[1]);
    $image_base64b = base64_decode($image_parts2[1]);
    $image_base64c = base64_decode($image_parts3[1]);
    
    if(makeDir($dirname)){
        $file1 = $dirname . "a.png";
        $file2 = $dirname . "b.png";
        $file3 = $dirname . "c.png";

        file_put_contents($file1, $image_base64a);
        file_put_contents($file2, $image_base64b);
        file_put_contents($file3, $image_base64c);
        echo" file uploaded";
    }else{
        echo" file not up";
    }

?>
