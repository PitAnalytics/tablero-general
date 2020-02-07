<?php
//
namespace Core\Modules\Templates;
//
class SocketConnection{

    //instancia de socket privada
    protected $socket;

    //injectamos objeto de socket
    public function __construct(object $socket){

        $this->socket=$socket;

    }
    
}

?>