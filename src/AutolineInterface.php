<?php

namespace App\Vendors;

interface AutolineInterface
{
    const URL = 'https://api2.autoline.com.br/integradoras.asmx?wsdl';


    public function addVehicle();

    /**
     * 5.4.25.
     * Método ConsultarAnuncios()
     * @return array
     */
    public function getVehicles(): array;


    /**
     * 5.4.26.
     * Método ConsultarAnuncio(int AdId)
     * @return array
     */
    public function getVehicle(): array;
}
