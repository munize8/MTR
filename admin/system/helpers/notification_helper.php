<?php


function notify($notify_flag = false,$notify_text = NULL, $notify_style = 'success') {
//    var_dump($notify_flag,$notify_style,$notify_text);
//                --code to generate notification--
    $script = '<script>$(document).ready(function(){';
    if ($notify_flag) {
        $script .= 'noty({timeout:"3000" ,layout: "topCenter",type: "' . $notify_style. '",text: "' .$notify_text. '"});';
    }
    $script .= '});</script>';
        
//                    --ends--
    return $script;
}
?>
