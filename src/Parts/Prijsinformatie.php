<?php

namespace Wefabric\INSBOU003Converter\Parts;

use Spatie\DataTransferObject\DataTransferObject;

class Prijsinformatie extends DataTransferObject
{
    public float $Nettoprijs;
    public Prijsbasis $Prijsbasis;

    /**
     * @return Prijsinformatie Object
     */
    public static function make(array $data = []): Prijsinformatie
    {
        return new self($data);
    }

    public function __construct(array $data = [])
    {
        if(isset($data['Prijsbasis']) && is_array($data['Prijsbasis'])){
            $data['Prijsbasis'] = new Prijsbasis($data['Prijsbasis']);
        }

        parent::__construct($data);
    }

}