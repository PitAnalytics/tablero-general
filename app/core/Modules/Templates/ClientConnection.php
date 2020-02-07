<?php
//
namespace Core\Modules\Templates;
//
use GuzzleHttp\ClientInterface as ClientInterface;
//
class ClientConnection{

  //atributo de cliente
  protected $client;

  //inyectamos dependencia de cliente
  public function __construct(ClientInterface $client){
    
    //instanciamos atributo en base a dependencia inyectada
    $this->client=$client;

  }
  
}
?>