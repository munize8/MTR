<?php
    function image2base64($path){
        $type = pathinfo($path, PATHINFO_EXTENSION);
        if(file_exists($path)){
            $data = file_get_contents($path);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
            return $base64;
        }else{
            return $path;
        }
    }
?>
