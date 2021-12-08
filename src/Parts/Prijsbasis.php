<?php

namespace Wefabric\INSBOU003Converter\Parts;

use Spatie\DataTransferObject\DataTransferObject;

class Prijsbasis extends DataTransferObject
{
    public int $AantalPrijsbasis;
    public string $Prijseenheid;

    /**
     * @return Prijsbasis Object
     */
    public static function make(array $data = []):Prijsbasis
    {
        return new self($data);
    }

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

}