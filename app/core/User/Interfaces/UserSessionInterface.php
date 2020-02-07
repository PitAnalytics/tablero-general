<?php

//interface namespace by psr-4 and composer
namespace Core\User\Interfaces;

//interface for full table
interface UserSessionInterface{

    //establecemos el usuario en base a string(global de sesion)
    public function setUserSession(string $session);

    //tomamos el usuario
    public function getUserSession();

}
?>
