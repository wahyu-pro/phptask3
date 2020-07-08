<?php

class Hash {
    function md5($str)
    {
        echo md5($str);
    }
    function sha1($str){
        echo sha1($str);
    }
    function sha256($str){
        echo hash("sha256", $str);
    }
    function sha512($str){
        echo hash("sha512", $str);
    }
}

$result = new Hash();
$result->md5("secret");
$result->sha1("secret");
$result->sha256("secret");
$result->sha512("secret");

?>