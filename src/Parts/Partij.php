<?php

namespace Wefabric\INSBOU003Converter\Parts;

use Spatie\DataTransferObject\DataTransferObject;

abstract class Partij extends DataTransferObject
{
    protected int $type; //PartijType
    public ?string $GLN;
    public ?string $Naam;
    public ?Adres $Adres;

    public function __construct(array $data = [])
    {
        if(isset($data['Adres']) && is_array($data['Adres'])){
            $data['Adres'] = new Adres($data['Adres']);
        }

        parent::__construct($data);
    }
}