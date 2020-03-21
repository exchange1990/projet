<?php
function validateInput($str)
{
    return stripslashes(htmlspecialchars(trim($str)));
}
function comparePwd($pwd,$pwd1){
    if($pwd===$pwd1){
        return true;
    }
    else{
        return false;
    }
}