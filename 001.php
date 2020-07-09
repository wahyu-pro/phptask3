<?php

class Hash {
    protected $str;
    function __construct($str)
    {
        $this->str = $str;
    }
    function md5()
    {
        echo md5($this->str);
    }
    function sha1(){
        echo sha1($this->str);
    }
    function sha256(){
        echo hash("sha256", $this->str);
    }
    function sha512(){
        echo hash("sha512", $this->str);
    }
}

$result = new Hash("secret");
$result->md5();
$result->sha1();
$result->sha256();
$result->sha512();

?>