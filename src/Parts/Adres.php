<?php

namespace Wefabric\INSBOU003Converter\Parts;

use \SimpleXMLElement;
use Spatie\DataTransferObject\DataTransferObject;

use Wefabric\INSBOU003Converter\INSBOU003;

//TODO Replace this class with package: Wefabric\\Address ?
Class Adres extends DataTransferObject
{
    public string $Straat;
    public string $Postcode;
    public string $Plaats;
    public ?string $Rayon;
    public string $Landcode;

    /**
     * @return Adres Object
     */
    public static function make(array $data = []): Adres
    {
        return new self($data);
    }

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }


}