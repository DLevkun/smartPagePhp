<?php
    $page = $_GET['page'];
    
    if($page == "account"){
        if(isset($_COOKIE["username"])){
            $page = "form-action";
        }else{
            $page = "account";
        }
    }
    require_once "{$page}.php";
?>