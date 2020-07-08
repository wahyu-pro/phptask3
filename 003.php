<?php

class Login{
    protected $users, $currentLogin;
    function __construct(){
        $this->users = ["username" => "root", "password" => "secret"];
    }
    function data_user(){
        return $this->users;
    }
}

class Auth extends Login{
    function login($data){
        $login = $data;
        $user = parent::data_user();
        if($login['username'] == $user['username'] and $login['password'] == $user['password']){
            $this->currentLogin = [
                "id_user" => 1,
                "username" => $login["username"],
                "password" => $login["password"],
                "time_login" => date("Y/m/d H:i:s"),
                "status" => "logged in"
            ];
        }
    }

    function validate($data){
        $login = $data;
        $user = parent::data_user();
        if($login['username'] == $user['username'] and $login['password'] == $user['password']){
            return true;
        }
    }

    function logout(){
        $this->currentLogin["status"] = "logout";
        $this->currentLogin["time_login"] = date("Y/m/d H:i:s");
    }

    function user()
    {
        $user_login = [
            "username" => $this->currentLogin["username"]
        ];
        echo "Username : ".$user_login["username"];
    }

    function id(){
        echo "Id User : ".$this->currentLogin["id_user"];
    }

    function check(){
        if($this->currentLogin['status'] == "logged in"){
            echo "Login : True";
        }else{
            echo "Login : False";
        }
    }

    function guest(){
        if($this->currentLogin['status'] == "logout"){
            echo "Logout : True";
        }else{
            echo "Logout : False";
        }
    }

    function lastLogin(){
        echo "Last Login : ".$this->currentLogin['time_login'];
    }
}

$auth = new Auth();
$auth->login(["username" => "root", "password" => "secret"]);
$auth->validate(["username" => "root", "password" => "secret"]);
$auth->logout();
echo "\n";
$auth->user();
echo "\n";
$auth->id();
echo "\n";
$auth->check();
echo "\n";
$auth->guest();
echo "\n";
$auth->lastLogin();




?>