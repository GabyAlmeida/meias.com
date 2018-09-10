<?php
require "modelo/loginModelo.php";

define('AUTENTICADOR', true);

function authLogin($login, $passwd) {
    $user = pegarLogin($login,$passwd);

    if (!empty($user)) {
        if ($user["tipousuario"] === "admin") {//aq
            $_SESSION["auth"] = array("user" => "admin", "role" => "admin");
            return true;
        }
        if ($user["tipousuario"] === "user") {//aq
            $_SESSION["auth"] = array("user" => "user", "role" => "user");
            return true;
        }    
    }else{
        return false;
    }
}

function authIsLoggedIn() {
    return isset($_SESSION["auth"]);
}

function authLogout() {
    if (isset($_SESSION["auth"])) {
        $_SESSION["auth"] = null;
        unset($_SESSION["auth"]);
    }
}

function authGetUserRole() {
    if (authIsLoggedIn()) {
        return $_SESSION["auth"]["role"];
    }
}

function estaLogado() {
    return isset($_SESSION["auth"]);   
}

function adminEstaLogado() {
    return (isset($_SESSION["auth"]) && ($_SESSION["auth"]["role"] == "admin"));
}