<?php function check($text_from_form){
        $var = htmlspecialchars($text_from_form);
        $var = strip_tags($var);
        $var = stripslashes($var);

        return $var;
    }
?>