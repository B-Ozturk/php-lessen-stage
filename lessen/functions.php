<?php

function validate_email($input){
    $parts = explode('@',$input);


    if (count($parts) === 2){
        $domain = explode('.',$parts[1]);
        if (count($domain) > 1){
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}