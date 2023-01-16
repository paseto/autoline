<?php

namespace App\Vendors;

class AutolineService extends AbstractAPIIntegration implements AutolineInterface
{

    private $authEmail;
    private $authDoc;
    private $authPassword;

    public function __construct($authEmail, $authDoc, $authPassword)
    {
        $this->authEmail = $authEmail;
        $this->authDoc = $authDoc;
        $this->authPassword = $authPassword;
    }

    private function connect()
    {
        try {
            $client = new \SoapClient(self::URL);
            $client->__setLocation(self::URL);
            return $client;
        } catch (\SoapFault $exception) {
            return false;
        }
    }


    public function addVehicle()
    {
        // TODO: Implement addVehicle() method.
    }

    public function getStates()
    {
        $client = $this->connect();
        $response = $client->ConsultarAnuncios(['userEmail' => $this->authEmail, 'userPassword' => $this->authPassword]);
        return $response;
    }
}
