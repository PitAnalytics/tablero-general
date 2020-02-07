<?php
//interface namespace by psr-4 and composer
namespace Core\Modules\Interfaces;

use Core\User\Interfaces\UserSessionInterface as UserSessionInterface;

interface UserScopeInterface{

    //establecemos el usuario en base a string(global de sesion)
    public function setUser(UserSessionInterface $user);

    //tomamos el usuario
    public function getUser();

}

?>
